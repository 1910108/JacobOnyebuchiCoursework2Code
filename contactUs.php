<!--for Contact Us page-->
<?php include('contactUsFunction.php') ?>
<!DOCTYPE html>
<html lang="en" style="background-color:#006654">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Jacomp+ Scholarship Portal | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-responsive">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="candidate-login-body">
<!--For the Contact Us Form to send emails to the admin-->
<div class="container">
    <form action="contactUs.php" class="form-signin" role = "form" method="post" accept-charset="utf-8">

        <div class="login-wrap">
	    <div class="form-group">
                <label for="First Name">First Name</label>
                <input type="text" name ="first_name" class="form-control" value=""  placeholder="First Name" required="" data-toggle = "tooltip"  title="Enter Your First Name Here">
            </div>
            <div class="form-group">
                <label for="Last Name">Last Name</label>
                <input type="text" name ="last_name" class="form-control" value=""  placeholder="Last Name" required="" data-toggle = "tooltip"  title="Enter Your Last Name Here">
            </div>
            <div class="form-group">
                <label for="Email address">Email address</label>
                <input type="email" name ="email" class="form-control" value="" placeholder="Email" required="" data-toggle = "tooltip"  title="Enter Your Email Here">
            </div>
            <div class="form-group">
                <label for="Subject"> Subject</label>
                <input type="text" name ="subject" class="form-control"   placeholder="Subject" required="" data-toggle = "tooltip" title="Enter Your The Subject Of Your Email Here">
            </div>
            <div class="form-group">
                <label for="Message"> Message</label>
                <textarea name ="message" class="form-control"   placeholder="Please, Write Your Messages Here" required="" data-toggle = "tooltip" title="Please, Write Your Messages Here"></textarea>
            </div>
            <button class="btn btn-lg btn-login btn-block" name="send_btn" type="submit" title="Click Here to Register" data-toggle = "tooltip">
                Send
            </button>
            <hr/>
        </div>
	<a href="homePage.php" class="label label-primary" style="margin:1em;color:white;"> Go Home </a>
    </form>
</div>
<!-- Placed js files at the end of the document for the pages to load faster -->
<script src="jquery-1.10.2.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="modernizr.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>