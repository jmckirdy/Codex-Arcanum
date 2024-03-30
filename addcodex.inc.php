<?php

// $catid = $_POST['catid'];
$catid = 1;

$title = addslashes($_POST['title']);
$poster = addslashes($_POST['poster']);
// $shortdesc = addslashes($_POST['shortdesc']);
$textfile = addslashes(htmlspecialchars($_POST['textfile']));


if (trim($poster) == "")
{
    echo "<h2>Sorry, you must be logged in to upload</h2>\n";
}else
{
    include('library/login.php');
    $con = login();
    // $con = mysqli_connect("localhost", "test", "test", "recipes") or die('Could not connect to server');


    $query = "INSERT INTO codices (catid, title, poster, textfile) "  .


          " VALUES ('$catid', '$title', '$poster', '$textfile')";


    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if ($result)
       echo "<h2>Upload Successful</h2>\n";
    else
       echo "<h2>Sorry, there was a problem with your upload</h2>\n";
}

 
?>