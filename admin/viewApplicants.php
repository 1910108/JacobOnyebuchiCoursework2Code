<!--A page for the the admin to view all registered applicants from the dashboard-->
<?php
// connect to the database and fetch all applicants from the applicants table
  $conn = mysqli_connect("localhost", "root", "", "jacomp_plus");
  $results = mysqli_query($conn, "SELECT * FROM applicants");
  $applicants = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jacomp+ Scholarship Portal | View Applicants</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--style the table to display all the applicants-->
<div class="container">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 align="center"><b>Applicants</b></h3>
            </div>
  
        <table class="table table-striped table-bordered" class="display nowrap" style="width:100%" align="justify">
          <thead>
            <th>Passport Photograph</th>
            <th>First Name</th>
<th>Last Name</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>State Of Origin</th>
<th>Contact Address</th>
<th>Phone Number</th>
<th>Email</th>
<th>Proposed Institution Of Study</th>
<th>Proposed Course Of Study</th>
          </thead>
          <tbody>
            <?php foreach ($applicants as $applicant): ?>
              <tr>
                <td> <img src="<?php echo '../profileimages/' . $applicant['profile_image'] ?>" width="90" height="90" alt=""> </td>
                <td> <?php echo $applicant['first_name']; ?> </td>
<td> <?php echo $applicant['last_name']; ?> </td>
<td> <?php echo $applicant['date_of_birth']; ?> </td>
<td> <?php echo $applicant['gender']; ?> </td>
<td> <?php echo $applicant['state_of_origin']; ?> </td>
<td> <?php echo $applicant['contact_address']; ?> </td>
<td> <?php echo $applicant['phone_number']; ?> </td>
<td> <?php echo $applicant['email']; ?> </td>
<td> <?php echo $applicant['proposed_institution_of_study']; ?> </td>
<td> <?php echo $applicant['proposed_course_of_study']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>