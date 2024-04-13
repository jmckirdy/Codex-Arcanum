<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Image Test</title>
<body>
<?php
include("library/login.php");
$con = login();
$query = "SELECT catid, title, picture FROM categories";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

echo "<table width=\"50%\" cellpadding=\"1\" border=\"1\">\n";
echo "<tr><td>Category ID</td><td>Title</td><td>Image</td></tr>\n";
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
   $catid = $row['catid'];
   $title = $row['title'];

   echo "<tr><td>$catid</td><td>$title</td>\n";
   echo "<td><img src=\"showimage.php?catid=$catid\" width=\"200\" height=\"200\"></td></tr>\n";
}
echo "</table>\n";
?>
</body>
</html>