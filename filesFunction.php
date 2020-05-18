<!--Functions for the uploadFiles.php page for handling file uploads-->
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'jacomp_plus');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['upload_file']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['upload_file']['tmp_name'];
    $size = $_FILES['upload_file']['size'];

    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'zip', 'pdf', 'docx'])) {
        echo "You file extension must be .jpg, .jpeg, .png, .zip, .pdf or .docx";
    } elseif ($_FILES['upload_file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size) VALUES ('$filename', $size)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}