<!--Home page-->
<?php
//start of session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Jacomp+ Scholarship Application Portal | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
    margin-bottom: 0;
            border-radius: 0;
        }

        /* Set black background color, white text and some padding for the page */
        footer {
    background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body>
<!-- Designing And Coding The Navigation Bar And Tabs-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><b>Jacomp+</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="homePage.php">Home</a></li>
                <li><a href="approvedUniversitiesAndCoursesPage.php">Approved Universities And Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>


<!--SLIDER START-->
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/jacomp.jpg" alt="Jacomp+ four" style="width:100%;">
		<div class="carousel-caption" style="color:black">
                     <h3><b>Jacomp+...</b></h3>
                     <p><b>Computing Technology Is The Future...</b></p>
                </div>
            </div>

            <div class="item">
                <img src="images/usa.jpg" alt="Jacomp+ five" style="width:100%;">
		<div class="carousel-caption" style="color:black">
                     <h3><b>Have You Been Dreaming Of Studying In Harvard / MIT?...</b></h3>
                     <p><b>Now Is Your Chance To Make That Dream Of Yours A Reality With Jacomp+...</b></p>
                </div>
            </div>

            <div class="item">
                <img src="images/uk.jpg" alt="Jacomp+ six" style="width:100%;">
		<div class="carousel-caption" style="color:black">
                     <h3><b>The UK Is One Of The Best Destinations For Studies...</b></h3>
                     <p><b>Gear Up!...</b></p>
                </div>
            </div>

            <div class="item">
                <img src="images/oxford.jpg" alt="Jacomp+ seven" style="width:100%;">
		<div class="carousel-caption" style="color:black" style="font-size:30px">
                     <h3><b>Who Wouldn't Love To Be An Oxford Product?...</b></h3>
                     <p><b>There You Go!!!...</b></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--SLIDER END-->

<!--Home Page Description Of Jacomp+, The Online Scholarship Portal, And Other Information As Regards The Scholarship Application Process-->
<div class="container">
    <div class="row content">
        <h1 align="center">Welcome</h1>
        <p align="justify">Welcome to the Jacomp+ scholarship application portal. Jacomp+ is a tech academy that sponsors some Nigerian first degree holders to study computing technology courses (MSc) abroad so as to promote the advancement of computing technology in Nigeria.</p><p align="justify">Presently, we are sponsoring Nigerians of Abia, Anambra, Ebony, Enugu and Imo origins, who are first degree holders from Nigerian universities only.</p><p align="justify">Jacomp+ has decided to digitize the application process by building this web application portal to efficiently handle the scholarship application process.Please, ensure that you correctly fill in your details while applying. Before starting your applications, please check our <a href="approvedUniversitiesAndCoursesPage.php">approved universities with their respective courses</a> to make your choice. You are allowed to choose a course from your university of choice from the list.</p><p>Don't hesitate to <a href="contactUs.php">contact us</a>, with your queries.</p>
        <h3 align="center">Good Luck With Your Applications!!!</h3>
        <hr>
    </div>
</div>

<!--Login and Register Buttons-->
<div class="container" align="center">
    <a href="register.php" class="btn btn-primary btn-lg active" name="register_btn" role="button" aria-pressed="true">CREATE APPLICANT ACCOUNT</a>
    <a href="login.php" class="btn btn-primary btn-lg active" name="login_btn" role="button" aria-pressed="true">LOGIN WITH EXISTING ACCOUNT</a>
</div>

<!--FOOTER-->
<footer class="container-fluid text-center">
    <p>© 2020 Jacomp+, Inc.</p>
</footer>
</body>
</html>