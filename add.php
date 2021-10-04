<?php

$servername = "localhost";
$DBname = "styleDB";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass, $DBname);



$email2 = $_POST["email2"];
$first_name = $_POST["Fname2"];
$job = $_POST["job"];
$sql = "INSERT INTO job_tb (Email, Name, surName, jobTitle) VALUES ('$email2', '$first_name', 'osama', '$job')";
mysqli_query($DBconnect, $sql);

?>