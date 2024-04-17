<?php
include('library/login.php');
$con = login();

$catid = $_POST['catid'];
$title = addslashes($_POST['title']);
$poster = addslashes($_POST['poster']);
$typeof = addslashes($_POST['typeof']);
$textfile = addslashes(htmlspecialchars($_POST['textfile']));

// Check if file is uploaded successfully
if ($_FILES['fileupload']['error'] === UPLOAD_ERR_OK) {
    // Get file name and temporary location
    $file_name = $_FILES['fileupload']['name'];
    $file_tmp = $_FILES['fileupload']['tmp_name'];

    // Read file contents and sanitize it
    $file_data = file_get_contents($file_tmp);
    $file_data = mysqli_real_escape_string($con, $file_data);

    // First INSERT statement for the 'codices' table
    $query1 = "INSERT INTO codices (catid, typeof, title, poster, textfile) VALUES ('$catid', '$typeof', '$title', '$poster', '$textfile')";
    $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));

    // Second INSERT statement for the 'pdf_files' table
    $query2 = "INSERT INTO pdf_files (file_name, file_data) VALUES ('$title', '$file_data')";
    $result2 = mysqli_query($con, $query2) or die(mysqli_error($con));

    // Close database connection
    mysqli_close($con);

    if ($result1 && $result2) {
        echo "<p>Upload Successful</p>\n";
    } else {
        echo "<p>Sorry, there was a problem with your upload</p>\n";
    }
} else {
    echo "<p>File upload failed</p>\n";
}
?>