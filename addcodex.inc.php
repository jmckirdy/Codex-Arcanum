<?php

$catid = $_POST['catid'];
// $catid = 1;

$title = addslashes($_POST['title']);
$poster = addslashes($_POST['poster']);
$typeof = addslashes($_POST['typeof']);
$textfile = addslashes(htmlspecialchars($_POST['textfile']));

$fileupload = addslashes(htmlspecialchars($_POST['fileupload']));

if (trim($poster) == "")
{
    echo "<p>Sorry, you must be logged in to upload</p>\n";
}else
{
    include('library/login.php');
    $con = login();

    $query = "INSERT INTO codices (catid, typeof, title, poster, textfile) "  .


          " VALUES ('$catid', '$typeof', '$title', '$poster', '$textfile')";


    $result = mysqli_query($con, $query) or die(mysqli_error($con));
}
    if ($result) {
       echo "<p>Upload Successful</p>\n";
    //    echo "var_dump($catid)\n";
    } else {
       echo "<p>Sorry, there was a problem with your upload</p>\n";
}

 
?>