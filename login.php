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
        
        <h1>Log in</h1>
        <p>Please fill in your username and password to log in.</p>
        
        <label for="usn" required><b>Username</b></label>
        <input type="text" placeholder="Username" id="usn" name="usn" required />
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id = "psw"
          required
        />
     
        <div class="clearfix">
          <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
          <button type="submit" class="signupbtn" formaction="checkLogin.php">Log in</button>
        </div>
      </div>
    </form>


</body>

</html>