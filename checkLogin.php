<?php
//Loggar in i databasen
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

$usn = $_POST['usn'];//Plockar användarnamnet som skrevs in i login rutan
$usn = $_POST['usn'];//Plockar lösenordet som skrevs in i login rutan
$password = mysqli_query($conn, "SELECT password FROM base1 WHERE username = '$usn'");//Plockar lösenordet från databasen


$row= mysqli_fetch_array($password);
$password1 = "";


if(isset($row))
{
    $password1 = $row[0]; //Får värdet baserat på lösenord plockat på rad 16

$password2 = mysqli_fetch_row($password);

$logins = mysqli_query($conn,"SELECT username FROM base1 WHERE username = '$usn'");

$count = mysqli_num_rows($logins);

$result = mysqli_query($conn,"SELECT activation_code FROM base1 WHERE username = '$usn'");

$disable = mysqli_query($conn, "SELECT isDisabled FROM base1 WHERE username = '$usn'");
session_start();



if($usn == "admin" && $psw == "admin") //Om admin loggar in
{
    header("refresh:0;url=admin.php");//Omdirekteras till admin sidan
}
else
{


if(password_verify($psw, $password1) && $count == 1)//Om det inskrivna lösenordet stämmer med det i databasen
{
    
    if(mysqli_fetch_row($disable)[0] == '1')//Om kontot är låst
    {
        echo "Error: Account locked, please contact support: <a href=\"www.website.com\" target=\"_blank\" >wwww.support.com</a> ";
    header("refresh:3;url=index.php");//Skickas till huvudsidan

    }
    else
    {
        if(mysqli_fetch_row($result)[0] == 'activated')//Om kontot är aktiverat
        {
            echo "Login successful";
            $_SESSION['loggedin'] = 1; //Skapas en session som används för att kolla om man är inloggad
            $_SESSION[$usn] = 3;
            $sql = "UPDATE `base1` SET last_login= CURRENT_TIMESTAMP() WHERE username = '$usn'";//Uppdaterar senast inloggad
            mysqli_query($conn, $sql);
            header("refresh:3;url=index.php");//Skickas tillbaka till huvudsidan
        }
        else
        {
            echo "Not confirmed";
        }
        

    }
    

}
else
{
    
    echo "Error: Username or password is incorrect";
    if($count == 1) //Om kontot finns
    {
        if($_SESSION[$usn] == NULL){
        $_SESSION[$usn] = 3;

        }
        else
        {

            
            $_SESSION[$usn]--;
            echo "<br>"."You have: ".$_SESSION[$usn]." tries left";
            if($_SESSION[$usn] == 0)
            {   
            $disable = "UPDATE base1 SET isDisabled = '1' WHERE username = '$usn'";//Vid felaktiga försök låses kontot
            mysqli_query($conn, $disable);
            echo "<br>"."Error: Account locked, please contact support: <a href=\"www.website.com\" target=\"_blank\" >www.support.com</a> ";
            }
        
    }
    }
    header("refresh:2;url=login.php");
   
}
  
}