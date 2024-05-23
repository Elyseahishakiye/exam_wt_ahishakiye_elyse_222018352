<?php
$db= new mysqli('localhost','root','','ockello_art_gallery');
 $edit=$_GET['edit'];
 $name=$_POST['name'];
 $position=$_POST['position']; 
 $date=$_POST['hired_date'];
 $department=$_POST['department'];
 $Salary=$_POST['Salary'];
 $edite=mysqli_query($db,"UPDATE employees SET name='$name',position='$position',hire_date='$date',department='$department', salary='$Salary' WHERE employee_id='$edit' "); 
 if ($edite) {
 	//header('location:index.php');
echo "CONGRATURATION";
 }
else
{
	echo " try again".mysqli_error($db);
}


  ?>










<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit employers details</title>
</head>
<body>

<div class="emp">
    <div class="container">
        <h2>Employers Registration Form</h2>
        <form id="employeeForm" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>

            <label for="date">hired date:</label>
            <input type="date" id="date" name="hired_date" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>
            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="Salary" required>
            <button type="submit">Register</button>

         </form></div></div>
         

</body>
</html>