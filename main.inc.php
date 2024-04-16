<div class='flex-container'>
   <h2>Codex Arcanum <i class="fa-solid fa-hat-wizard"></i></h2>

   <p>The Latest Books, Codices, and Spells<br><br>
   <div class="flex-item">

<?php
include("library/login.php");
$con = login();
// $query = "SELECT catid,title,picture from categories order by catid desc limit 0,4";
$query = "SELECT catid,title,picture from categories ORDER BY `categories`.`catid` ASC;";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) == 0)
{
   echo "<h3>Sorry, there are no categories available at this time, please try back later.</h3>";
} 
else
{
   echo "<table>";
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
   {

      $catid = $row['catid'];
      $title = $row['title'];
      $picture = $row['picture'];
      // echo "<div class='test'>";
      echo "<tr><td>$catid</td>";
      echo "<td><img src=\"showimage.php?catid=$catid\" width=\"150px\"></td>";

      //TODO::---- will need to change the url when getting content of category.
      // look at register/validate any file with uploading the catid num
      // 

      echo "<td><a href=\"index.php?content=showcategories&id=$catid\">$title</a></td></tr>";
      // echo "<tr><td>$catid</td><td>$title</td>\n";
      // divs above need to style and load correctly!

     
   }
   echo "</table>\n";
}
?>



   </div>
</div>
