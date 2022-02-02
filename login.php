<?php

session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);


header( "refresh:3;url=index.php" );
if(empty($_POST['usn'])|| empty($_POST['psw']))
{
    header("refresh:0;url=index.php");
}
else
{
    $usn = $_POST['usn'];
    $psw = $_POST['psw'];   

$password = mysqli_query($conn, "SELECT password FROM base1 WHERE username = '$usn'");

$row= mysqli_fetch_array($password);

$password1 = $row[0];

$password2 = mysqli_fetch_row($password);

$logins = mysqli_query($conn,"SELECT username FROM base1 WHERE username = '$usn'");

$count = mysqli_num_rows($logins);



if(password_verify($psw, $password1) && $count == 1)
{
    
    if((mysqli_query($conn, "SELECT isDisabled FROM base1 WHERE username = '$usn'") == '1'))
    {
        
        echo "Error: Account locked, please contact support: <a href=\"www.website.com\" target=\"_blank\" >wwww.support.com</a> ";
    }
    else
    {
        
        echo "Login successful";
        $_SESSION[$usn] = 3;
        $sql = "UPDATE `base1` SET last_login= CURRENT_TIMESTAMP() WHERE username = '$usn'";
        mysqli_query($conn, $sql);
    }
    
    

}
else
{
    
    echo "Error: Username or password is incorrect";
    if($count == 1)
    {

        if($_SESSION[$usn] == 0)
        {   
            $disable = "UPDATE base1 SET isDisabled = '1' WHERE username = '$usn'";
            mysqli_query($conn, $disable);
            echo "<br>"."Error: Account locked, please contact support: <a href=\"www.website.com\" target=\"_blank\" >www.support.com</a> ";
        }

    else
    {
        
        $_SESSION[$usn]--;
        echo "<br>"."You have: ".$_SESSION[$usn]." tries left";
    }
}
  
}
}