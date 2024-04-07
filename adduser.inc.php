<div class="flex-container">
<?php
include("library/login.php");
$con = login();


if (!$con) {
   echo "<p>Sorry, we cannot process your request at this time, please try again later</p>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   exit;
}


$userid = $_POST['userid'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$baduser = 0;


// Check if userid was entered
if (trim($userid) == '') {
   echo "<p>Sorry, you must enter a user name.</p><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}


//Check if password was entered
if (trim($password) == '') {
   echo "<p>Sorry, you must enter a password.</p><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}


//Check if password and confirm password match
if ($password != $password2) {
   echo "<p>Sorry, the passwords you entered did not match.</p><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}


//Check if userid is already in database
$query = "SELECT userid from users where userid = '$userid'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['userid'] == $userid) {
   echo "<p>Sorry, that user name is already taken.</p><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}


// function var_dump_pre($mixed = null) {
//    echo '<pre>';
//    var_dump($mixed);
//    echo '</pre>';
//    return null;
//  }


if ($baduser != 1) {
   //Everything passed, enter userid in database
   $query = "INSERT into users VALUES ('$userid', PASSWORD('$password'), '$email')";
   $result = mysqli_query($con, $query) or die('Could not connect to database.');
   if ($result) {
      $_SESSION['valid_codex_user'] = $userid;

      // TESTING
      // echo var_dump($_SESSION);
      // echo var_dump(session_get_cookie_params());

      echo "<p>Your registration request has been approved and you are now logged in!</p>\n";
      echo "<a href=\"index.php\">Return to Home</a>\n";
      exit;
   } else {
      // echo var_dump($con);
      echo "<p>Sorry, there was a problem processing your login request</p><br>\n";
      echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
      echo "<a href=\"index.php\">Return to Home</a>\n";
   }
}
?>
</div>
