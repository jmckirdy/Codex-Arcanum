<div class='flex-container'>
   <h2>Codex Arcanum <i class="fa-solid fa-hat-wizard"></i></h2>

   <p>The Latest Books, Codices, and Spells<br><br>
   <div class="flex-item">
      <?php
      include("library/login.php");
      $con = login();
      
      $query = "SELECT codexid,title,poster,textfile from codices;";
      // $result = mysqli_query($con, $query) or die('Sorry, could not get recipes at this time ');
      $result = mysqli_query($con, $query) or die(mysqli_error($con));

      if (mysqli_num_rows($result) == 0)
      {
         echo "<h3>Sorry, there is no data in the database.</h3>";
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
   </div>
</div>
