<?php
$dbServername = "sql304.epizy.com";
$dbUsername = "epiz_30985093";
$dbPassword = "0eLRpQrCZS";
$dbName = "epiz_30985093_base1";

$conn = mysqli_connect($dbServername, 
$dbUsername, $dbPassword, $dbName);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
<nav class="nav-area">
            <!---->
            
            <input type="checkbox" id="check">
        
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>

            <div class="navbar">
                <a href="index.php"><img src="bilder/nedladdning.png"></a>
            </div>
            
            
            <ul id = "menu">
            
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Cases</a></li>
                <li><a href="#games">Updates</a></li>
                <li><a href="logout.php"  id="login">Log out</a></li>
                </div>
            </div>
                
            </ul>
        </div>
</nav>



<div class="container"> 
    <div class = "box">
    <form method="post" action="">
    <input type="text" id="usn" name="usn"/>
    <button type="submit" name="search">Search</button>
    <br>
    <button type="submit" formaction="action.php?unlock=true">Unlock</button>
    <button type="submit" formaction="action.php?disable=true">Disable</button>
    <button type="submit" formaction="action.php?delete=true">Delete</button>
    
    </form>
 
        <?php
        $usn = $_POST['usn'];
        $result = mysqli_query($conn,"SELECT username FROM base1 WHERE username = '$usn'");
        $count = mysqli_num_rows($result);
    
        if($count > 0)
        {
            
            $result = mysqli_query($conn, "SELECT username FROM base1 WHERE username = '$usn'");
            $row = mysqli_fetch_assoc($result);
            $name = $row['username'];    
            echo "<p> <font color = white>$name</font></p>";
        }
        else
        {
            echo "<p> <font color = white>User does not exist</font></p>";

        }
      
        
    ?>
    
    
    </div>
    
</div>
   
</body>
</html>