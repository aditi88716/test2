<?php
include("dbcon.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$q="SELECT * FROM student3";
		$query=mysqli_query($con,$q);
		while ($result=mysqli_fetch_array($query)) 
		{
	?>
Username:<?php echo $result['username'];?><br>
Password:<?php echo $result['password'];?><br>
Image:<img src="<?php echo $result['img'];?>"><br>
<a href="update.php?id=<?php echo $result['id']?>"> Update:</a><br>
<a href="delete.php?id=<?php echo $result['id']?>">Delete</a><br>
<?php
}
?>
</body>
</html>
