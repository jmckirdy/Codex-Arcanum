<?php

include("library/login.php");
$con = login();

$userid = $_POST['userid'];
$password = $_POST['password'];

// maybe the userid and PASSWORD part isnt connecting
$query = "SELECT userid from users where userid = '$userid' and password = PASSWORD('$password')";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<h2>Sorry, your user account was not validated.</h2><br>\n";
    echo "<a href=\"index.php?content=login\">Try again</a><br>\n";
    echo "<a href=\"index.php\">Return to Home</a>\n";
} else {   
   $_SESSION['valid_codex_user'] = $userid;
   
   // TESTING    
   echo var_dump($_SESSION);
   
   echo "<h2>Your user account has been validated, you can now upload <a href=\"#\">books/codices/spells</a> and cast enchantments.</h2><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
}

?>

