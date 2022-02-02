<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";
session_start();
$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);


//$rows = mysqli_fetchcolumn($value);




$rows=mysqli_query($conn,"SELECT username FROM base1");



    echo "<table border='1'>";
echo "<tr><th>Username</th></tr>";
while(list($username)=$rows->fetch_row()){

    

    
  echo "<tr><td>$username</td></tr>";

  if(!isset($_SESSION[$username])){
    $_SESSION[$username] = 3;
    }


}
echo "</table>";
echo "<br>";