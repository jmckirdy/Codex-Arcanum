<?php

$catid = $_POST['catid'];
// $catid = 1;

$title = addslashes($_POST['title']);


$poster = addslashes($_POST['poster']);
$typeof = addslashes($_POST['typeof']);
$textfile = addslashes(htmlspecialchars($_POST['textfile']));

// $file_name = addslashes($_POST['file_name']);
$file_data = addslashes(htmlspecialchars($_POST['file_data']));

if (trim($poster) == "")
{
    echo "<p>Sorry, you must be logged in to upload</p>\n";
}else
{
    include('library/login.php');
    $con = login();

    // $query = "INSERT INTO codices (catid, typeof, title, poster, textfile) "  .
    //       " VALUES ('$catid', '$typeof', '$title', '$poster', '$textfile')";
    // $result = mysqli_query($con, $query) or die(mysqli_error($con));




// First INSERT statement for the 'codices' table
$query1 = "INSERT INTO codices (catid, typeof, title, poster, textfile) VALUES ('$catid', '$typeof', '$title', '$poster', '$textfile')";
$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));

// Second INSERT statement for the 'pdf_files' table
$query2 = "INSERT INTO pdf_files (file_name, file_data) VALUES ('$title', '$file_data')";
$result2 = mysqli_query($con, $query2) or die(mysqli_error($con));

// Close database connection
// consider putting the close connection on all other connections for security
mysqli_close($con);


}
    if ($result1 && $result2) {
       echo "<p>Upload Successful</p>\n";
    //    echo "var_dump($catid)\n";
    } else {
       echo "<p>Sorry, there was a problem with your upload</p>\n";
}

 
?>