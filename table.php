<?php

$servername = "localhost";
$DBname = "style_furniture_DB";
$username = "root";
$pass = "";
$DBconnect = new mysqli($servername, $username, $pass, $DBname);


$email1 = $_POST["email1"];
$first_name = $_POST["Fname1"];
$sur_name = $_POST["Lname"];
$phone = $_POST["phone"];
$nation = $_POST["nation"];
$message = $_POST["message"];
$sql = "INSERT INTO contact_table(Email, firstName, surName, Phone, Nation, Message) VALUES("$email1", "$first_name", "$sur_name", "$phone", "$nation", "$message")";
mysqli_query($DBconnect, $sql);

?>