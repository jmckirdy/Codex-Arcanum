<div class='flex-container'>
<?php
// commentid, or codexid?
// $id = $_POST['id'];
// $id = 8;

$poster = $_POST['poster'];
// $poster = 'Ted Lassoo';

// Now this is causing problems, it is undefined
// Hardcoding it for TESTING
$codexid = $_POST['codexid'];

$date = date("Y-m-d");

$comment = htmlspecialchars($_POST['comment']);


include('library/login.php');
$con = login();

// $query = "INSERT INTO comments (commentid, poster, date, codexid, comment) " .
//          " VALUES ($id, '$poster', '$date', '$codexid', '$comment')";

// $query = "INSERT INTO comments (poster, date, codexid, comment) " .
//          " VALUES ('$poster', '$date', '$codexid', '$comment')";

$query = "INSERT INTO comments (poster, date, codexid, comment) " .
         " VALUES ('$poster', '$date', '$codexid', '$comment')";

$result = mysqli_query($con, $query);

if ($result) {
   echo "<p>Enchantment Cast!</p>\n";
} else {
   echo var_dump($con, $query) . "<br>\n";
   echo "<p>Sorry, there was a problem casting your enchantment</p>\n";
   echo "<a href=\"index.php?content=showrcodex&id=$codexid\">Return to codex</a>\n";
}
?>
</div>