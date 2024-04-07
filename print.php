<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="print.css" />
<title>Codex Arcanum</title>
</head>

<body>
<?php
include('library/login.php');
$con = login();

if(isset($_GET['id'])) {
    $codexid = $_GET['id'];
} else {
    echo "No 'id' parameter found in URL";
    exit;
}

$query = "SELECT title,poster,textfile from codices where codexid = $codexid";  //$codexid was $id causing a big confusion, CHECK YOUR VARIABLE NAMES!!
// var_dump($query);

$result = mysqli_query($con, $query) or die('Could not find codex');

$row = mysqli_fetch_array($result) or die('No records retrieved');

$title = $row['title'];

$poster = $row['poster'];

$textfile = $row['textfile'];

$textfile = nl2br($textfile);


echo "<h2>$title</h2>\n";

echo "posted by $poster <br>\n";

echo $textfile . "\n";
?>
</body>
</html>

