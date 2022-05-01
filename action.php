<?php
$dbServername = "sql304.epizy.com";
$dbUsername = "epiz_30985093";
$dbPassword = "0eLRpQrCZS";
$dbName = "epiz_30985093_base1";

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


if(isset($_GET['hello']))
{
    $result = mysqli_query($conn,"SELECT username FROM base1 WHERE username = '$usn'");
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['username'];
        echo "<p> <font color = white>$name</font></p>";

    }
}


    if(isset($_GET['disable']))
    {
        mysqli_query($conn,"UPDATE base1 SET isDisabled = '1' WHERE username = '$usn'");
        echo "disabeld";
    header("refresh:0;url=admin.php");

        unset($_GET['disable']);
        
    }
    if(isset($_GET['unlock']))
    {
        mysqli_query($conn,"UPDATE base1 SET isDisabled = '0' WHERE username = '$usn'");
        echo "unlocked";
    header("refresh:0;url=admin.php");

        unset($_GET['unlock']);

    }
    if(isset($_GET['delete']))
    {
        mysqli_query($conn,"DELETE FROM base1 WHERE username = '$usn'");
    header("refresh:0;url=admin.php");

        unset($_GET['delete']);

    }
}
?>