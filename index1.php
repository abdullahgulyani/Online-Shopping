<?php
session_start();
 $connection=mysqli_connect('Localhost','root');
$st=mysqli_select_db($connection,'house');
 

if(isset($connection)){
	
	
	$uname1=$_POST['name'];
	$pass1=$_POST['Pass'];
	
	$sql="INSERT INTO `log`( 'id',`name`, `pass`) VALUES ('','$uname1','$pass1') ";
	 
	 
	mysqli_query($connection,$sql);
	 
	header('location:home.php');
	 }
	
		
	
	



?>