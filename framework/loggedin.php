<?php 
session_start();
if(empty($_SESSION["Email"])){
    header("Location: login.php");
}
?>