<!DOCTYPE html>
<html>
<head><title>Project</title>

<style>

.header{
position:relative;
top:-25px;
width:100%;
height:80px;
background-color:#003322;
border-radius:10px;
}

.name{
	position:relative;
	top:15px;
	left:85px;
	color:white;
	font-family:Courier New;
	font-size:35px;
	
	
}

.name1{
	position:relative;
	top:-35px;
	left:160px;
	color:white;
	font-family:Comic Sans MS;
	font-size:15px;
	
	
}

.menu{
	width:3%;
	height:11px;
	border:none;
	position:absolute;
	margin-top:-85px;
	margin-left:820px;
	font-family:sans-serif;
	font-size:17px;
	color:white;
	background-color:#8a8a5c;
	border-radius:10px;
}

.home{
	text-decoration:none;
	color:white;
}

.home:link    {color:white; background-color:transparent; text-decoration:none}
.home:visited {color:white; background-color:transparent; text-decoration:none}
.home:hover   {color:yellow; background-color:transparent; text-decoration:none}
.home:active  {color:white; background-color:transparent; text-decoration:underline}




.menu1{
	width:10%;
	height:11px;
	border:none;
	position:absolute;
	margin-top:-85px;
	margin-left:910px;
	font-family:sans-serif;
	font-size:17px;
	color:white;
	background-color:#8a8a5c;
	border-radius:10px;
}

.special{
	text-decoration:none;
	color:white;
}

.special:link    {color:white; background-color:transparent; text-decoration:none}
.special:visited {color:white; background-color:transparent; text-decoration:none}
.special:hover   {color:yellow; background-color:transparent; text-decoration:none}
.special:active  {color:white; background-color:transparent; text-decoration:underline}







.menu2{
	width:6.9%;
	height:11px;
	border:none;
	position:absolute;
	margin-top:-85px;
	margin-left:1100px;
	font-family:sans-serif;
	font-size:17px;
	color:white;
	
	background-color:#8a8a5c;
	border-radius:10px;
}

.about{
	text-decoration:none;
	color:white;
}

.about:link    {color:white; background-color:transparent; text-decoration:none}
.about:visited {color:white; background-color:transparent; text-decoration:none}
.about:hover   {color:yellow; background-color:transparent; text-decoration:none}
.about:active  {color:white; background-color:transparent; text-decoration:underline}



.menu3{
	width:7%;
	height:11px;
	border:none;
	position:absolute;
	margin-top:-85px;
	margin-left:1240px;
	font-family:sans-serif;
	font-size:17px;
	color:white;
	background-color:#8a8a5c;
	border-radius:10px;
}

.contact{
	text-decoration:none;
	color:white;
}

.contact:link    {color:white; background-color:transparent; text-decoration:none}
.contact:visited {color:white; background-color:transparent; text-decoration:none}
.contact:hover   {color:yellow; background-color:transparent; text-decoration:none}
.contact:active  {color:white; background-color:transparent; text-decoration:underline}


.menu4{
	width:4%;
	height:20px;
	border:none;
	position:absolute;
	margin-top:-91.5px;
	margin-left:1380px;
	font-family:sans-serif;
	font-size:20px;
	color:white;
	background-color:#009933;
	border-radius:7px;
}

.log{
	text-decoration:none;
	color:white;
}

.log:link    {color:white; background-color:transparent; text-decoration:none}
.log:visited {color:white; background-color:transparent; text-decoration:none}
.log:hover   {color:yellow; background-color:transparent; text-decoration:none}
.log:active  {color:white; background-color:transparent; text-decoration:underline}




.footer{
position:relative;
top:-5px;
left:2px;
width:99%;
height:230px;
background-color:#003322;
border-radius:10px;
}

.form{
	
position:relative;
background-image:url("back.jpg");
background-repeat:repeat-x;	
background-position: right top;
background-attachment: fixed;
}


</style>



	<body>



	
<div class="header">
<p class="name"><img src="logo.png"  width="90px"  style="position:relative;height:45px;top:8px;left:10px;"><b>Click</b><span style="margin-left:8px;font-size:40px;font-family:griffy">&</span><b style="margin-left:8px;">Get</b></p>

<p class="name1">your brand and services</p>

<fieldset class="menu"><a href="home.php" class="home">HOME
</a>
</fieldset>


<fieldset class="menu1"><a href="specialoffers.php" class="special">SPECIAL OFFERS</a>
</a>
</fieldset>


<fieldset class="menu2"><a href="aboutus.php" class="about">ABOUT US</a></fieldset>


<fieldset class="menu3"><a href="contactus.php" class="contact">CONTACT</a></fieldset>


<fieldset class="menu4"><a href="login.php" class="log">LogIn</a></fieldset>

</div>



<div class="form" style="position:relative;width:100%;height:900px;background-color:green">


<form style="position:relative;top:200px;left:650px;" method="POST" action="index1.php">
  <p style="position:relative;margin-top:-20px;margin-left:35px;color:white;font-size:30px;font-family:Comic Sans MS">Email ID:</p><br>
  <input type="text" name="Username" placeholder="          Enter Name" style="position:relative;left:-10px;top:-40px;color:black;background-color:#e0ebeb;width:15%;height:35px;border:none;border-radius:20px;font-family:sans-serif;font-size:20px;">
  <br>
  <p style="position:relative;margin-top:-20px;margin-left:35px;color:white;font-size:30px;font-family:Comic Sans MS">Password:</p><br>
  <input type="text" name="Password" placeholder="          Password" style="position:relative;left:-10px;top:-40px;color:black;background-color:#e0ebeb;width:15%;height:35px;border:none;border-radius:20px;font-family:sans-serif;font-size:20px;">
  <br><br>
  <input type="submit" value="Submit" style="position:relative;left:45px;top:-20px;color:white;background-color:#00b8e6;width:7%;height:40px;border:none;border-radius:10px;font-family:sans-serif;font-size:22px;opacity:1">
</form> 



</div>

<div class="footer">

<p style="position:relative;top:25px;left:45px;color:white;font-family:Courier New;font-size:22px;font-weight:bold;">ACCOUNT</p>



<fieldset style="position:relative;left:40px;top:15px;width:9%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Your Account</i></p>
</fieldset>

<fieldset style="position:relative;left:40px;top:20px;width:15%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Personal Information</i></p>
</fieldset>

<fieldset style="position:relative;left:40px;top:25px;width:8%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Addresses</i></p>
</fieldset>

<fieldset style="position:relative;left:40px;top:30px;width:7%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Discount</i></p>
</fieldset>

<fieldset style="position:relative;left:40px;top:35px;width:10%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Order History</i></p>
</fieldset>


<p style="position:relative;top:-182px;left:395px;color:white;font-family:Courier New;font-size:22px;font-weight:bold;">INFORMATION</p>



<fieldset style="position:relative;left:395px;top:-195px;width:5%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Contact</i></p>
</fieldset>

<fieldset style="position:relative;left:395px;top:-190px;width:5%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Registration</i></p>
</fieldset>

<fieldset style="position:relative;left:395px;top:-185px;width:9%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Legal Notice</i></p>
</fieldset>

<fieldset style="position:relative;left:395px;top:-180px;width:14%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Terms & Conditions</i></p>
</fieldset>

<fieldset style="position:relative;left:395px;top:-175px;width:3%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>FAQs</i></p>
</fieldset>



<p style="position:relative;top:-390px;left:780px;color:white;font-family:Courier New;font-size:22px;font-weight:bold;">OUR OFFERS</p>



<fieldset style="position:relative;left:777px;top:-405px;width:9%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>New Products</i></p>
</fieldset>

<fieldset style="position:relative;left:777px;top:-400px;width:8.5%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Top sellers</i></p>
</fieldset>

<fieldset style="position:relative;left:777px;top:-395px;width:10.5%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Special Offers</i></p>
</fieldset>

<fieldset style="position:relative;left:777px;top:-390px;width:7%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Manufacturers</i></p>
</fieldset>

<fieldset style="position:relative;left:777px;top:-385px;width:6%;height:12px;background-color:#8a8a5c;border:none;border-radius:5px;">
<p style="position:relative;top:-15px;left:-5px;color:white;font-family:Courier New;font-size:16x;font-weight:italic;"><i>Supliers</i></p>
</fieldset>

<img src="capture14.png" style="position:relative;top:-560px;left:1060px;width:6%;height:50px;">

<p style="position:relative;top:-560px;left:1062px;color:white;font-family:Courier New;font-size:22px;font-weight:bold;">Social Media</p>

<img src="capture13.png" style="position:relative;top:-580px;left:1060px;width:13%;height:50px;">

</div>



</div>


</body>



</html>



