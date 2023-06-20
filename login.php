<?php
if ($_POST["username"] == "php" && $_POST["pwd"] == "php") 
{

 session_start(); 
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged in</h1>";
}
else 
{

 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
}
?>
