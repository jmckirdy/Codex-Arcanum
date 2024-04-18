<div class='flex-container'>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <!-- echo "<form action=\"index.php\" method=\"post\">\n"; -->

        <p>Upload your books, codices, and spells</p><br>

        Type:&nbsp;<select name="typeof">
            <option value="Codex" name="Codex">Codex</option>
            <option value="Spell" name="Spell">Spell</option>
            <option value="Book" name="Book">Book</option>
        </select><br><br>

        Category:&nbsp;<select name="catid">
            <option value="2" name="2">Linux</option>
            <option value="1" name="1">PHP</option>
            <option value="7" name="7">SQL</option>
            <option value="3" name="3">JavaScript</option>
            <option value="4" name="4">Python</option>
            <option value="5" name="5">C/C++</option>
            <option value="6" name="6">DSA</option>
            <option value="8" name="8">Web Design</option>
            <option value="9" name="9">Other</option>
        </select><br><br>

        Title:&nbsp;<input type="text" size="40" name="title" name="file_name"><br><br>

        Poster:&nbsp;<input type="text" size="40" name="poster"><br><br>

        <!-- 
         ////////////////////////// SPEED <GOVERNER><THROTTLER></THROTTLER> -->
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->
        <label for="fileupload">Choose a file from your computer:</label>
        <input type="file" id="fileupload" name="fileupload" accept=".pdf,.odt,.doc,.docx,.xml,.rtf" />
        <br><br>

        Or Plainext:<br>

        <textarea rows="10" cols="50" name="textfile"></textarea><br>

        <!-- <div class="button"> -->
        <input type="submit" value="Submit" class="button">
        <!-- </div> -->

        <input type="hidden" name="content" value="addcodex">
    </form>
</div>
