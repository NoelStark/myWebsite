<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";
$active = $_GET['activation_code'];
$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

//Om länk klickas på så uppdateras databasen och kontot aktiveras
mysqli_query($conn, "UPDATE `base1` SET activation_code = 'activated' WHERE activation_code = '$active'");