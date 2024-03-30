<?php
function login()
{
   $con = mysqli_connect("localhost", "root", "guitar_man", "codex_arcanum") or die('Could not connect to server');
   return $con;
}
?>