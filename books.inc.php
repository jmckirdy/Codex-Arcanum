<?php
include('library/login.php');
$con = login();

// $id = 28; // Assuming you're fetching a specific PDF by its ID
// $id = 20; 
// kept interesting ids! !didn't like .epubs, it downloaded and would not open.
// $id = 20; 


echo "<div class='flex-container'>";
    echo "<div class='flex-item'>";
    echo "Newest...<br><br>\n";

    // $query = "SELECT codexid,title,poster,textfile,typeof FROM codices WHERE typeof = 'Book'";
    $query = "SELECT * FROM codices WHERE typeof = 'Book' ORDER BY `codices`.`typeof` ASC;";  //ASC is not working for some reason

    // $query2 = "SELECT file_name, upload_date FROM pdf_files";

    $result = mysqli_query($con, $query) or die('Sorry, could not retrieve any books');
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

            echo "<a class='center-title-link' href=\"index.php?content=booksshow&id=$codexid\">$title</a>&nbsp;&nbsp; uploaded by: $poster &nbsp;|&nbsp; $typeof<br>\n";
            
            echo "<div class='codex-text'>";
            echo substr($textfile, 0, 100) . " ...<br>";
            echo "</div>";

            echo "<hr><br>\n";
            // echo "<br>Uploaded by $poster on $upload_date<br><br>\n";
        }
    }

    echo "</div>";


// SELECTING PDF WINDOW
// $query = "SELECT id, file_name, file_data FROM pdf_files WHERE id = $id";
// $result = mysqli_query($con, $query) or die('Sorry, could not find the requested PDF');
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');

// $file_name = $row['file_name'];
// $file_data = $row['file_data'];

// echo "<div class='flex-container'>";

//     // echo "by $poster <br><br>\n";
//     echo "<div class='flex-item'>";

//         // Output the file name
//         echo "<h2>$file_name</h2>";

//         // Output an iframe to embed the PDF file
//         echo '<iframe class="flex-container" src="data:application/pdf;base64,' . base64_encode($file_data) . '"></iframe>';
//     echo "</div>";
//     // CONTINUATION OF MAIN FLEX (previous <div>s with echo"" and no indentation are pretty unreadable)

?>



<?php
    // /////////// NEW FLEX ITEM CSS
    // echo "<div class='flex-item'>";
    //     echo "<h2>$title</h2>\n";
    //     // echo "by $poster <br><br>\n";

    //     echo "<h3>Content</h3><br>\n";
        
    //         // SELECTING COMMENTS
    //         $query = "SELECT comment from comments where codexid = $id order by commentid desc";
    //         $result = mysqli_query($con, $query) or die('Could not retrieve enchantments');

    //         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    //         {
    //             // $date = $row['date'];
    //             // $poster = $row['poster'];
    //             $comment = $row['comment'];
    //             $comment = nl2br($comment);
    //             echo "-enchantment cast!<br>\n";
    //             echo "$comment\n";
    //             echo "<br><br>\n";
    //         }
    //         echo "<br><br>\n";

    //     echo "</div>";
    // echo "</div>";
?>

<!-- <div>
    <ul>
        <li>Nice Damn List</li>
        <li>Some buddy to tell me what I'm messin up</li>
        <li>Some Code complete sucks tho</li>
    </ul>
</div> -->