<!--A page for the the admin to view/edit/update registered users-->
<?php 
// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'jacomp_plus');

	// initialize variables
	$first_name = "";
	$last_name = "";
	$user_type = "";
	$email = "";
	$password = "";
	$id = 0;
	$update = false;

	// add user to the database when save button is clicked 
	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_type = $_POST['user_type'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		mysqli_query($db, "INSERT INTO users (first_name, last_name, user_type, email, password) VALUES ('$first_name', '$last_name', '$user_type', '$email', '$password')"); 
		$_SESSION['message'] = "User saved"; 
		header('location: viewUsers.php');
	}

// update users details when update button is clicked
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_type = $_POST['user_type'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		mysqli_query($db, "UPDATE users SET first_name='$first_name', last_name='$last_name', user_type='$user_type', email='$email', password='$password' WHERE id=$id");
		$_SESSION['message'] = "User Updated!"; 
		header('location: viewUsers.php');
	}

	// delete user from the database
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users WHERE id=$id");
	$_SESSION['message'] = "User deleted!"; 
	header('location: viewUsers.php');
}


	$results = mysqli_query($db, "SELECT * FROM users");


?>