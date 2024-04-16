<div class='flex-container'>
    <form action="index.php" method="post">
        <!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->

        <p>Upload your books, codices, and spells</p><br>

        Type:&nbsp;<select name="typeof">
            <option value="Book" name="Book">Book</option>
            <option value="Codex" name="Codex">Codex</option>
            <option value="Spell" name="Spell">Spell</option>
        </select><br><br>

        Category:&nbsp;<select name="dropdown">
            <option value="PHP" name="catid">PHP</option>
            <option value="SQL" name="SQL">SQL</option>
            <option value="JavaScript" name="catid">JavaScript</option>
            <option value="SQL" name="catid">Python</option>
            <option value="SQL" name="catid">Linux</option>
            <option value="SQL" name="catid">DSA</option>
            <option value="SQL" name="catid">Web Design</option>
            <option value="SQL" name="catid">C/C++</option>
        </select><br><br>

        Title:&nbsp;<input type="text" size="40" name="title"><br><br>

        Poster:&nbsp;<input type="text" size="40" name="poster"><br><br>

        <label for="fileupload">Choose a file from your computer:</label>
        <input type="file" id="fileupload" name="fileupload" accept=".pdf,.odt,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
        <br><br>

        Or Plainext:<br>

        <textarea rows="10" cols="50" name="textfile"></textarea><br>

        <!-- <div class="button"> -->
        <input type="submit" value="Submit" class="button">
        <!-- </div> -->

        <input type="hidden" name="content" value="addcodex">
    </form>
</div>
