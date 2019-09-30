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
session_unset();
header('location:login.php');
?>