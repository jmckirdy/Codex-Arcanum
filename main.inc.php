<div class='flex-container'>
   <h2>Categories</h2>

   <p>Browse The Latest <strong>Books</strong>, 
   <strong class="strong-codice">Codices</strong>, and 
   <strong class='strong-spell'>Spells</strong><br><br>
   <div id="flex-item">

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
   echo "<div class=\"categories-main-container\">";
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
   {

      $catid = $row['catid'];
      $title = $row['title'];
      $picture = $row['picture'];

      //TODO::---- will need to change the url when getting content of category.
      // look at register/validate any file with uploading the catid num

      echo "<a class=\"container-left\" href=\"index.php?content=showcategories&id=$catid\">";
      echo "<img src=\"showimage.php?catid=$catid\" width=\"auto\" height=\"150px\" alt=\"Image\"></a>";

      echo "<a class=\"container-middle\" href=\"index.php?content=showcategories&id=$catid\">";
      echo "<div></div></a>";

      echo "<a class=\"container-right\" href=\"index.php?content=showcategories&id=$catid\">";
      echo "<div>$title</div></a>";     
      echo "<br><br>\n";
      // echo "<table><tr><td>&nbsp;</td></tr></table>";
   }


   // Here! goes overflow
   //    <div class="main-container"> // flex-direction: column;
   //    <div class="fixed-container">Fixed Container</div> // height: 100px;
   //    <div class="content-wrapper"> // min-height: 0; goes here
   //      <div class="overflow-container">
   //        <div class="overflow-content">
   //          Overflow Content
   //        </div>
   //      </div>
   //    </div>
   //  </div>


   echo "</div>\n";
}
echo "<br>";
?>



   </div>
</div>
