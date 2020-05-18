<?php 
include('../functions.php');
if (!isAdmin()) { //To ensure that it's the Admin that has access to this page and logged in
	$_SESSION['msg'] = "You Must Log In First";
	header('location: ../login.php');
}
//logging out from the admin page
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jacomp+ Scholarship Portal | Admin's Dashboard</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS and JavaScript/JQuery file-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<!--for the logout icon on the navbar. onclick queries the admin if he really wants to log out-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href=" ../login.php?logout='1'" onclick="return(confirm('Are You Sure You want to Logout?'))"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--Admin functionalities via the left side nav links to create/view/edit/update/delete users or read/delete messgages and also to log out-->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="create_user.php">Create User</a></p>
      <p><a href="viewUsers.php">Users</a></p>
      <p><a href="viewApplicants.php">Applicants</a></p>
      <p><a href="messages.php">Messages</a></p>
      <p><a href="../login.php?logout='1'" onclick="return(confirm('Are You Sure You want to Logout?'))">Logout</a></p>
    </div>
    <div class="col-sm-8 text-left">
<h1 align="center">Admin's Dashboard</h1>

<!-- logged in admin information -->
<?php  if (isset($_SESSION['user'])) : ?>
					<h3><p>Welcome&nbsp;<strong><?php echo $_SESSION['user']['first_name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					</small></p></h3>

				<?php endif ?>
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
<?php endif ?>
<!-- Detect if it's an admin-->
<br><h4 align="center">You Are An&nbsp;<strong style="color:blue"><i>Admin</i>&nbsp;</strong>Of This Portal</h4>
<hr>

</div>
    <div class="col-sm-2 sidenav">
<!-- Display admin's First Name -->
      <div class="well">
        <?php  if (isset($_SESSION['user'])) : ?>
					<p>First Name:&nbsp;<strong><?php echo $_SESSION['user']['first_name']; ?></strong></p>

				<?php endif ?>
      </div>
<!-- Display admin's Last Name -->
      <div class="well">
        <?php  if (isset($_SESSION['user'])) : ?>
					<p>Last Name:&nbsp;<strong><?php echo $_SESSION['user']['last_name']; ?></strong></p>

				<?php endif ?>
      </div>
<!-- Display admin's Email address-->
      <div class="well">
<?php  if (isset($_SESSION['user'])) : ?>
					<p>Email:&nbsp;<strong><?php echo $_SESSION['user']['email']; ?></strong></p>

				<?php endif ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>

