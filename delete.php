<?php
include("dbcon.php");
if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$q="DELETE FROM student3 WHERE id=$id";
	$query=mysqli_query($con,$q);
	header('location:display.php');
}
?>