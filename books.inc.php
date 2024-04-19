<?php
include('library/login.php');
$con = login();

// $id = 28; // Assuming you're fetching a specific PDF by its ID
$id = 4; 

// $query = "SELECT file_data, file_name FROM pdf_files WHERE id = $id";
// $result = mysqli_query($con, $query) or die('Sorry, could not retrieve PDF');

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     $file_name = $row['file_name'];
//     $file_data = $row['file_data'];

//     // Set appropriate headers
//     header('Content-Type: application/pdf');
//     header('Content-Disposition: inline; filename="' . $file_name . '"');

//     // Output the PDF data
//     echo $file_data;
// } else {
//     die('PDF not found');
// }


// SELECTING PDF WINDOW
$query = "SELECT id, file_name, file_data FROM pdf_files WHERE id = $id";
$result = mysqli_query($con, $query) or die('Sorry, could not find the requested PDF');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');

$file_name = $row['file_name'];
$file_data = $row['file_data'];

echo "<div class='flex-container'>";

    // echo "by $poster <br><br>\n";
    echo "<div class='flex-item'>";

        // Output the file name
        echo "<h2>$file_name</h2>";

        // Output an iframe to embed the PDF file
        echo '<iframe class="flex-container" src="data:application/pdf;base64,' . base64_encode($file_data) . '"></iframe>';
    echo "</div>";
    //  CONTINUATION OF MAIN FLEX (previous <div>s with echo"" and no indentation are pretty unreadable)
?>



<?php
    /////////// NEW FLEX ITEM CSS
    echo "<div class='flex-item'>";
        echo "<h2>$file_name</h2>\n";
        // echo "by $poster <br><br>\n";

        echo "<h3>Content</h3><br>\n";
        
            // SELECTING COMMENTS
            $query = "SELECT comment from comments where codexid = $id order by commentid desc";
            $result = mysqli_query($con, $query) or die('Could not retrieve enchantments');

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                // $date = $row['date'];
                // $poster = $row['poster'];
                $comment = $row['comment'];
                $comment = nl2br($comment);
                echo "-enchantment cast!<br>\n";
                echo "$comment\n";
                echo "<br><br>\n";
            }
            echo "<br><br>\n";

        echo "</div>";
    echo "</div>";
?>

<!-- <div>
    <ul>
        <li>Nice Damn List</li>
        <li>Some buddy to tell me what I'm messin up</li>
        <li>Some Code complete sucks tho</li>
    </ul>
</div> -->