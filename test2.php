<?php
include("dbcon.php");
//session_start();
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$filename=$_FILES['img'] ['name'];
	$tempname=$_FILES['img'] ['tmp_name'];
	$img="upload/".$filename;
	move_uploaded_file($tempname, $img);
	$q="INSERT INTO student3(username,password,img) VALUES('$username','$password','$img')";
	$query=mysqli_query($con,$q);
	header('location:display.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Test2</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	Username
	<br>
	<input type="text" name="username">
	<br>
	<br>
	Image<br>
	<input type="file" name="img">
	<br>
	<br>
	Password
	<br>
	<input type="text" name="password">
	<br>
	<br>
	<input type="submit" name="submit">
</form>





</body>
</html>