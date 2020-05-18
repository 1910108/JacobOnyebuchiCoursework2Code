<!--Functions for the apply.php Form-->
<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "jacomp_plus");
  if (isset($_POST['apply'])) {
    // for the database
    $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$state_of_origin = $_POST['state_of_origin'];
$contact_address = $_POST['contact_address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$proposed_institution_of_study = $_POST['proposed_institution_of_study'];
$proposed_course_of_study = $_POST['proposed_course_of_study'];

    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "profileimages/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image Size Should Not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO applicants SET profile_image='$profileImageName', first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth', gender='$gender', state_of_origin='$state_of_origin', contact_address='$contact_address', phone_number='$phone_number', email='$email', proposed_institution_of_study='$proposed_institution_of_study', proposed_course_of_study='$proposed_course_of_study'";
        if(mysqli_query($conn, $sql)){
          $msg = "You Have Successfully Applied";
          $msg_class = "alert-success";
	header('location: applicantDashboard.php');
        } else {
          $msg = "Error!";
          $msg_class = "Alert-Danger!";
        }
      } else {
        $error = "Error!";
        $msg = "Alert-Danger";
      }
    }
  }
?>