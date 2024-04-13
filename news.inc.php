<style>
    #hits {
        color: red;
        background-color: black;
    }
</style>
<script src="library/startMusic.js"></script>
<audio id="startMusic" src="assets/Hero_Quest_Piano.mp3"></audio> 


<h3>Hit-counter</h3>
<br>This site has <span id="hits">12354</span> Hits!
<br><br><hr>


<!-- ⬇️  ⬇️ -->
<h3>Music Sample 🎵</h3>
<!-- <br> -->
<p style="font:normal 32px Times, serif; text-align:center;" onclick=playMusic() >▶️</p>
<hr>


What is a Codex? This is:
<img alt="codex" src="assets/Codex_Aureus_Sankt_Emmeram.jpg" width="250px">
<p>This is the Codex Aureus Sankt Emmeram, a 9th-century illuminated Gospel Book which takes its name from Saint Emmeram's Abbey, where it was for most of its history. <br><br>
It is lavishly illuminated(text decorated with flourishes), and it's cover is encrusted with gems and relief figures in gold. <br><br>
Precisely dated to 870, it is an important example of Carolingian art, as well as one of very few surviving treasure bindings of this date.</p>
<hr>


<h3>Weekly Show 📺</h3>
<br>
<?php
// Multi-dimensional array with show names and corresponding IMDB links
$shows = array(
    array('name' => 'Mythic Quest', 'link' => 'https://www.imdb.com/title/tt8879940/'),
    array('name' => 'Mr. Robot', 'link' => 'https://www.imdb.com/title/tt4158110/'),
    array('name' => 'Rome', 'link' => 'https://www.imdb.com/title/tt0384766/'),
    array('name' => 'Wheel of Time', 'link' => 'https://www.imdb.com/title/tt7462410/'),
    array('name' => 'Game of Thrones', 'link' => 'https://www.imdb.com/title/tt0944947/')
);

// Get a random index to display one show
$randomIndex = array_rand($shows);

// Display the randomly selected show
echo $shows[$randomIndex]['name'] . " => <a target=\"_blank\" href='" . $shows[$randomIndex]['link'] . "'>imdb page</a>";
?>
<br>
<br>
<!-- <a href="https://www.imdb.com/title/tt8879940/" target="_blank">imdb link</a> -->
<hr>


<h3>Weekly GIF 😂</h3>
<br>


<!-- <img src="assets/404Homer.gif" alt="someGIF" width="190px"> OLD-->
<?php
// Array of GIF URLs
$gifs = array(
    'assets/1.gif',
    'assets/2.gif',
    'assets/3.gif',
    'assets/4.gif'
);

// Get a random index to display one GIF
$randomIndex = array_rand($gifs);

// Display the randomly selected GIF
echo "<img src='" . $gifs[$randomIndex] . "' alt='Random GIF' width='260px'>";
?>
<hr>


<h3>Tavern Gossip 🍺</h3>
<p>Have you heard? That lusty Argonian maid from Riften hooked up with the DragonBorn.<br><br> I can scarecly believe that she's his type!</p>
<hr>
<br>