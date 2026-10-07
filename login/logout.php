<?php 
if(session_start() == PHP_SESSION_NONE){
    session_start();
} $_SESSION = array();
session_destroy();
header("Location: ../index.php");
exit();
?>