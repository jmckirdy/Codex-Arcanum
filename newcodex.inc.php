<div class='flex-container'>
    <form action="index.php" method="post">
        <!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->

        <p>Upload your books, codices, and spells</p><br>

        Title:&nbsp;&nbsp;<input type="text" size="40" name="title"><br>

        Poster:<input type="text" size="40" name="poster"><br>

        <p>Textfile</p>

        <textarea rows="10" cols="50" name="textfile"></textarea><br>

        <!-- <div class="button"> -->
        <input type="submit" value="Submit" class="button">
        <!-- </div> -->

        <input type="hidden" name="content" value="addcodex">
    </form>
</div>
