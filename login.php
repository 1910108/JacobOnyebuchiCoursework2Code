<!--Login Form-->
<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Jacomp+ Scholarship Application Portal | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-responsive">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<!--styling of the login Form-->
<body class="candidate-login-body">
<div class="container">
    <form action="login.php" class="form-signin" role = "form" method="post" accept-charset="utf-8">
        <!--display error if there is any in the Form-->
        <?php echo display_error(); ?>
        <div class="login-wrap">
            <div class="form-group">
                <label for="Email address"> Email address</label>
                <input type="email" name ="email" class="form-control" id="username" value="" placeholder="Email" required="" data-toggle = "tooltip"  title="Enter Your Email Here">
            </div>
            <div class="form-group">
                <label for="Password"> Password</label>
                <input type="password" name ="password" class="form-control" id="loginpassword" placeholder="Password" required="" data-toggle = "tooltip" title="Enter Your Password Here">
            </div>

            <button class="btn btn-lg btn-login btn-block" name="login_btn" type="submit" title="Click Here to Login" data-toggle = "tooltip"">
                Login
            </button>
            <!--Register if not yet registered-->
            <div class="registration">
                Dont have an account yet?
                <a class="" href="register.php">
                    Create an account Here
                </a>
            </div>
            <hr/>
        </div>
        <!--Go to homePage-->
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