<!--Applicants dashboard for completing the application process, uploading files, and logging out-->
<?php 
	include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You Must Log In First";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jacomp+ Scholarship Portal | Applicant's Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS/JQUery/JS-->
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
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
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

<!-- for the logout icon at the navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php?logout='1'" onclick="return(confirm('Are You Sure You want to Logout?'))"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<!--for the side nav links for application, file upload and log out-->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="apply.php">Apply</a></p>
      <p><a href="uploadFiles.php">Upload Files</a></p>
      <p><a href="login.php?logout='1'" onclick="return(confirm('Are You Sure You want to Logout?'))">Logout</a></p>
    </div>
    <div class="col-sm-8 text-left">
<h1 align="center">Applicant's Dashboard</h1>
<!-- logged in user information -->
<?php  if (isset($_SESSION['user'])) : ?>
					<h3><p>Welcome&nbsp;<strong><?php echo $_SESSION['user']['first_name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					</small></p></h3>

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
<!-- You Are Applying For Jacomp+ Scholarship -->
<br><h4 align="center">You Are Applying For <strong style="color:blue">Jacomp+ Scholarship</strong></h4>
      <hr>
      
    </div>
    <div class="col-sm-2 sidenav">
<!-- Display applicant's First Name -->
      <div class="well">
        <?php  if (isset($_SESSION['user'])) : ?>
					<p>First Name:&nbsp;<strong><?php echo $_SESSION['user']['first_name']; ?></strong></p>

				<?php endif ?>
      </div>
<!-- Display applicant's Last Name -->
      <div class="well">
        <?php  if (isset($_SESSION['user'])) : ?>
					<p>Last Name:&nbsp;<strong><?php echo $_SESSION['user']['last_name']; ?></strong></p>

				<?php endif ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
