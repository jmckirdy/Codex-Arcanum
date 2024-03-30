<?php 
session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script src="https://kit.fontawesome.com/6aa583ebf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- <link rel="stylesheet" media="print" type="text/css" href="print.css" />  -->

    <title>Codex Arcanum</title>


</head>

<body>
    <div id="header">
        <?php       
        include("header.inc.php"); 
        ?>
    </div>

    <div id="content">
        <br><br>
        <div id="nav">
            <?php include("nav.inc.php"); ?>
        </div>

        <div id="news">
            <?php include("news.inc.php"); ?>
        </div>

        <!-- <div class='flex-container'>
            <h1>The flex-direction Property</h1>
            <p>Ye Olde Codger's Coding Tomes</p>
            <div id="flex-item-1">1 Lorem ipsum dolor sit ametis repudiandae natus consectetur, quaerat eius, saepe explicabo, cumque vel modi sapiente perspiciatis perferendis similique nobis.</div>
            <div id="flex-item-2">2  consectetur adipisicing elit. Assumenda atque vero praesentium exercitationem impedit facil</div> -->
            <!-- <div id="flex-item-3">3 consectetur adipisicing elit. Assumenda atque vero praesentium exercitationem impedit facil</div>   -->

            </div id="main">
                <?php
                // Testing for bugs TEMP
                // echo var_dump($con);

                echo "<div id='flex-item-3'>";
                if (!isset($_REQUEST['content']))
                    include("main.inc.php");
                else {
                    $content = $_REQUEST['content'];
                    $nextpage = $content . ".inc.php";
                    include($nextpage);
                }
                echo "</div>";
                ?>
            </div>

    </div>

    <div id="footer">
        <?php include("footer.inc.php"); ?>
    </div>



</body>
</html>