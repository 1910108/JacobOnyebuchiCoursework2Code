<!--Functions for the contactUs.php Form-->
<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'jacomp_plus');

$email    = "";
$first_name = "";
$last_name = "";
$subject = "";
$message = "";
$errors   = array(); 

// call the contactUs() function if send_btn is clicked
if (isset($_POST['send_btn'])) {
	contactUs();
}

// REGISTER USER
function contactUs(){
	// call these variables with the global keyword to make them available in function
	global $db, $email, $first_name, $last_name, $subject, $message, $errors;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$email       =  e($_POST['email']);
	$first_name    =  e($_POST['first_name']);
	$last_name    =  e($_POST['last_name']);
	$subject  =  e($_POST['subject']);
	$message  =  e($_POST['message']);

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
	if (empty($subject)) { 
		array_push($errors, "Subject Is Required"); 
	}
	if (empty($message)) {
		array_push($errors, "Message Is Required");
	}
	
	// Send email if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO emails (first_name, last_name, email, subject, message) 
					  VALUES('$first_name', '$last_name', '$email', '$subject', '$message')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Email Successfully Sent!!";
			 header('location: homePage.php');
	}
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
