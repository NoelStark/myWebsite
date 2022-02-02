<?php include ("databaseConnect.php")


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class = "grid">
<ul>    
        
        <form method="post" onsubmit = "return func2()">

    <li>
        <div class = "gridOne">



<!-- <script language="JavaScript">
const t = new Date();
let time = t.getHours();
time = time+ 1;
TargetDate = time.toString();
console.log(TargetDate);
BackColor = "palegreen";
ForeColor = "navy";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
FinishMessage = "It is finally here!";
</script>
<script language="JavaScript" src="https://rhashemian.github.io/js/countdown.js"></script> -->


        <?php
        /*
        $time = time();
        $event = $time + 1;
        $countdown = round(($event - $time)/86400);
        $hours = date("H");

        $target = intval($hours) + 1;
        $target = strval($target);
        echo $target.":".date("i:s");
        echo "<br>";
        */
        
        ?>
      <div id = "time"></div>
        Name: <input type="text" name="usn"><br>  
        Password: <input type="password" name="psw" id = "psw" >
        
        <div id = "box">

    <h4>Password must contain the following:</h4>
    <p id="lower" class="invalid">A <b>lowercase</b> letter</p>
    <p id="upper" class="invalid">An <b>uppercase</b> letter</p>
    <p id="number" class="invalid">A <b>number</b> </p>
    <p id="special" class="invalid">A <b>special character</b> </p>
</div>
        </div>
    </li>
    <li>
        <div  class = "gridTwo">
        
        
        
        <input type="submit" value="Login" formaction="login.php">

        <input type="submit" value="Sign up" formaction="signup.php">
        
        
      
        
        </div>
    </li>
        
    </form>
        </ul>
    
        </div>
    
<script>

function updateClock() {
  var tid = new Date(); // current date
    klockan = tid.getHours() + ':' + tid.getMinutes() + ":" + tid.getSeconds(), // again, you get the idea


    // set the content of the element with the ID time to the formatted string
    document.getElementById('time').innerHTML = [klockan].join(' / ');

    // call this function again in 1000ms
    setTimeout(updateClock, 1000);
}
updateClock(); // initial call

// always checking if the element is clicked, if so, do alert('hello')
const input = document.getElementById("psw");
const lower = document.getElementById("lower");
const lowerCase = /[a-z]/g;
const upper = document.getElementById("upper");
const upperCase = /[A-Z]/g;
const number = document.getElementById("number");
const num = /[0-9]/g;
const special = document.getElementById("special");
const specialCharacter = /[^a-zA-Z0-9\-\/]/;
let checkLower = false;
let checkUpper = false;
let checkNumber = false;
let checkSpecial = false;
// When the user clicks on the password field, show the message box
input.onfocus = function() {
  document.getElementById("box").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
input.onblur = function() {
  setTimeout(function(){

    document.getElementById("box").style.display = "none";
  }, 200);
  
}
if(document.getElementById('btn1'))
{
   
}
else{


input.onkeyup = function()
{


  if(input.value.match(lowerCase)) {  
    lower.classList.remove("invalid");
    lower.classList.add("valid");
    checkLower = true;
    
  } else {
    
    lower.classList.remove("valid");
    lower.classList.add("invalid");
  }

  //upper
  if(input.value.match(upperCase))
  {
    upper.classList.remove("invalid");
    upper.classList.add("valid");
    checkUpper = true;
  }
  else
  {
    upper.classList.remove("valid");
    upper.classList.add("invalid");
  }

  //number
  if(input.value.match(num))
  {
    number.classList.remove("invalid");
    number.classList.add("valid");
    checkNumber = true;
  }
  else
  {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  //special

  if(input.value.match(specialCharacter))
  {
    special.classList.remove("invalid");
    special.classList.add("valid");
    checkSpecial = true;
  }
  else
  {
    special.classList.remove("valid");
    special.classList.add("invalid");
  }
  

function func2(){
  
  if(checkLower == false || checkUpper == false || checkNumber == false || checkSpecial == false)
  {
    alert("Please fill out the requirements");
    return false;
  }
}
}
}


</script>
</body>
</html>