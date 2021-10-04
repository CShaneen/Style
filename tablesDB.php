<?php

$servername = "localhost";
$DBname = "style";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass, $DBname);


$sql = "CREATE TABLE contact_table (Email VARCHAR(64) NOT NULL, Name VARCHAR(64), surName VARCHAR(64), Phone VARCHAR(15), Nation VARCHAR(64), Message VARCHAR(256), PRIMARY KEY(Email))";
mysqli_query($DBconnect, $sql);

$sql = "CREATE TABLE job_table (Email VARCHAR(64) NOT NULL, Name VARCHAR(64), Job VARCHAR(64), PRIMARY KEY(Email))";
mysqli_query($DBconnect, $sql);


?>
