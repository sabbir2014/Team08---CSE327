<?php
	
	include("classes/connect.php");
	include("classes/homepage.php");

	
?> 


<html>
<head>
	<title>Ecom | homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

	<style>
		
		.bar1{
			height:45px;
			background-color: #000000;
			padding: 4px;
            padding-bottom: 10px;
			
		} 
        

		.signup_button{
			color: #FFFFFF;
			font-size: 15px;
			text-align: center;
            margin-top: 17px;
			margin-right: 40px;
			float: right;
		}
        .login_button{
			color: #FFFFFF;
			font-size: 15px;
			text-align: center;
            margin-top: 17px;
			margin-right: 30px;
			float: right;
		}
         .bar2{
			height:35px;
			background-color: #FFFFFF;
			padding-left: 4px;
			
		} 
        
        .row1{
            display: flex;
            align-items:stretch;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .col1{
            
            flex-basis: 50%;
            min-width: 150px;
            text-align: right;

        }
        

         .title{
            color: #000000;
            font-size: 20px;
        }
		
        .cart_button{
            padding-right: 50px;
        }
        .menu_bar{
            background-color: #000000;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            position: relative;
        }
	
        .menu_bar ul{
            list-style: none;
            display: flex;
        }
        
        .menu_bar ul li{
            padding: 0 170px;
            position: relative;
        }
        .menu_bar ul li a{
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            transition: all 0.3s;
        }
        
        .menu_bar ul li a:hover{
            color: #ff523b;
            
        }
        .dropdown_menu{
            display: none;
        }
        
        .menu_bar ul li:hover .dropdown_menu{
            display: block;
            position: absolute;
            left: 150px;
            top: 100%;
            background-color: #000000;
        }
        
        .menu_bar ul li:hover .dropdown_menu ul{
            display: block;
        }
        .menu_bar ul li:hover .dropdown_menu ul li{
            width: 100px;
            padding-left: 25px;
            padding-right: 10px;
        }
        
        .fas{
            float: right;
            margin-left: 10px;
            padding-top: 5px;
            
        }
        .categories{
            margin: 70px, 0;
        }
		.row2{
            display: flex;
            align-items:stretch;
            flex-wrap: wrap;
            justify-content: space-around;
            padding-left: 100px;
        }
        .h1 h2{
            font-size: 30px;
            text-align: center;
        }

        .col-2{
            flex-basis: 30%;
            min-width: 250px;
        }

        .col-2 img{
            width: 100%;
        }

        .sm1{
            max-width: 1080px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .btn0:hover{
            background: #563434;
        }
        
        footer{
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-flow: row wrap;
            padding: 50px;
            margin-top: 20px;
            color: #fff;
            background-color: #011c39;
        }
        .footer>*{
            flex: 1 100%;
        }
        .footer-left{
            margin-right: 1.25cm;
            margin-bottom: 2cm;
        }
        .footer-left img{
            width: 50%;
        }
        h3{
            font-weight: 600;
            font-size: 17px;
        }
        .footer ul{
            list-style: none;
            padding-left: 0;
        }
        .footer li{
            line-height: 20px;
        }
        .footer a{
            text-decoration: none;
        }
        .footer-right{
             display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-flow: row wrap;
        }
        .footer-right>*{
            flex: 1 50%;
            margin-right: 1.25cm;
        }
        .box a{
            color: #999;
        }
        .footer-bottom{
            text-align: center;
            color: #999;
            padding-bottom: 50px;
        }
        .footer-left p{
            padding-right: 20%;
            color: #999;
        }
        .social a{
            background: #364a62;
            width: 40px;
            height: 40px;
            display: inline-block;
            margin-right: 10px;
        }
        .social a i{
            color: #e7f2f4;
            padding: 10px 12px;
            font-size: 20px;
        }
        @media screen and (min-width: 600px){
            .footer-right > *{
                flex: 1;
            }
            .footer-left{
                flex: 1 0px;
            }
            .footer-right{
                flex: 2 0px;
            }
        }
	</style>


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