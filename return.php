<?php

session_start();

$conn=mysqli_connect('127.0.0.1','u381731899_AAVkO','gauravVERMA.123','u381731899_2KPwD');

if (!$conn)
{
	die("connection failed: ");
}
echo "";

$count=0;
	$count1=0;
$total_price=0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Happy String</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
<!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@600&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
    
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop" style="height:auto;background-color:black;">
				<nav class="limiter-menu-desktop p-l-45">
				
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">HAPPY STRING</a>
					
					
					  <nav class="limiter-menu-desktop p-l-45 topnavbar" >
                    
                    <!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

                            <li>
                                <a href="productWomen.php">Women</a>
                            </li>

                            <li>
                                <a href="productMen.php">Men</a>
                            </li>
							
							<li>
								<a href="productAccessories.php">Accessories</a>
							</li>

                            <li>
                                <a href="blog.php">Inside Stories</a>
                            </li>

                            <li>
                                <a href="about.php">About Us</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>

						</ul>
					</div>	
				</nav>
				
					                              

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
                            
                      <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
						
						
                            
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-1 user-dropdown">
                                <button class="user">
									<i class="fas fa-user-circle"></i>
								</button>
								<?php 
								if(!isset($_SESSION['cust_id']))
								{ ?>
									<div class="user-dropdown-content">
									  <a href="loginform.php">Login</a>
									  <a href="signupform.php">Register</a>
									</div>
								<?php 
								}
								else
								{
										
							
								?>
									<div class="user-dropdown-content">
									  <a href="myaccount.php">My Account</a>
									  <a href="myorders.php">My Orders</a>
									  <a href="logout.php">Logout</a>
									</div>
								<?php 
								}
								?>
								
                            </div>
							
							<?php
							
							if(!isset($_SESSION['cust_id']))
				{
				$_SESSION['msg']="<h2 style='color:red'>You need to login first</h2>";
				
				$count=0;

				}
				else
				{
					$custid=$_SESSION['cust_id'];
							

                    					
				$sql5='select * from xpmp_customer_wishlist where customer_id='.$custid;
			
				$rs5 = mysqli_query($conn,$sql5);
				if (mysqli_num_rows($rs5) > 0) 
				{
					$count=0;
					while($row5 = mysqli_fetch_assoc($rs5)) 
					{
						$count++;
					}
				}
				}
				?>
							
							<a href="wishlist.php" class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti" data-notify="<?php echo $count; ?>" >
								<i class="zmdi zmdi-favorite-outline"></i>
							</a>
							
							<?php
							if(!isset($_SESSION['cust_id']))
				{
				$_SESSION['msg']="<h2 style='color:red'>You need to login first</h2>";
				
				$count1=0;

				}
				else
				{
					$custid=$_SESSION['cust_id'];
							     					
				$sql6='select * from xpmp_cart where customer_id='.$custid;
			
				$rs6 = mysqli_query($conn,$sql6);
				if (mysqli_num_rows($rs6) > 0) 
				{
					$count1=0;
					while($row6 = mysqli_fetch_assoc($rs6)) 
					{
						$count1++;
					}
				}
				}
				?>
                            
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="<?php echo $count1; ?>" >
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							
						</div>
					</div>
                    </nav>
                
              
		</div>
		</div>


		<!-- Header Mobile -->
		<div class="wrap-header-mobile" style="background-color:black;">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php" style="color:lightgray;">HAPPY STRING</a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			
				<div class="icon-header-item cl2 hov-cl1 trans-04 js-show-modal-search">
					<i class="zmdi zmdi-search" style="color:lightgray"></i>
				</div>
				
				<?php
											
				if(!isset($_SESSION['cust_id']))
				{
				$_SESSION['msg']="<h2 style='color:red'>You need to login first</h2>";
				
				$count=0;

				}
				else
				{
					$custid=$_SESSION['cust_id'];
                    					
				$sql5='select * from xpmp_customer_wishlist where customer_id='.$custid;
			
				$rs5 = mysqli_query($conn,$sql5);
				if (mysqli_num_rows($rs5) > 0) 
				{
					$count=0;
					while($row1 = mysqli_fetch_assoc($rs5)) 
					{
						$count++;
					}
				}
				}
				?>
				<a href="wishlist.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 icon-header-noti" data-notify="<?php echo $count; ?>" >
					<i class="zmdi zmdi-favorite-outline" style="color:lightgray"></i>
				</a>
				
				<?php
				if(!isset($_SESSION['cust_id']))
				{
				$_SESSION['msg']="<h2 style='color:red'>You need to login first</h2>";
				
				$count1=0;

				}
				else
				{
					$custid=$_SESSION['cust_id'];
							     					
				$sql6='select * from xpmp_cart where customer_id='.$custid;
			
				$rs6 = mysqli_query($conn,$sql6);
				if (mysqli_num_rows($rs6) > 0) 
				{
					$count1=0;
					while($row6 = mysqli_fetch_assoc($rs6)) 
					{
						$count1++;
					}
				}
				}
				?>
				
				<div class="icon-header-item cl2 hov-cl1 trans-04  icon-header-noti js-show-cart" data-notify="<?php echo $count1; ?>">
					<i class="zmdi zmdi-shopping-cart" style="color:lightgray"></i>
				</div>
							
				
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze" style="background-color:lightgray;">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
			
			<?php 
				if(!isset($_SESSION['cust_id']))
				{ ?>
			
				<li>
					<a href="loginform.php">Login</a>
				</li>
				<?php 
				}
				else
				{ ?>
				
				<li>
					<a href="myaccount.php">My Account</a>
				</li>
				
				<?php 
					}
					?>
					
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="productWomen.php">Women</a>
				</li>

				<li>
					<a href="productMen.php">Men</a>
				</li>
				
				<li>
					<a href="productAccessories.php">Accessories</a>
				</li>

				<li>
					<a href="blog.php">Inside Stories</a>
				</li>

				<li>
					<a href="about.php">About Us</a>
				</li>

				<li>
					<a href="contact.php">Contact Us</a>
				</li>	

				<?php 
				if(isset($_SESSION['cust_id']))
				{ ?>
				<li>
					<a href="logout.php">Logout</a>
				</li>
				<?php 
					}
					?>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04">
				<i class="zmdi zmdi-close"></i>
			</button>

			<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="search" name="search-product" placeholder="Search">
					</div>	
		</div>
	</header>



 		<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
	
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<?php 
		if(!isset($_SESSION['cust_id']))
		{
			
			?>
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
				
				<div class="header-cart-content flex-w js-pscroll">
		
				<div class="cart-error" style="margin-top:100px;border:2px solid black;padding:30px;">
				<h2>Oops...!!!</h2>
				<h4> You need to Login First.</h4>
				<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								<a href="loginform.php" style="color:white">Login</a>
							</button>
						</div>
						</div>
				</div>
				</div>
				</div>
				</div>
				<?php
		
		}
else{

	$custid=$_SESSION['cust_id'];

?>
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<?php
				$pia="SELECT * FROM xpmp_cart where customer_id=".$custid;
				$pib=mysqli_query($conn,$pia);
				 if (mysqli_num_rows($pib) > 0)
				 {
					 while($row = mysqli_fetch_assoc($pib))
					 {
						 $pid=$row["product_id"];
						 $pi1='select * from xpmp_product_description where product_id='.$pid;
						 $pi2='select * from xpmp_product where product_id='.$pid;
						 $pi1=mysqli_query($conn,$pi1);
							 $pi2=mysqli_query($conn,$pi2);
						 if(mysqli_num_rows($pi1) > 0)
						 {
							 if(mysqli_num_rows($pi2) > 0)
							 {
								 while($row1 = mysqli_fetch_assoc($pi1))
								 {
									 while($row2 = mysqli_fetch_assoc($pi2))
									 {
								 ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/gallery-08.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								<?php echo $row1["name"]; ?>
							</a>

							<span class="header-cart-item-info">
								<?php echo $row2["price"]; ?>
							</span>
						</div>
					</li>
					<?php
				$total_price=$total_price+ $row2["price"];
				?>
					<?php 
						}
						 }
						 }}
						 }}
						 ?>
</ul>
					
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total:<?php echo $total_price.'  INR'; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart1.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart1.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>


<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="search" name="search-product" placeholder="Search">
					</div>	
				</div>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/banner/banner3.jpg');margin-top:50px;">
		<h2 class="ltext-105 cl0 txt-center">
			Returns & Exchange Policy
		</h2>
		
		<h4 style="color:black; text-align:center; margin-top:20px;">DELIVERY INFORMATION</h4>
		 <h5 style="color:black; text-align:center; margin-bottom:20px;">SHIPPING POLICY</h5>
			<p id="text1" style="margin-top:30px;">
<strong> What is the cost of shipping?</strong><br>
<p id="text1">
Shipping for all orders within India is chargable.
<li>How long will it take for the order to reach me?</li></p>
<p id="text1">
• Please refer the product page for estimated shipping and delivery timelines for
both domestic orders. From the time of shipping, it takes about 7-12 days for
domestic orders.<br>
• If you have placed an order with multiple items, please note that your items may
arrive in multiple shipments. The estimated delivery times are indicative, and, on
some occasions, there might be some unavoidable delays beyond our control. We
will keep you informed in case of any delays.<br></p>
<h5 style="color:black; text-align:center; margin-bottom:20px;">What can I do if my order dispatch is delayed?</h5>
<p id="text1">
• We will try our best to get your products to you within the estimated delivery
times. If the package has not reached you by the expected delivery date, please
call us on 8077816528 or write to us at orders@happystring.in  and we will try our
best to resolve your issues.<br>
</p>
<h5 style="color:black; text-align:center; margin-bottom:20px;">My order has been shipped. Can I track it?</h5>
<p id="text1">
• For orders within India, once your order has been dispatched, you will receive an
email with the details of the tracking number and the courier company that is
processing your order
•You can track the status of your package 24 hours after your order is dispatched
from our warehouse.<br>
• If we are unable to fulfil the order in 20 days due to any reasons, it shall be
 cancelled.
</ul></p>

 <h5 style="color:black; text-align:center; margin-bottom:20px;">Self-collection @ happystring</h5>
<ul class="list1" id="list1">
<li>• Please email us at orders@happystring.in with your order number to inform us if
  you wish to opt for self-collection upon order confirmation.</li>
<li>• Do collect your order within 2-3 working days upon confirmation email.</li>
<li>• If the order is not collected within 2-3working days, we will mail the order to the
shipping address stated.</li>
<li>• Self-collection is only available 2-3 day after order is made.</li></ul>
 <h5 style="color:black; text-align:center; margin-bottom:20px;">Cancellation by the Happystring </h5>
<ul class="list1" id="list1">
<li>• Prepaid orders are not eligible for cancellation.</li>
<li>• The customer agrees not to dispute the decision made by Happystring and accept The
  Happy string’s decision regarding the cancellation.</li>

<li>• Please note that there may be certain orders that we are unable to accept/fulfill and must
cancel.</li>
<li>• We reserve the right at our sole discretion to refuse or cancel any order for any
reason.</li>
<li>• Some situations that may result in your order being cancelled include limitations
on quantities available for purchase inaccuracies or errors in product or pricing
information, or problems identified by our credit and fraud avoidance department.</li>
<li>• We may also require additional verification or information before accepting any
order.</li>
<li>• We will contact you if all or any portion of your order is cancelled or if additional
information is required to accept your order.</li>
<li>• If your order is cancelled after your credit card has been charged the said amount
will be reversed back in your Card Account.</li>
<li>• The customer agrees not to dispute the decision made by Happy string and accept
Happy string’s decision regarding the cancellation.</li></ul>
<h5 style="color:black; text-align:center; margin-bottom:20px;">Courier </h5>
<ul class="list1" id="list1">
<li>• Delivery takes 8-9 business days. Delivery time excludes payment verification &amp;
administrative processes.</li>
<li>• Item is mailed out within 48 hours upon payment verification excludes weekends &amp;
public holidays.</li>
<li>• Delivery is trackable and 100% insured.</li>
<li>• Customer or addressee (anyone living at the address) will be required to sign for
the package at the door.</li>
<li>• If no one is at home/office to receive it, a redelivery will be attempted up to 2 more
times. You will be contacted by the courier company for a suitable time for
redelivery.</li>
<li>• As soon as the order is shipped, we will send a detailed message with name of
courier company and tracking number, it&#39;s customers duty to follow up with the
courier company after &emsp; that, we can just help them with exact status of order along
with its location.</li> </ul>
<h5 style="color:black; text-align:center; margin-bottom:20px;">Mailing hours</h5>
<ul class="list1" id="list1" style="margin-bottom:0px!important">
<li>• Your orders will only be processed and packed during the operation hours.<br> Our mailing
team operates from 10.30am to 6.30pm, Monday - Friday <br>(exclusive of Public Holidays).
</li>
</ul>
</section>	
	


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Need Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="contact.php" class="stext-107 cl7 hov-cl1 trans-04">
								Contact Us
							</a>
						</li>

						<li class="p-b-10">
							<a href="return.php" class="stext-107 cl7 hov-cl1 trans-04">
								Returns &amp Exchange Policy 
							</a>
						</li>

						<li class="p-b-10">
							<a href="product-care.php" class="stext-107 cl7 hov-cl1 trans-04">
								Product Care
							</a>
						</li>

						<li class="p-b-10">
							<a href="faq.php" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						The Company
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="about.php" class="stext-107 cl7 hov-cl1 trans-04">
								About Happy String
							</a>
						</li>

						<li class="p-b-10">
							<a href="career.php" class="stext-107 cl7 hov-cl1 trans-04">
								Career with us
							</a>
						</li>

						<li class="p-b-10">
							<a href="terms-and-conditions.php" class="stext-107 cl7 hov-cl1 trans-04">
								Terms &amp Conditions
							</a>
						</li>

					<div class="p-t-27">
					<h4 class="stext-301 cl0 p-b-30">
						Find Us On
					</h4>
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fab fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fab fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Feedback
					</h4>

					<form method="post">
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="name" placeholder="Your Name">
							<div class="focus-input1 trans-04"></div>
						</div>
						<br>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="Your Email">
							<div class="focus-input1 trans-04"></div>
						</div>
						<br>
						<div class="wrap-input1 w-full p-b-4">
						<textarea class="input1 bg-none plh1 stext-107 cl7"  rows = "3" cols = "30" name = "feedback" placeholder="Your Feedback Here"></textarea>
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" type="submit" name="add">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>
			<?php 
			if(isset($_POST['add']))
			{
				$a=$_POST['name'];
				$b=$_POST['email'];
				$c=$_POST['feedback'];
				$e="INSERT INTO xpmp_footer_feedback(name,email,feedback) VALUES('$a','$b','$c')";
				$rs=mysqli_query($conn,$e);		
			}
			?>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>
				<hr>
				<p class="stext-107 cl6 txt-center">

				Happy String &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.<br>
	
			</div>
		</div>
	</footer>
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>