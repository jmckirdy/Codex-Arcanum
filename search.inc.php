<?php
    include('library/login.php');
    $con = login();

    $search = $_GET['searchFor'];

    $words = explode(" ", $search);

    $phrase = implode("%' AND title LIKE '%", $words);

    $query = "SELECT codexid,title,poster,textfile from codices where title like '%$phrase%'";

    $result = mysqli_query($con, $query) or die('Could not query database at this time');

    echo "<h1>Search Results</h1><br><br>\n";


    if (mysqli_num_rows($result) == 0) {

        echo "<h2>Sorry, no codices were found with '$search' in title.</h2>";

    } else {

        // second parameter for function mysqli below WAS: MYSQL_ASSOC
        while($row=mysqli_fetch_array($result)) {

            $codexid = $row['codexid'];

            $title = $row['title'];

            $poster = $row['poster'];

            $textfile = $row['textfile'];

            echo "<a href=\"index.php?content=showcodex&id=$codexid\">$title</a><br>\n";

            echo "$textfile<br><br>\n";
        }
    }
?>