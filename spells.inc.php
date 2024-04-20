<?php
include('library/login.php');
$con = login();

// $id = 28; // Assuming you're fetching a specific PDF by its ID
// $id = 20; 
// kept interesting ids! !didn't like .epubs, it downloaded and would not open.
// $id = 20; 


echo "<div class='flex-container'>";
    echo "<div class='flex-item'>";
    echo "The Newest <strong style='background-color:red'>Spells</strong>...<br><br>\n";

    // $query = "SELECT codexid,title,poster,textfile,typeof FROM codices WHERE typeof = 'Book'";
    $query = "SELECT * FROM codices WHERE typeof = 'Spell' ORDER BY `codices`.`typeof` ASC;";  //ASC is not working for some reason

    // $query2 = "SELECT file_name, upload_date FROM pdf_files";

    $result = mysqli_query($con, $query) or die('Sorry, could not retrieve any codices');
    // $result2 = mysqli_query($con, $query2) or die('Sorry, could not retrieve any books');


    if (mysqli_num_rows($result) == 0)
    {
        echo "<h3>No books found</h3>";
    } else {
         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            // $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $poster = $row['poster'];
            $textfile = $row['textfile'];
            $codexid = $row['codexid'];
            $typeof = $row['typeof'];

            echo "<a class='center-title-link' href=\"index.php?content=showcodexspell&id=$codexid\">$title</a>&nbsp;&nbsp; uploaded by: $poster &nbsp;|&nbsp; $typeof<br>\n";
            // THIS file goes to showcodex file that echoes simple text, NOT complicated pdf like booksshow 
            echo "<div class='codex-text'>";
            echo substr($textfile, 0, 100) . " ...<br>";
            echo "</div>";

            echo "<hr><br>\n";
            // echo "<br>Uploaded by $poster on $upload_date<br><br>\n";
        }
    }

    echo "</div>"; //still open div for css container additional content

?>