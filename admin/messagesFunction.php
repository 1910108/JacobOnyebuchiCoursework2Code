<!--A page for the messgages.php functions-->
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'jacomp_plus');

	// initialize variables
	$first_name = "";
	$last_name = "";
	$subject = "";
	$message = "";
	$sender_id = 0;
	$update = false;
	
	// delete emails when del_btn is triggered
if (isset($_GET['del'])) {
	$sender_id = $_GET['del'];
	mysqli_query($db, "DELETE FROM emails WHERE sender_id=$sender_id");
	$_SESSION['message'] = "Email deleted!"; 
	header('location: messages.php');
}

// query emails from database
	$results = mysqli_query($db, "SELECT * FROM emails");


?>