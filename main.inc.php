


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
   // echo "<div class=\"categories-main-container\">";
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
   {

      $catid = $row['catid'];
      $title = $row['title'];
      $picture = $row['picture'];

      //TODO::---- will need to change the url when getting content of category.
      // look at register/validate any file with uploading the catid num

      // echo "<div>";
      // echo "<div class=\"container-row\">";
      echo "<div class=\"categories-main-container\">";


         echo "<a class=\"container-left container-row\" href=\"index.php?content=showcategories&id=$catid\">";
         echo "<img src=\"showimage.php?catid=$catid\" width=\"auto\" height=\"150px\" alt=\"Image\"></a>";

         echo "<a class=\"container-middle container-row\" href=\"index.php?content=showcategories&id=$catid\">";
         echo "<div class=\"container-row\" ></div></a>";

         echo "<a class=\"container-right container-row\" href=\"index.php?content=showcategories&id=$catid\">";
         echo "<div>$title</div></a>"; 
         // echo "<br><br><br>\n"; 

      echo "</div>";
      // echo "</div>";
   }
   echo "</div>\n";

}
echo "<br>";
?>
<!-- <script>
    // Get references to all three containers
    var containerLeft = document.querySelector('.container-left');
    var containerMiddle = document.querySelector('.container-middle');
    var containerRight = document.querySelector('.container-right');

    // Add event listeners to each container
    containerLeft.addEventListener('mouseenter', changeColor);
    containerLeft.addEventListener('mouseleave', revertColor);

    containerMiddle.addEventListener('mouseenter', changeColor);
    containerMiddle.addEventListener('mouseleave', revertColor);

    containerRight.addEventListener('mouseenter', changeColor);
    containerRight.addEventListener('mouseleave', revertColor);

    // Function to change color of all three containers
    function changeColor() {
        containerLeft.style.backgroundColor = 'red';
        containerMiddle.style.backgroundColor = 'red';
        containerRight.style.backgroundColor = 'red';
    }

    // Function to revert color of all three containers
    function revertColor() {
        containerLeft.style.backgroundColor = '';
        containerMiddle.style.backgroundColor = '';
        containerRight.style.backgroundColor = '';
    }
</script> -->




   </div>
</div>
