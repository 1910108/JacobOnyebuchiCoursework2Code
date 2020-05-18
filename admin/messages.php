<!--A page for the the admin to read or delete messages from users, including visitors of the website-->
<?php include('../functions.php') ?>
<?php include('messagesFunction.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jacomp+ Scholarship Portal | Admin's Dashboard - View/Read/Delete Emails</title>
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
    <!--fetch emails from the emails table in the database and display them in a tabukar form with the delete buttons-->
<?php $results = mysqli_query($db, "SELECT * FROM emails"); ?>
<div class="container">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 align="center"><b>Admin: View | Read | Delete Messages</b></h3>
            </div>
<div class="card-body">
    <!--style the table and display the fetched data. Delete if del_btn is clicked-->
<table class="table table-striped table-bordered" class="display nowrap" style="width:100%" align="justify">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>Subject</th>
			<th>Message</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['subject']; ?></td>
			<td><?php echo $row['message']; ?></td>
			<td>
				<a href="messagesFunction.php?del=<?php echo $row['sender_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	</div>
    </div>
        </div>
</div>
</body>
</html>