<?php

$servername = "localhost";
$DBname = "style_furniture";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass);
$sql = "CREATE DATABASE style_furniture";
mysqli_query($DBconnect, $sql);
?>