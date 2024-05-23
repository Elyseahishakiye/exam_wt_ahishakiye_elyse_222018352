<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>sign up</h1>
        <form action="" method="POST">
          <div class="input-field">
            <input type="text" name="name" />
            <span>User Name</span>
          </div>
          <div class="input-field">
            <input type="email" name="email" />
            <span>Email</span>
          </div>
       
       
          <button type="submit">Send</button>
        </form>
    
</body>
</html>
<?php
$co=new mysqli('localhost','root','','post9');
$name=$_POST['name'];
$email=$_POST['email'];
$r="INSERT INTO pol VALUES('','$name','$email' )";
$c=mysqli_query($co,$r);
if ($c) {
    # code...
    echo "m";
}
else
{
    echo "nnmn";
}

?>