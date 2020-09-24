<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $db="mydata";

    $conn=mysqli_connect($server_name,$username,$password,$db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
 ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="script.js"></script>
        
        <title> 
        FeedBack
        </title>
    </head>
    <body>
        <div class="container">
            <!   Header  >
    <div class="header"> 
      
         <a href="index.php"><h1 class="webname">MobileHub</h1></a>
        <ul class="list"> 
            <li> <a href="index.php" > Home </a> </li>
            <li> <a href="Contact.html"> Contact Us</a> </li>
            <li><a href="FeedBack.html"  >  FeedBack </a> </li>
             <li><a href="SignUp.php"  > Sign Up </a> </li>
        </ul>
        
    </div>
           <div class="slider"  style="max-height:200px" >
              <img class="mySlides" src="images/oppo.jpg" style="width:100%">
              <img class="mySlides" src="images/hdmob5.jpg" style="width:100%">
              <img class="mySlides" src="images/iphonee.jpg" style="width:100%">
               <img class="mySlides" src="images/hdmob3.jpg" style="width:100%">
            </div>
        <div class="nav">
            <table >
                <th>
                <b> Search by Network </b>
                </th>    
                <tr>
                    <td> <a href="" />3G Network Mobiles
                    </td>
                </tr>
                <tr>
                    <td> 4G Network Mobiles
                    </td>
                </tr>
                <tr>
                        <th><b> Search by Company </b>
       </th>
                </tr>
                <tr>
                    <td> <a href="Samsun.html"/> Samsung Mobiles
                    </td>
                </tr>
                <tr>
                    <td> Lenovo Mobiles
                    </td>
                </tr>
                    <tr>
                    <td> HTC Mobiles
                    </td>
                </tr>
                    <tr>
                    <td> LG Mobiles
                    </td>
                </tr>
                    <tr>
                    <td> Nokia Mobiles
                    </td>
                </tr>
    
                    <tr>
                        <th><b> Search by Price </b>
                    </th>
                </tr>
                <tr>
                    <td> 5,000 - 10,000
                    </td>
                </tr>
                <tr>
                    <td> 10,000 - 15,000
                    </td>
                </tr>
                    <tr>
                    <td> 15,000 - 25,000
                    </td>
                </tr>
                    <tr>
                    <td> 25,000 - 35,000
                    </td>
                </tr>
                    <tr>
                    <td> above 35,000
                    </td>
                </tr>
                <tr>
                        <th><b> Search by Camera </b>
                    </th>
                </tr>
                <tr>
                    <td> 3 MPx
                    </td>
                </tr>
                <tr>
                    <td> 4 Mpx
                    </td>
                </tr>
                    <tr>
                    <td> 5 MPx
                    </td>
                </tr>
                
                    <tr>
                    <td> 8 MPx
                    </td>
                </tr>
                
                    <tr>
                    <td> 13 MPx
                    </td>
                </tr>   
                    <tr>
                        <th><b> Search by RAM </b>
                    </th>
                        </tr>
                <tr>
                    <td> 256 MB RAM
                    </td>
                </tr>
                <tr>
                    <td> 512 MB RAM
                    </td>
                </tr>
                    <tr>
                    <td> 1 GB RAM
                    </td>
                </tr>
                    <tr>
                    <td> 2 GB RAM
                    </td>
                </tr>
                    <th><b> Search by OS </b>
                    </th>
                <tr>
                    <td> Andriodd Mobile
                    </td>
                </tr>
                <tr>
                    <td> Windows Phone
                    </td>
                </tr>
                    </table>
                        </div>
            <div class="feedback">
            <h3> Please leave Your Comment! </h3>
                <form id="form" name="form" action="" method="get">
                <table id="comtable">
                    <tr>
                    <td>  Name:
                        </td>
                    </tr>
                    <tr>
                    <td> <input id="name" name="name" type="text" required="required"/>
                        </td>
                    </tr>
                    <tr>
                    <td> UserName:
                        </td>
                    </tr>
                    <tr>
                    <td> <input id="username" name="username" type="text" required="required"/>
                        </td>
                    </tr>
                <tr>
                    <td> Email:
                        </td>
                    </tr>
                    <tr>
                    <td> <input id="Email" name="Email" type="Email" required="required"/>
                        </td>
                    </tr>
                <tr> 
                    <td>
                    Comment!
                    </td>
                    </tr>
                    <tr> 
                    <td>
                <textarea name="comment" rows="10" cols="25"> </textarea>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <button id="formbutton" name="formbutton"> submit</button>    </td>
                    </tr>
                </table>
                </form>
            </div>
             <div class="footer">
                <table style="width: 100%; background-color: #a87079; margin-left: 10px">
                    <tr>
                  <td style="text-align: center; color: white;">Copywrite @ 2018 AboutMobile.com </td>
              </tr>
              <tr>
                <td style="text-align: center;"><a class="ac-gf-footer-legal-link" href="/privacy/privacy-policy/">Privacy Policy</a>
                <a class="ac-gf-footer-legal-link" href="/legal/internet-services/terms/site.html">Terms of Use</a>
                <a class="ac-gf-footer-legal-link" href="/us/shop/goto/help/sales_refunds">Sales and Refunds</a>
                <a class="ac-gf-footer-legal-link" href="/legal/">Legal</a>
              </td>
             </table>
            </div>
        </div>
         <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    </body>
</html>