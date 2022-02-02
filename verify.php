<?php
session_start();
echo "Verified";

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";
$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

$code = $_SESSION['code'];
$usn = $_SESSION['user'];
$expire = 60;
$insert = "UPDATE base1 SET activation_code = '$code' WHERE username = '$usn'";
//$sql = "SELECT id FROM base1 WHERE username = $usn"

if(mysqli_query($conn, $insert))
{
    echo "worked";
}
else
{
    echo "not worked";
}

