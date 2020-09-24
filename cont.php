<?php
session_start();
 $connection=mysqli_connect('Localhost','root');
$st=mysqli_select_db($connection,'contact');
 

if(isset($connection)){
	
	
	$Name1=$_POST['Name'];
	$sub1=$_POST['sub'];
	$msg1=$_POST['msg'];
	
	
	$sql="INSERT INTO 'contact us'('Name', 'subject', 'message') VALUES ('$Name1','$sub1','$msg1')";
	 
	 
	 $result=mysqli_query($connection,$sql);
	 
	header('location:home.php');
	 }
	?>