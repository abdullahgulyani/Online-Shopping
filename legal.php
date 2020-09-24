<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="script.js"></script>
        <title> 
        AboutMobile
        </title>
        <style>
            .mySlides {display:none;}
        </style>
    </head>
    <body>
        <div class="container">
        <div class="header"> 
        
        <a href="index.php"><h1 class="webname">MobileHub</h1></a>
        <ul class="list"> 
            <li> <a href="index.php" > Home </a> </li>
            <li> <a href="Contact.html"> Contact Us </a> </li>
            <li><a href="FeedBack.html" > FeedBack </a></li>
            <li><a href="SignUp.php"  >  Sign Up </a> </li>
        </ul>
        <button  id="button" onclick="myfunc()" >Search</button>
        <input id="inp" name="search" type="text"/>
       
 
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
                         <div class="ref">
                         <pre><p>
               <span  style="color:#fb701bed;font-weight:bold ">Sales & Refund Policy</span>
               Thank you for shopping at copicmarker.com. We appreciate</br>
                your business. We want to ensure you have a great</br>
                experience while you’re exploring,evaluating and</br> 
                purchasing our products, whether you’re at the </br>
                Copic online store, or on thephone with our customer </br> 
                service representatives.</br> 
               <span  style="color:#fb701bed;font-weight:bold "> RETURNS</span>
               Our products are of the highest quality available.</br>
               Sometimes a product may turn out to be defective</br>
               or not to your liking. In that unlikely event, we </br>
               invite you to review the following terms related </br>
               to returning a product. For all products purchased </br>
               from Copic, you may return your items within seven days</br>
               of purchase for a full refund. We are not responsible</br>
               for covering your shipping costs. Please contact a Copic</br> 
               customer service representative to obtain a RMA</br> 
              (Return Merchandise Authorization) form. You must have an </br> 
              RMA# in order to receive a refund for the product.</p>
                         </div>
            <div class="footer">
                <table style="width: 100%; background-color: #a87079; margin-left: 10px">
                    <tr>
                  <td style="text-align: center; color: white;">Copywrite @ 2018 AboutMobile.com </td>
              </tr>
              <tr>
                <td style="text-align: center;"><a href="privacy.php">Privacy Policy</a>
                <a href="term.php">Terms of Use</a>
                <a href="refund.php">Sales and Refunds</a>
                <a href="Legal.php">Legal</a>
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