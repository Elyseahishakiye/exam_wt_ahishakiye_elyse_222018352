<?php
 $db= new mysqli('localhost','root','','ockello_art_gallery');
 $delete=$_GET['delete'];
 $delet=mysqli_query($db,"DELETE FROM employees WHERE employee_id='$delete' ");

if ($delet) {
	header('location:index.php');
}
else
{
	echo "it can't";
}


?>