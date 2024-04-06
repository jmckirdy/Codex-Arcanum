<form action="index.php" method="post">
<!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->

<h2>Upload your books, codices, and spells</h2><br>

Title:<input type="text" size="40" name="title"><br>

Poster:<input type="text" size="40" name="poster"><br>

<!-- Short Description:<br>
<textarea rows="5" cols="50" name="shortdesc"></textarea><br> -->

<h3>Textfile</h3>

<textarea rows="10" cols="50" name="textfile"></textarea><br>

<!-- <h3>Directions</h3>
<textarea rows="10" cols="50" name="directions"></textarea><br> -->

<input type="submit" value="Submit">

<input type="hidden" name="content" value="addcodex">

</form>

