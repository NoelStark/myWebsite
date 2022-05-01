<?php
$dbServername = "sql304.epizy.com";
$dbUsername = "epiz_30985093";
$dbPassword = "0eLRpQrCZS";
$dbName = "epiz_30985093_base1";
$active = $_GET['activation_code'];
$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

mysqli_query($conn, "UPDATE `base1` SET activation_code = 'activated' WHERE activation_code = '$active'");