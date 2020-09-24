<?php
session_start();
$serverName = "localhost";
$userName = "root";
$password ="";
$dbname = "mydata";
$conn = new mysqli($serverName, $userName, $password ,$dbname);  // connection of db
 /*
 if($conn-> connect_error){
echo "faild to connect".$conn->connect_error."<br/>";
}
else {
echo "db is connected successfully";
}
*/
//     Get Data from Sign up form
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$uname=$_GET['uname'];
$email=$_GET['email'];
$pw=$_GET['Password'];
$cpasswor=$_GET['CPassword'];
$country=$_GET['country'];
$gender=$_GET['Gender'];
$phone=$_GET['PHN'];
$mobile=$_GET['MBN'];
$zipcode=$_GET['Zipcode'];
$adress=$_GET['Address'];
$_SESSION['username']=$uname;
if(isset($_GET['update'])){
//		echo "SignUp  clicked"."<br>";
	$query="Update User_db  set
	 First_name='$fname' ,Last_name='$lname',User_name='$uname', Email='$email',Password='$pw',
	Confirm_password='$cpasswor',Country='$country',Gender='$gender', Phone_no='$phone',
	Mobile_no='$mobile', Zipcode='$zipcode', Adress='$adress'
 where User_name='$uname'";	
	if($conn->query($query)===TRUE)
	{
		
	?>  <html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="script.js"></script>
<title>User Profile</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<img name="logo" src="images/logo.JPG" alt="logo" /> <a
				href="index.php"><h1 class="webname">AboutMobile.com</h1></a>
			<ul class="list">
				<li><a href="index.php"> Home </a></li>
				<li><a href="Contact.html"> Contact Us </a></li>
				<li><a href="FeedBack.html"> FeedBack </a></li>
				<li><a href="userpf.php"> <?php echo "$uname"; ?> </a></li>
				<li><a href="SignUp.php"> Log out </a></li>
			</ul>

			
		</div>
		<div class="slider">
			<center>
				<img src="img/008.jpg" alt="Slider Images" />
			</center>
		</div>
		<div class="nav">
			<table>
				<th><b> Search by Network </b></th>
				<tr>
					<td><a href="" />3G Network Mobiles</td>
				</tr>
				<tr>
					<td>4G Network Mobiles</td>
				</tr>
				<tr>
					<th><b> Search by Company </b></th>
				</tr>
				<tr>
					<td><a href="Samsun.html" /> Samsung Mobiles</td>
				</tr>
				<tr>
					<td>Lenovo Mobiles</td>
				</tr>
				<tr>
					<td>HTC Mobiles</td>
				</tr>
				<tr>
					<td>LG Mobiles</td>
				</tr>
				<tr>
					<td>Nokia Mobiles</td>
				</tr>

				<tr>
					<th><b> Search by Price </b></th>
				</tr>
				<tr>
					<td>5,000 - 10,000</td>
				</tr>
				<tr>
					<td>10,000 - 15,000</td>
				</tr>
				<tr>
					<td>15,000 - 25,000</td>
				</tr>
				<tr>
					<td>25,000 - 35,000</td>
				</tr>
				<tr>
					<td>above 35,000</td>
				</tr>
				<tr>
					<th><b> Search by Camera </b></th>
				</tr>
				<tr>
					<td>3 MPx</td>
				</tr>
				<tr>
					<td>4 Mpx</td>
				</tr>
				<tr>
					<td>5 MPx</td>
				</tr>

				<tr>
					<td>8 MPx</td>
				</tr>

				<tr>
					<td>13 MPx</td>
				</tr>
				<tr>
					<th><b> Search by RAM </b></th>
				</tr>
				<tr>
					<td>256 MB RAM</td>
				</tr>
				<tr>
					<td>512 MB RAM</td>
				</tr>
				<tr>
					<td>1 GB RAM</td>
				</tr>
				<tr>
					<td>2 GB RAM</td>
				</tr>
				<th><b> Search by OS </b></th>
				<tr>
					<td>Andriodd Mobile</td>
				</tr>
				<tr>
					<td>Windows Phone</td>
				</tr>
			</table>
		</div>

		<div class="content">
			<table id="tabcont">
				<tr>
					<td><img src="images/iphoneSEs.jpg" /></td>
					<td><img src="images/GalaxyA72016s.jpg" /></td>
					<td><img src="images/Honor3Xs.jpg" />
					
					<td><img src="images/Huawei-Y5s.jpg" /></td>
				</tr>
				<tr>
					<td>iPhoneSE<br /> Price
					</td>
					<td>GlaxyA72016 <br /> Price
					</td>
					<td>Honor 3X <br /> Price
					</td>
					<td>Huawei-Y5 <br /> Price
					</td>
				</tr>
				<tr>
					<td><input type="button" name="iPhoneSE" onclick="addcart()" value="Add cart" /></td>
				</tr>
				<tr>
					<td><img src="images/GalaxyA52016s.jpg" alt=" 3G5s" /></td>
					<td><img src="images/AscendMate7Golds.jpg" /></td>
					<td><img src="images/A5000s.jpg" /></td>
					<td><img src="images/K170s.jpg" /></td>

				</tr>
				<tr>
					<td>iPhoneSE<br /> Price
					</td>
					<td>GlaxyA72016 <br /> Price
					</td>
					<td>Honor 3X <br /> Price
					</td>
					<td>Lumia625 <br /> Price
					</td>
				</tr>
				<tr>
					<td><img src="images/3G5s.jpg" alt=" 3G5s" /></td>
					<td><img src="images/GalaxyA72016s.jpg" /></td>
					<td><img src="images/Honor3Xs.jpg" />
					
					<td><img src="images/Huawei-Y5s.jpg" /></td>
				</tr>
				<tr>
					<td>iPhoneSE<br /> Price
					</td>
					<td>GlaxyA72016 <br /> Price
					</td>
					<td>Honor 3X <br /> Price
					</td>
					<td>Lumia625 <br /> Price
					</td>
				</tr>
				<tr>
					<td><img src="images/3G5s.jpg" alt=" 3G5s" /></td>
					<td><img src="images/GalaxyA72016s.jpg" /></td>
					<td><img src="images/Honor3Xs.jpg" />
					
					<td><img src="images/Huawei-Y5s.jpg" /></td>
				</tr>
				<tr>
					<td>iPhoneSE<br /> Price
					</td>
					<td>Honor 3X <br /> Price
					</td>
					<td>Huawei-Y5 <br /> Price
					</td>
					<td>Lumia625 <br /> Price
					</td>
				</tr>
			</table>
		</div>
		<div class="footer">
			<p>Copywrite @ 2016 AboutMobile.com</p>
		</div>
	</div>
</body>
</html>
	<?php
	$_SESSION['username']="$uname";
	$_SESSION['pw']="$pw";
	
	}
	else {
		echo "your account is not created".$conn->error;
	}
}
