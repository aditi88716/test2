<?php
include("dbcon.php");
if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$q="SELECT * FROM student3 WHERE id=$id";
	$query=mysqli_query($con,$q);
	$result=mysqli_fetch_array($query);
}

?>
<?php
include("dbcon.php");
if (isset($_POST['submit'])) 
{
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$filename=$_FILES['img']['name'];
 	$tempname=$_FILES['img']['tmp_name'];
 	$img="upload/".$filename;
 	move_uploaded_file($tempname, $img);
 	$q="INSERT INTO student3(username,password,img) VALUES('$username','$password','$img')";
 	$query=mysqli_query($con,$q);
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
	<input type="text" value="<?php echo $result['username']?>" name="username">
	<br>
	<br>
	Image<br>
	<input type="file" value="<?php echo $result['img']?>" name="img">
	<br>
	<br>
	Password
	<br>
	<input type="text" value="<?php echo $result['password']?>" name="password">
	<br>
	<br>
	<input type="submit" name="submit">
</form>





</body>
</html>