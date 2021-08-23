<?php
	
	include("classes/connect.php");
	include("classes/homepage.php");

	
?> 


<html>
<head>
	<title>Ecom | homepage</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>



  <body style="font-family: tahoma;background-color: #e9ebee;">

	<div class="bar1">
	    <a href="signup.php" class="signup_button">Sign up</a>
        <a href="" class="login_button">Log in</a>
	</div>
    <div class="bar2"> 
         <div class="row1">
            <div class="col1">
            <div class="title">Ecommerce Website</div>
        </div>
        <div class="col1">
            <div class="cart_button"><a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a></div>
        </div>   
        </div>               
       
    </div>
    <div class="menu_bar">
        <ul>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">categories<i class="fas fa-caret-down"></i></a>
            <div class="dropdown_menu">
                <ul>
                    <li><a href="#">accessories</a></li>
                    <li><a href="#">electronics</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#">Discounts</a></li>
            <li><a href="#">Shipping Details</a></li>
        
        </ul>
      </div>
         <div class= "h1"><h2>Featured Product</h2></div>
    <div class="sm1">
        <div class= "categories">
            <div class="row2">
                <div class="col-2">
                    <a href="men's.html" class="btn0"><img src="images/product-8.jpg" height="307px"></a>
                </div>
                <div class="col-2">
                    <a href="women's.html" class="btn0"><img src="images/category-3.jpg" height="307px"></a>
                </div>
                <div class="col-2">
                    <a href="accessories.html" class="btn0"><img src="images/accessories1.png" height="307px"></a>
                </div>
                
            </div>
        </div>
    </div>
      <footer class="footer">
        <div class="footer-left">
            <img src="images/logo.png" alt="">
            <p>amader product khub valo, tumi chaile kinte paro</p>
            <div class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-tumblr"></i></a>
                <a href="#"><i class="fa fa-apple"></i></a>
                
            </div>
          </div>
          <ul class="footer-right">
              <li>
                <h3>product</h3>

                <ul class="box">
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Phones</a></li>
                    <li><a href="#">HTML Template</a></li>
                </ul>
              </li>

              <li class="feature">
                <h3>Useful Links</h3>

                <ul class="box">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Certification</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
              </li>
            <li>
            <h3>Address</h3>
              
            <ul class="box">
                <li><a href="#">North South University</a></li>
                <li><a href="#">Block-B</a></li>
                <li><a href="#">Basundhara R/A</a></li>
                <li><a href="#">Dhaka, Bangladesh</a></li>
            </ul>
          </li>
          </ul>
          <div class="footer-bottom">
            <p>All Rights Reserved by &copy; conceptial 2020</p>
          </div>
      </footer>
  </body>
</html>