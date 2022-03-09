<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
<form method="post" style="border: 1px solid #ccc" onsubmit = "return func2()">
      <div class="container">
        
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        
        <label for="usn" required><b>Username</b></label>
        <input type="text" placeholder="Username" id="usn" name="usn" required />
        <label for="email"><b>Email</b></label>
        
        <input type="text" placeholder="Enter Email" name="email" required />
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id = "psw"
          required
        />
        <label for="psw-repeat" ><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name = "psw2"/>

      <div id = "box">
        <h4>Password must contain the following:</h4>
        <p id="lower" class="invalid">A <b>lowercase</b> letter</p>
        <p id="upper" class="invalid">An <b>uppercase</b> letter</p>
        <p id="number" class="invalid">A <b>number</b> </p>
        <p id="special" class="invalid">A <b>special character</b> </p>
      </div>

        <div class="clearfix">
          <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
          <button type="submit" class="signupbtn" formaction="creatingAccount.php">Sign Up</button>
        </div>
      </div>
    </form>


<script>
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