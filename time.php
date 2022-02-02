<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";
session_start();
$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

$countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
$now = new Date().getTime();
$minutes_to_add = 1;

$date = strtotime($now);

$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
$stamp = $time->format('Y-m-d H:i');



$date = date('i');  
$time = strtotime($date + 1);

$sql = "UPDATE base1 SET activation_expiry = xxx.cedenporr.com";

