<?php
include('library/login.php');
$con = login();

$id = 4; // Assuming you're fetching a specific PDF by its ID

$query = "SELECT id, file_name, file_data FROM pdf_files WHERE id = $id";
$result = mysqli_query($con, $query) or die('Sorry, could not find the requested PDF');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');

$file_name = $row['file_name'];
$file_data = $row['file_data'];

// Output the file name
echo "<h2>$file_name</h2>";

// Output an iframe to embed the PDF file
echo '<iframe src="data:application/pdf;base64,' . base64_encode($file_data) . '" width="100%" height="500px"></iframe>';
?>



<?php
// include('library/login.php');
// $con = login();

// // $id = $_GET['id'];
// $id = 1;


// $query = "SELECT id,file_name,file_data from pdf_files where id = $id order by commentid desc";

// $result = mysqli_query($con, $query) or die('Sorry, could not find codex requested');
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die('No records retrieved');

// $file_name = $row['file_name'];
// $file_data = $row['file_data'];

// $file_data = nl2br($file_data);

// echo "<div class='flex-container'>";
//     echo "<h2>$file_name</h2>\n";
//     // echo "by $poster <br><br>\n";

//     echo "<h3>Content</h3><br>\n";
//     echo "<div class='flex-item'>";
//         // $query = "SELECT date,poster,comment from comments where codexid = $id order by commentid desc";
//         // $result = mysqli_query($con, $query) or die('Could not retrieve enchantments');

//         // while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
//         // {
//         //     // $date = $row['date'];
//         //     // $poster = $row['poster'];
//         //     $comment = $row['comment'];
//         //     $comment = nl2br($comment);
//         //     echo "$date  - cast by  $poster<br>\n";
//         //     echo "$comment\n";
//         //     echo "<br><br>\n";
//         // }


//         echo "$file_data\n";
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