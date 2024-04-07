<div class='flex-container'>
<?php
if (isset($_SESSION['valid_codex_user']))
{
   unset($_SESSION['valid_codex_user']);
   echo "<p>You are now logged out.</p>\n";
} else
{
   echo "<p>Sorry, you are not currently logged in</p>\n";
}
?>
</div>