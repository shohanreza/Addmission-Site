<?php
session_start();
$_SESSION["name"] = '';
$_SESSION["login"] = false;
header("Location:login.php");
?>