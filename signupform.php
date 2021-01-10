<?php
session_start();

if(isset($_SESSION['cust_id']))
{
	echo "cannot Access this page as You already have an account.";
	echo "<a href='logout.php'>Logout</a> to access this page.";
	exit;
}

require 'config.php';

$total_price=0;
$count=0;
	$count1=0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>FZ STORE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon1.png"/>
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
	
	
	<style>

.signup-form{
		width:auto;
	}

/* Full-width input fields */
.signup-form input[type=text], input[type=password],input[type=email],input[type=tel],input[type=date] {
   border: 0;
  background: none;
  display: block;	
  outline: none;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #3498db;
  border-radius: 24px;
  box-sizing: border-box;
  color: white;
}

.signup-form textarea{
	 border: 0;
  background: none;
  display: block;	
  outline: none;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #3498db;
  border-radius: 24px;
  box-sizing: border-box;
  color: white;
}

/*.radio-btn input[type='radio'] {
  display: none; 
 }*/

.radio-btn {
      float: left;
      clear: none;
	  margin-left:-80px;
	  margin-top:10px;
    }
    
   .radio-btn  label {
      float: left;
      clear: none;
      display: block;
      padding: 0px 1em 0px 8px;
    }
	/*.radio-btn label:before {
  styles outer circle
  content: " ";
  display: inline-block;
  position: relative;
  top: 5px;
  margin: 0 5px 0 0;
  width: 20px;
  height: 20px;
  border-radius: 11px;
  border: 2px solid #3498db;
  background-color: transparent;
}*/

    
    input[type=radio],
    input.radio {
      float: left;
      clear: none;
      margin: 2px 0 0 2px;
	  padding-right:100px;
    }
	
	.radio-btn label input[type='radio']:checked+span:after {
  /*styles inside circle*/
  border-radius: 11px;
  width: 12px;
  height: 12px;
  position: absolute;
  top: 1px;
  left: 6px;
  display: block;
  
  background-color: blue;
}

/*input[type=date]::-webkit-calendar-picker-indicator {
   
   
    background: url(images/icons/icon-calendar.png) no-repeat;
	border:2px solid red;
	opacity: 1;
}*/
	

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
.signup-form button {
	border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.signup-form button:hover {
   background: #2ecc71
}

/* Extra styles for the cancel button */
.signup-form .cancelbtn { 
  border: 2px solid #f44336;
}

.signup-form .cancelbtn:hover {
  background: #f44336;
}

.signup-form .loginbtn {
  width: 80%;
  border: 2px solid #4169E1;
  background: #4169E1;
}
.signup-form .loginbtn:hover {
background: #518de4;
}
 

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn, .loginbtn {
     width: 100%;
  }
}
@media screen and (max-width: 1000px) {
	.signup-form input[type=text], input[type=password],input[type=email],input[type=tel],input[type=date],textarea {
		width:100%
		padding: 3px 8px;
		margin: 2px 0;
	}
	
	.signup-form{
		width:100%;
	}
	.loginbtn {
     width: 100%;
  }
	
}

</style>
    
</head>
<body class="animsition" >
	
<!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop" style="height:auto;background-color:black;">
				<nav class="limiter-menu-desktop p-l-45">
				
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">FZ STORE</a>
					
					
					  <nav class="limiter-menu-desktop p-l-45 topnavbar" >
                    
                    <!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
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
				<a href="index.php" style="color:lightgray;">FZ STORE</a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			
				<div class="icon-header-item cl2 hov-cl1 trans-04 js-show-modal-search">
					<i class="zmdi zmdi-search" style="color:lightgray"></i>
				</div>
				
				<?php
											
				if(!isset($_SESSION['cust_id']))
				{
				
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
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
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


<div class="body-content">
	<div class="signup-form" style="background-color:black">
   <div class="container" style="background-color:#191919;color:#a8a8a8;">
	<div class="row">
		<div class="col-12 col-lg-6  p-all-53">

			<form action="" method="post">
			  <div class="container">
				<h1 style="color:#fff; font-weight: 500">Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
				<hr>
				
				<label for="fname" style="float:left;"><i class="fas fa-user"></i><b>  First Name</b></label>
				<input type="text" placeholder="Enter First Name" name="fname" required>
				
				<label for="lname" style="float:left;"><i class="fas fa-user"></i><b>  Last Name</b></label>
				<input type="text" placeholder="Enter Last Name" name="lname" required>
				
				<label for="uname" style="float:left;"><i class="fas fa-user"></i><b>  Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				
				 <label for="email" style="float:left;"><i class="fas fa-envelope"></i><b>  Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" required>

				<label for="psw" style="float:left;"><i class="fas fa-key"></i><b>  Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<label for="confirmpsw" style="float:left;"><i class="fas fa-key"></i><b>  Confirm Password</b></label>
				<input type="password" placeholder="Confirm Password" name="confirmpsw" required>
				
				<label for="mobile" style="float:left;"><i class="fas fa-mobile-alt"></i><b>  Mobile</b></label>
				<input type="tel" name="mobile" pattern="[0-9]{10}" placeholder="Enter Mobile no." required>
				
				<label for="dob" style="float:left;"><i class="far fa-calendar-alt"></i><b>  Date Of Birth</b></label>
				<input type="date" placeholder="Enter DOB" name="dob" required>
				
				<label for="gender" style="float:left;"><i class="fas fa-user"></i><b>  Gender</b></label><br><br>
			  
			  <div class="radio-btn">
			   <label for="male"><input type="radio" name="gender" value="male" required><i class="fas fa-male"></i> Male <span></span></label>
				<label for="female"><input type="radio" name="gender" value="female" required><i class="fas fa-female"></i> Female <span></span></label>
				<label for="transgender"><input type="radio" name="gender" value="transgender" required><i class="fas fa-transgender"></i> Transgender <span></span></label>
				</div>
				<br><br>
				
				<p style="text-align:left;margin:30px 0;border:2px solid #191919;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				<div class="clearfix">
				  <button type="reset" class="cancelbtn" name="cancel" style="float:left;">Cancel</button>
				  <button type="submit" class="signupbtn" name="signup" style="float:right;">Sign Up</button>
				 
				</div>
				</div>
			</form>
			</div>
			
	 <div class="col-12 col-lg-6 p-all-53 ">
    
	 <h1 style="color:#fff; font-weight: 500">SIGN IN</h1> <hr><br><br>
	
	<p>If you have a FZ Store account, use this option to access the Login form.</p>
	<br><br>
	 <a href="loginform.php"> <button type="submit" class="loginbtn" name="login">LOGIN</button></a>
  </div>
		</div>
		</div>
	</div>

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
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Contact Us
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns &amp Exchange Policy 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Product Care
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
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
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								About FZ STORE
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Career with us
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
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

					<form>
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
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>

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

				FZ STORE &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.<br>
				<br>
				Designed By <b>Mohd Faiz.<b>
	
			</div>
		</div>
	</footer>
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
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
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
<!--================================================================================================-->

</body>
</html>


<?php

if(isset($_POST['signup']))
	{
		//header("Location:loginform.php");
			//exit;
		 if($_POST['psw'] !== $_POST['confirmpsw'])
		{
			echo "<h2 style='color:red'>Passwords do not match</h2>";
		}
		else
		{
			$a=$_POST['fname'];
			$b=$_POST['lname'];
			$c=$_POST['uname'];
			$d=$_POST['email'];
			$e=$_POST['confirmpsw'];
			$f=md5($e);
			$g=$_POST['mobile'];
			$h=$_POST['dob'];
			$i=$_POST['gender'];
			$j=$_POST['address'];
			$k=$_POST['district'];
			$l=$_POST['pincode'];
			$m=$_POST['state'];
			
			$_SESSION['username']=$c;
			
			$sql="select * from xpmp_customer";
			$rs=mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($rs)>0)
			{
				while($row=mysqli_fetch_assoc($rs))
				{
					
					$x=$row['email'];
					$y=$row['username'];
					
					if($d==$x)
					{
						echo "email already exists";
						exit;
					}
					if($c==$y)
					{
						echo "username already exists";
						exit;
					}
				}
			
					$sql1 = "INSERT INTO xpmp_customer(firstname,lastname,username,email,password,telephone,dob,gender,address,district,postcode,state,status) 
					VALUES('$a','$b','$c','$d','$f','$g','$h','$i','$j','$k','$l','$m','unverified')";
					

					if (mysqli_query($conn, $sql1)) 
					{
						echo "Your Account is registered successfully<br>";
	
						$activationcode=md5(rand());
						$_SESSION['token']=$activationcode;

						$from         = 'FZ STORE<mohdfaiz7862@gmail.com>'; //from mail, sender email addrress 
						$to    = 	$d; //recipient email addrress 	
						$subject     = "Email verification (fzstore.epizy.com)"; // email subject
						$body        = "<p>Thanks for new Registration.</p>"; // email body
						$eol = PHP_EOL;//end of line
						$semi_rand     = md5(time());//semi random
						$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
						$headers       = "From: $from$eol"."MIME-Version: 1.0$eol"."Content-Type: multipart/mixed;$eol" ." boundary=\"$mime_boundary\"";
						// add html message body
						$message = "--$mime_boundary$eol" ."Content-Type: text/html; charset=\"iso-8859-1\"$eol" ."Content-Transfer-Encoding: 7bit$eol$eol" .$body . $eol;

						// attach pdf to email
						$message .= "<html></body><div><div>Dear $c,</div></br></br>";
						$message .="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
												<div style='padding-top:10px;'><a href='http://www.fzstore.epizy.com/verification.php?code=$activationcode'>Click Here</a></div>
												<div style='padding-top:10px;'>Powered by <a href='fzstore.epizy.com'>fzstore.epizy.com</a></div></div>
												</body></html>";

						// Send the email
						if(mail($to, $subject, $message, $headers)) 
						{

						//echo "The email was sent.fdfdf";
							echo "message send successfully";
						
						
							$min=60;
							$dt =new DateTime();	
							$dt->setTimezone(new DateTimeZone("Asia/Calcutta"));
							$currentdt = $dt->format("Y/m/d G:i:s");
							$dt->add(new DateInterval('PT'.$min.'M'));
							$newdt = $dt->format("Y/m/d G:i:s");

							$sql7 = "INSERT INTO xpmp_token(token,username,start_time,end_time) VALUES('$activationcode','$c','$currentdt','$newdt')";
							$rs7=mysqli_query($conn,$sql7);
								
								//connection close
							mysqli_close($conn);
							echo "<script>window.location = 'alert.php';</script>";
							exit;
							
					}
					else
					{
						echo "<script>alert('Data not inserted');</script>";
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
		
			}
		}
	}
}
?>