<?php

$servername = "localhost";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass);
$sql = "CREATE DATABASE style";
mysqli_query($DBconnect, $sql);


?>