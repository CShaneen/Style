<?php

$servername = "localhost";
$DBname = "style_furniture_DB";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass, $DBname);


$sql = "CREATE TABLE contactTB(Email VARCHAR(64) NOT NULL, firstName VARCHAR(64), surName VARCHAR(64), Phone VARCHAR(15), Nation VARCHAR(64),Message VARCHAR(256), PRIMARY KEY(Email)";
mysqli_query($DBconnect, $sql);


?>