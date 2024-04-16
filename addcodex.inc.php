<?php

// $catid = $_POST['catid'];
$catid = 1;

$title = addslashes($_POST['title']);
$poster = addslashes($_POST['poster']);
// $shortdesc = addslashes($_POST['shortdesc']);
$textfile = addslashes(htmlspecialchars($_POST['textfile']));


if (trim($poster) == "")
{
    echo "<p>Sorry, you must be logged in to upload</p>\n";
}else
{
    include('library/login.php');
    $con = login();

    $query = "INSERT INTO codices (catid, title, poster, textfile) "  .


          " VALUES ('$catid', '$title', '$poster', '$textfile')";


    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if ($result)
       echo "<p>Upload Successful</p>\n";
    else
       echo "<p>Sorry, there was a problem with your upload</p>\n";
}

 
?>