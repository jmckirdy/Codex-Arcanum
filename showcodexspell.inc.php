<?php
include('library/login.php');
$con = login();

$id = $_GET['id'];
$query = "SELECT title,poster,textfile from codices where codexid = $id";

$result = mysqli_query($con, $query) or die('Sorry, could not find codex requested');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');
$title = $row['title'];
$poster = $row['poster'];
$textfile = $row['textfile'];
$textfile = nl2br($textfile);

echo "<div class='flex-container'>";

echo "<h2>$title</h2>\n";
echo "by $poster <br><br>\n";
echo "<h3>Content</h3><br>\n";
echo "<div class='flex-item'>";

// Giant textfile from db, wrapped in codex-text class for font styling
echo "<div class='codex-text'>";
echo "$textfile<br><br>\n";
echo "</div>";

$query = "SELECT count(commentid) from comments where codexid = $id";
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
if ($row[0] == 0)
{
   echo "No enchantments posted yet.&nbsp;&nbsp;\n";
   echo "<a class=\"center-link\" href=\"index.php?content=newcomment&id=$id\">Add an enchantment</a>\n";
   echo "&nbsp;&nbsp;&nbsp;<a class=\"center-link\" href=\"print.php?id=$id\" target=\"_blank\">Print textfile</a>\n";
   echo "<hr>\n";
} else
{
   echo $row[0] . "\n";
   echo "&nbsp;enchantments posted.&nbsp;&nbsp;\n";
   echo "<a class=\"center-link\" href=\"index.php?content=newcomment&id=$id\">Add an enchantment</a>\n";
   echo "&nbsp;&nbsp;&nbsp;<a class=\"center-link\" href=\"print.php?id=$id\" target=\"_blank\">Print textfile</a>\n";
   echo "<hr>\n";
   echo "<h2>Enchantments</h2>\n";

   $query = "SELECT date,poster,comment from comments where codexid = $id order by commentid desc";

   $result = mysqli_query($con, $query) or die('Could not retrieve enchantments');
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
   {
       $date = $row['date'];
       $poster = $row['poster'];
       $comment = $row['comment'];
       $comment = nl2br($comment);

       echo "$date  - cast by  $poster<br>\n";
       echo "$comment\n";
       echo "<br><br>\n";
   }
}


echo "</div>";
echo "</div>";
?>