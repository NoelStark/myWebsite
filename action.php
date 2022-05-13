<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);
?>

<?php

            
            
$usn = $_POST['usn'];
if($usn == NULL)
{
    header("refresh:0;url=admin.php");

}
else
{


if(isset($_GET['hello']))//Kontrollerar om konto finns
{
    $result = mysqli_query($conn,"SELECT username FROM base1 WHERE username = '$usn'");
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['username'];
        echo "<p> <font color = white>$name</font></p>";

    }
}


    if(isset($_GET['disable']))//Om admin klickar på Disable låses kontot
    {
        mysqli_query($conn,"UPDATE base1 SET isDisabled = '1' WHERE username = '$usn'");
        echo "disabeld";
    header("refresh:0;url=admin.php");

        
    }
    if(isset($_GET['unlock']))//Om admin klickar på unlock låses kontot upp
    {
        mysqli_query($conn,"UPDATE base1 SET isDisabled = '0' WHERE username = '$usn'");
        echo "unlocked";
    header("refresh:0;url=admin.php");


    }
    if(isset($_GET['delete']))//Om admin klickar på Delete raderas kontot
    {
        mysqli_query($conn,"DELETE FROM base1 WHERE username = '$usn'");
    header("refresh:0;url=admin.php");


    }
}
?>