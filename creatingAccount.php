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

//header( "refresh:3;url=index.php" );
if(trim($usn) == '' || trim($psw) == '')
{
  
    echo "Error: Username or Password invalid";
    
}
else if($psw != $psw2)
{
  echo "Error: Passwords doesn't match";
}
else
{
    $psw = password_hash($psw, PASSWORD_DEFAULT);
    $query = mysqli_query($conn,"SELECT * FROM base1 WHERE username = '$usn'");

  if($query->num_rows == 0) 
  {
  $sql = "INSERT INTO base1 (username, password)
  VALUES ('$usn', '$psw')";
  
    
    if (mysqli_query($conn, $sql)) 
    {
      $code = bin2hex(random_bytes(6));
    $_SESSION['code'] = $code;
    $APP_URL = 'http://localhost/documents/verify.php';
    $activation_link = $APP_URL . "/verify.php?&activation_code=$code";
      $time_of_creation = "UPDATE `base1` SET time_of_creation= CURRENT_TIMESTAMP() WHERE username = '$usn'";
      $active = "UPDATE `base1` SET activation_code = '$code' WHERE username = '$usn'";

      //$_SESSION['time_passed'] = CURRENT_TIMESTAMP();
      



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
          
            $mail->send();
            echo "Sent yes";
            mysqli_query($conn, $time_of_creation);
      mysqli_query($conn, $active);
      echo "Account successfully created!";
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
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
      //mysqli_close($conn);
  }

  else
  {
    echo "Error: Username already exists";
  }


}
