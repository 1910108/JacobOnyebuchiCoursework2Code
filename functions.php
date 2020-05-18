<!--Functions for the register, login, isLoggedIn, isAdmin, logout, display_error, escape string, returning user array from their array, checking if a user already exists in the database, etc-->
<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'jacomp_plus');

// variable declaration
$email    = "";
$first_name = "";
$last_name = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $email, $first_name, $last_name, $errors;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$email       =  e($_POST['email']);
	$first_name    =  e($_POST['first_name']);
	$last_name    =  e($_POST['last_name']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($email)) { 
		array_push($errors, "Email Is Required"); 
	}
	if (empty($first_name)) { 
		array_push($errors, "First Name Is Required"); 
	}
	if (empty($last_name)) { 
		array_push($errors, "Last Name Is Required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password Is Required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The Two Passwords Do Not Match");
	}

// first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email Already Exists");
    }
  }
	
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (email, first_name, last_name, user_type, password) 
					  VALUES('$email', '$first_tname', '$last_name','$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New User Successfully Created!!";
			header('location: adminPage.php');
		}else{
			$query = "INSERT INTO users (email, first_name, last_name, user_type, password) 
					  VALUES('$email', '$first_name', '$last_name','user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You Are Now Successfully Registered!!! Go Ahead To Login.";
			header('location: login.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email Is Required");
	}
	if (empty($password)) {
		array_push($errors, "Password Is Required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You Are Now Successfully Logged in!!!";
				header('location: admin/adminPage.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You Are Now Successfully Logged In!!!";

				header('location: applicantDashboard.php');
			}
		}else {
			array_push($errors, "Wrong Email/Password Combination");
		}
	}
}


// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button is clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
