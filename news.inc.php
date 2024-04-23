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
    array('name' => 'Game of Thrones', 'link' => 'https://www.imdb.com/title/tt0944947/'),

    array('name' => 'Breaking Bad', 'link' => 'https://www.imdb.com/title/tt0903747/'),
    array('name' => 'The Office (US)', 'link' => 'https://www.imdb.com/title/tt0386676/'),
    array('name' => 'Stranger Things', 'link' => 'https://www.imdb.com/title/tt4574334/'),
    array('name' => 'Friends', 'link' => 'https://www.imdb.com/title/tt0108778/'),
    array('name' => 'Sherlock', 'link' => 'https://www.imdb.com/title/tt1475582/'),
    array('name' => 'The Mandalorian', 'link' => 'https://www.imdb.com/title/tt8111088/'),
    array('name' => 'The Crown', 'link' => 'https://www.imdb.com/title/tt4786824/'),
    array('name' => 'Stranger Things', 'link' => 'https://www.imdb.com/title/tt4574334/'),
    array('name' => 'Peaky Blinders', 'link' => 'https://www.imdb.com/title/tt2442560/'),
    array('name' => 'Narcos', 'link' => 'https://www.imdb.com/title/tt2707408/')
);

// Get a random index to display one show
$randomIndex = array_rand($shows);

// Display the randomly selected show
echo $shows[$randomIndex]['name'] . "&nbsp; &#8212;> &nbsp;<a target=\"_blank\" href='" . $shows[$randomIndex]['link'] . "'>imdb page</a>";
?>
<br>
<br>
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

<?php
// code to loop over array below and echo out one line at random or in order.

?>
<h3>Tavern Gossip 🍺</h3>
<p>"Have you heard? That lusty Argonian maid from Riften hooked up with the DragonBorn.<br><br> I can scarecly believe that she's his type."</p>
<p>"Did you hear? They say the Dragonborn saved Whiterun from a dragon attack."</p> 
<p>"Word is the Dragonborn took down Alduin, the World-Eater himself."</p>
<p>"They say the Dragonborn joined the Thieves Guild. Can you imagine?"</p>
<p>"You hear about the Dragonborn? They say he's a master of the bow."</p>
<p>"They say the Dragonborn has a house in every hold. Must be nice."</p>
<p>"The Dragonborn was seen pickpocketing in Riften market. Can you believe it?"</p>
<p>"You hear about the Dragonborn? They say he's the Thane of every hold."</p>
<p>"They say the Dragonborn can kill a dragon with a single shout."</p>
<p>"You hear? The Dragonborn became Arch-Mage of the College of Winterhold."</p>
<p>"They say the Dragonborn can summon a storm with a word."</p>
<hr>
<br>