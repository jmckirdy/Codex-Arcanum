<!-- Home Page, Categories with galaxy pics in a table -->
<!-- <table class="galaxy-table">
    <tr>
        <td class="left-column">Galaxy Pic 01</td>
        <td class="right-column">This is the content of row 1.</td>
    </tr>
    <tr>
        <td class="left-column">Row 2</td>
        <td class="right-column">This is the content of row 2.</td>
    </tr>
    <tr>
        <td class="left-column">Row 3</td>
        <td class="right-column">This is the content of row 3.</td>
    </tr>
    <tr>
        <td class="left-column">Galaxy Pic 04</td>
        <td class="right-column">This is the content of row 4.</td>
    </tr>
    <tr>
        <td class="left-column">Row 5</td>
        <td class="right-column">This is probably Linux/Bash</td>
    </tr>
    <tr>
        <td class="left-column">Row 6</td>
        <td class="right-column">This is the content of row 6.</td>
    </tr>
</table> -->

<!-- 

category upload number:
/catu/#01, catu/#07

db entry number:
/dbent/#00132
/dbent/#00012


-->


<?php
require_once('library/login.php');
$con = login();

// $catid = $_GET['id'];
// $query = "SELECT title,poster,textfile from codices where catid = $catid";

// $result = mysqli_query($con, $query) or die('Sorry, could not find codex requested');
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');
// $title = $row['title'];
// $poster = $row['poster'];
// $textfile = $row['textfile'];
// $textfile = nl2br($textfile);

// echo "<div class='flex-container'>";
    // echo "<h2>$title</h2>\n";
    // echo "by $poster <br><br>\n";
    // echo "<h3>Content</h3><br>\n";
//     echo "<div class='flex-item'>";

//         // Giant textfile from db, wrapped in codex-text class for font styling
//         echo "<div class='codex-text'>";
//         echo "$textfile<br><br>\n";
//         echo "</div>";
//     echo "</div>";
// echo "</div>";



// this file should maybe be named showcategory, or expandcategory. it is referenced elsewhere in the app too so make sure to change those spots. 
// error handling and results need the div to style it.
// upload page needs the category id number to work. catid number in db needs to be foreign key perhaps 

// include("library/login.php");
      // $con = login();
      $catid = $_GET['id'];
      $query = "SELECT codexid,catid,title,poster,textfile from codices WHERE catid = $catid;";
      // $result = mysqli_query($con, $query) or die('Sorry, could not get recipes at this time ');
      $result = mysqli_query($con, $query) or die(mysqli_error($con));

      if (mysqli_num_rows($result) == 0)
      {
         echo "<h3>Sorry, there is no data in this category.</h3>";
      } else
      {
         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
         {
            $codexid = $row['codexid'];
            $title = $row['title'];
            $poster = $row['poster'];
            $textfile = $row['textfile'];
            //  the url ending below is the link content=pageTarget.
            echo "<a class='center-title-link' href=\"index.php?content=showcodex&id=$codexid\">$title</a>&nbsp;&nbsp; uploaded by: $poster<br>\n";
            
            echo "<div class='codex-text'>";
            echo substr($textfile, 0, 100) . " ...<br>";
            echo "</div>";

            echo "<hr><br>\n";
         }
      }
?>

