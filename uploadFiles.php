<!--This page is for the file uploading system-->
<?php include 'filesFunction.php';?>
<?php include 'functions.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styleUploadFile.css">
    <title>Jacomp+ Scholarship Portal | Upload File</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="uploadFiles.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="upload_file"> <br>
          <button type="submit" name="save">Upload</button>
        </form>
      </div>
    </div>
  </body>
</html>