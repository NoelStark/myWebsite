<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once "vendor/autoload.php";
?>


<?php 

session_start();  
  
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);

$usn = $_POST['usn'];
$psw = $_POST['psw'];
$psw2 = $_POST['psw2'];
$email = $_POST['email'];
$_SESSION['user'] = $usn;

if(trim($usn) == '' || trim($psw) == '')//Om fält är tomma
{
  
  echo "Error: Username or Password invalid";
    
}
else if($psw != $psw2)//Om lösenord inte stämmer överens
{
  echo "Error: Passwords doesn't match";
  header("refresh:3 ;url=signup.php");

}
else
{
    $psw = password_hash($psw, PASSWORD_DEFAULT);//Hash för att sedan skicka in i databasen
    $query = mysqli_query($conn,"SELECT * FROM base1 WHERE username = '$usn'");

  if($query->num_rows == 0) //OM användare inte redan finns
  {
    $sql = "INSERT INTO base1 (username, password)
    VALUES ('$usn', '$psw')";//Skapa konto
  
      $code = bin2hex(random_bytes(6));
    $_SESSION['code'] = $code;
    $APP_URL = 'http://localhost/cs';
    $activation_link = $APP_URL . "/activate.php?&activation_code=$code";//Skapar en länk för att aktivera konto
      $time_of_creation = "UPDATE `base1` SET time_of_creation= CURRENT_TIMESTAMP() WHERE username = '$usn'";//Skickar in när kontot skapades
      $active = "UPDATE `base1` SET activation_code = '$code' WHERE username = '$usn'";
      $mail = "UPDATE base1 SET email = '$email' WHERE username = '$usn'";
      



     $mail = new PHPMailer(true);


        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
 
        $mail->SMTPAuth = true;
        $mail->Username = 'stark.noel17@gmail.com';
        $mail->Password = 'Noel123456789$';

        $mail->addAddress("$email");
        
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        
        $mail->Subject = "Subject Text";
        $mail->Body = "Code:".$activation_link;
        $mail->AltBody = "This is the plain text version of the email content";
        
        try 
        {
          
        $mail->send();//Skickar ett mejl och sedan körs alla kommandon för att skicka in värden i databas
        mysqli_query($conn, $sql);
        mysqli_query($conn, $time_of_creation);
        mysqli_query($conn, $active);
        mysqli_query($conn, $mail);
        echo "Email sent, please proceed with instructions in mail to verify account!";
        header("refresh:3;url=index.php" );
        } 
        catch(Exception $e)
        {
            echo "Wrong".$e;
        }
        
    $_SESSION[$usn] = 3;
      }

  else
  {
    echo "Error: Username already exists";
  }


}
