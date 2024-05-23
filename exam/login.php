<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="log.css">
   
    <title>login</title>
  </head>
  <body>
    <div class="container">
      <div class="sign-up">
        
         
        <form method="POST">
           <div class="header">
            <h2 id="headfield">sign in</h2>
          </div>
          <div class="input">
            <input type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="input">
            <input type="password" name="password" placeholder="Enter your password" />
          </div><br>
         <i>create account</i>&nbsp;<a href="registration.php">click me</a>
         <br><br><br>
          <div class="btn">
          <button type="submit" name="send" id="signbtn">login</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      let signupbtn = document.getElementById("signupbtn");
      let signinbtn = document.getElementById("signinbtn");
      let replace = document.getElementById("replace");
      let headfield = document.getElementById("headfield");
      let signbtn = document.getElementById("signbtn");

      signinbtn.onclick = function () {
        replace.style.maxHeight = "0";
        headfield.innerHTML = "sign in";
        signupbtn.classList.add("signbtn");
        signinbtn.classList.remove("signbtn");
      };
      signupbtn.onclick = function () {
        replace.style.maxHeight = "75px";
        headfield.innerHTML = "sign up";
        signinbtn.classList.add("signbtn");
        signupbtn.classList.remove("signbtn");
      };
    </script>
  </body>
</html>
<?php
$db = new mysqli('localhost', 'root', '', 'ockello_art_gallery');
if (isset($_POST['send'])) {


$email = $_POST["email"];

$password=MD5('password');
$sel = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
$check =$db->query($sel);


    $row = mysqli_num_rows($check);
    if ($row==0) {
    echo "Invalid email or password";
    
  
} else {
  session_start();
  $_SESSION['email']=$email;
    header("location:index.php");
}
}
?>
