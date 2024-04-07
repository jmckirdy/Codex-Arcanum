<div class='flex-container'>
    <form action="index.php" method="post">
        <!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->

        <p>Upload your books, codices, and spells</p><br>

        Type:&nbsp;<select name="dropdown">
            <option value="Book" name="">Book</option>
            <option value="Codex" name="">Codex</option>
            <option value="Spell" name="">Spell</option>
        </select><br><br>

        Category:&nbsp;<select name="dropdown">
            <option value="PHP" name="catid">PHP</option>
            <option value="SQL" name="catid">SQL</option>
            <option value="JavaScript" name="catid">JavaScript</option>
            <option value="SQL" name="catid">Python</option>
            <option value="SQL" name="catid">Linux</option>
            <option value="SQL" name="catid">DSA</option>
            <option value="SQL" name="catid">Web Design</option>
            <option value="SQL" name="catid">C/C++</option>
        </select><br><br>

        Title:&nbsp;<input type="text" size="40" name="title"><br><br>

        Poster:&nbsp;<input type="text" size="40" name="poster"><br><br>

        Textfile:<br>

        <textarea rows="10" cols="50" name="textfile"></textarea><br>

        <!-- <div class="button"> -->
        <input type="submit" value="Submit" class="button">
        <!-- </div> -->

        <input type="hidden" name="content" value="addcodex">
    </form>
</div>
