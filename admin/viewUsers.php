<!--A page for the the admin to view all registered users which can also be other admins-->
<?php include('../functions.php') ?>
<?php include('usersFunction.php');
if (isset($_GET['edit'])) {
		$id = $_GET['edit']; // id of the user to be edited
		$update = true; // a boolean variable for determing if the button is on update mode
		$record = mysqli_query($db, "SELECT * FROM users WHERE id=$id");//querying user id from the users table

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$first_name = $n['first_name'];
			$last_name = $n['last_name'];
			$email = $n['email'];
			$user_type = $n['user_type'];
			$password = $n['password'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jacomp+ Scholarship Portal | Admin's Dashboard - View/Edit/Delete Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styleEditProfile.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
    <!--fetch users from the users table to display with the Edit and Delete Buttons--> 
<?php $results = mysqli_query($db, "SELECT * FROM users"); ?>
<div class="container">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 align="center"><b>Admin: View | Edit/Update | Delete Users</b></h3>
            </div>
<div class="card-body">
<table class="table table-striped table-bordered" class="display nowrap" style="width:100%" align="justify">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>User Type</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['user_type']; ?></td>
			<td>
				<a href="viewUsers.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="usersFunction.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	</div>
    </div>
        </div>
</div>
    <!--Form for updating users' details-->
<form method="post" action="usersFunction.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="first_name" value="<?php echo $first_name; ?>">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="last_name" value="<?php echo $last_name; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>
</body>
</html>