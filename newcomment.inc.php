<?php
$id = $_GET['id'];  // OLD
// $codexid = $_GET['id'];  //might be OLD instead? interacting in other files...

if (!isset($_SESSION['valid_codex_user'])) {

    echo "<h2>Sorry, you do not have permission to cast enchantments</h2><br>\n";

    echo "<a href=\"index.php?content=login\">Please login to cast enchantments</a><br>\n";

    echo "<a href=\"index.php?content=showcodex&id=$id\">Go back to codex</a>\n";

} else {

    $userid = $_SESSION['valid_codex_user'];

    echo "<form action=\"index.php\" method=\"post\">\n";

    echo "<h2>Enter text for your enchantment</h2>";

    echo "<textarea rows=\"10\" cols=\"50\" name=\"comment\"></textarea><br>\n";

    echo "<input type=\"hidden\" name=\"poster\" value=\"$userid\"><br>\n";

    // echo "<input type=\"hidden\" name=\"id\" value=\"$id\">\n";
    echo "<input type=\"hidden\" name=\"codexid\" value=\"$id\">\n";


    echo "<input type=\"hidden\" name=\"content\" value=\"addcomment\">\n";

    echo "<br><input type=\"submit\" value=\"Submit\">\n";

    echo "</form>\n";
}
?>

