<h3>Tavern Gossip <i class="fa-solid fa-hat-wizard"></i></h3>
<br>Widgets, Hit-counters, Music, & whatever else<br>
<br>Inspiration: Codex's Jewel bound codex pic
<br>
<?php

// require_once('library/login.php');
// $con = login();
$con = mysqli_connect("localhost", "test", "test", "recipes") or die('Could not connect to server');


$query = "SELECT date,title,article from news order by date desc limit 0,2";
$result = mysqli_query($con, $query) or die(mysqli_error($con));


while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $date = $row['date'];
    $title = $row['title'];
    $article = $row['article'];
    echo "<br>$date - <b>$title</b><br>$article<br><br>";
}

?>