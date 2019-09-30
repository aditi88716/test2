<?php
include("dbcon.php");
session_start();
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="SELECT * FROM student3 WHERE username= '$username' && password='$password'";
	$query=mysqli_query($con,$q);
	$result=mysqli_fetch_array($query);
	$total = mysqli_num_rows($query);
	echo $total;
	if ($query) 
	{
		$_SESSION['id']=$result['id'];
		//echo $_SESSION['id'];
		//$_SESSION['username']=$username;
		header('location:show.php');
	}
	else
	{
		//echo "wrong username and password";
	}
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="post">
	Username
	<br>
	<input type="text" name="username">
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