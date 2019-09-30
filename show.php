<?php
include("dbcon.php");
session_start();
if ($_SESSION['id']==true) 
{

}
else
{
	header('location:login.php');
}
$id=$_SESSION['id'];
if (isset($id)) 
{
	$q="SELECT * FROM student3 WHERE id='$id'";
	$query=mysqli_query($con,$q);
	$result=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<h5><a href="logout.php">Log out</a></h5>
	<h4>username: <?php echo $result['username']?></h4>
	<h4>Password: <?php echo $result['password']?></h4>
	<img src="<?php echo $result['img']?>">
</div>
</body>
</html>
