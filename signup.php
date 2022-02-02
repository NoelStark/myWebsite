<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// var thing = 'harakiri-sushi';
// var money = getServerMaxMoney(thing) *0.5;
// nuke(thing);
// while(true)
// {

// 	if(getServerMinSecurityLevel(thing) > 5)
// 	{
// 		brutessh(thing);
// 		sqlinject(thing);
// 		weaken(thing);
// 	}
// 	else if(getServerMaxMoney < 200000)
// 	{
// 		grow(thing);
// 	}
// 	else
// 	{
// 		hack(thing);
// 	}
// }
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
$_SESSION['user'] = $usn;

//header( "refresh:3;url=index.php" );
if(trim($usn) == '' || trim($psw) == '')
{
  
    echo "Error: Username or Password invalid";
    
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
      $sql2 = "UPDATE `base1` SET time_of_creation= CURRENT_TIMESTAMP() WHERE username = '$usn'";
      mysqli_query($conn, $sql2);
      echo "Account successfully created!";
   
    $code = bin2hex(random_bytes(16));
    $_SESSION['code'] = $code;
    $APP_URL = 'http://localhost/php/sql';
    $activation_link = $APP_URL . "/verify.php?email=noelstark17@gmail.com&activation_code=$code";
/*
    $to_email = "noel.k.stark@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is the code: ".$activation_link;
    $headers = "From: stark.noel17@gmail.com";

/*
      if (mail($to_email, $subject, $body, $headers)) 
      {
      echo "Email successfully sent to $to_email...";
     
      } 

      else 
      {
      echo "Email sending failed...";
      }
    */
    echo "New account created successfully";
    echo "<br>";
    


     $mail = new PHPMailer(true);


        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
 
        $mail->SMTPAuth = true;
        $mail->Username = 'stark.noel17@gmail.com';
        $mail->Password = 'Noel123456789$';

        $mail->addAddress("noel.k.stark@gmail.com");
        
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        
        $mail->Subject = "Subject Text";
        $mail->Body = "Code:".$activation_link;
        $mail->AltBody = "This is the plain text version of the email content";
        
        try 
        {
          
            $mail->send();
            echo "Sent yes";
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
