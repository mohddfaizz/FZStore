<?php

session_start();

require 'config.php';

$count=0;
	$count1=0;
$total_price=0;
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
	
    
</head>
<body class="animsition">
	
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

                            <li class="active-menu">
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


	<!-- Content page -->
	<div class="body-content1">
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent"><br><br>
							<center><img src="images\Blogs\2.jpg" alt="IMG-BLOG" height="500px" width="50%"></center>

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									22
								</span>

								<span class="stext-109 cl3 txt-center">
									Jan 2020
								</span>
							</div>
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									15 Aug, 2020
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									BEAUTI OF LETS GET CRAFTED
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									8 Comments
								</span>
							</span>

							<h4 class="ltext-109 cl2 p-b-28">
								EMBROIDERY TECHNIQUES OF RAJASTHAN
							</h4>

							<p class="stext-117 cl6 p-b-26">
								Rajasthani Embroidery is synonymous for its colorful and artsy look. Vivid colors and
lively embroidery reflects the charm of its people and warmth of the state. Embroidery
have always been an innate part of the clothing culture of Rajasthan. The obvious
inspirations for the folk embroidery of Rajasthan are toys. It is amazing to note that the
women of remote villages, unexposed to modern civilization, are the experts in
preparing articles of such great aesthetic value.
The Rajasthani embroidery stitches used are simple— herringbone for filling and stem
stitch for outlining but a three-dimensional effect is created by using a thick thread in a
variety of colors.
							</p>

							<p class="stext-117 cl6 p-b-26">
								Mirror Work, colloquially known as, Shisha Kaargari is the traditional embroidery of
Rajasthan. Shisha work is said to be originated from 17th century. An early form of
mirror work was introduced to India during the ruling period of the Mughal Empire. Later
Indian artisans quickly excelled at the craft, and over time, motifs changed to reflect the
traditional cultures of the country.
It is an art form in which, mirrors of various shapes are fixed and stitched on to the
fabric through embroidery. It is commonly seen in parts of Gujarat, Rajasthan, Haryana,
and Delhi. Mirror work is used on various fabrics like georgette, crepe, cotton, silk,
chiffon. Intricate motifs of needlework and sparkling mirrors used in the art attracts a
number of tourists. It has gained a unique identity and has become a trade mark of
Rajasthan.
							</p>
						</div>

						<div class="flex-w flex-t p-t-16">
							<span class="size-216 stext-116 cl8 p-t-4">
								Tags
							</span>

							<div class="flex-w size-217">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>

						<!--  -->
						<div class="p-t-40">
							<h5 class="mtext-113 cl2 p-b-12">
								Leave a Comment
							</h5>

							<p class="stext-107 cl6 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form>
								<div class="bor19 m-b-20">
									<textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea>
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Name *">
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
								</div>

								<div class="bor19 size-218 m-b-30">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="web" placeholder="Website">
								</div>

								<button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04" type="submit" name="add1">
									Post Comment
								</button>
							</form>
						</div>
					</div>
				</div>

				

						

						

						
						
					
				
		
		
	</section>	
	</div>
	<?php 
	if(isset($_POST['add1']))
	{
		$a=$_POST['name'];
				$b=$_POST['email'];
				$c=$_POST['comment'];
				$d=$_POST['web'];
				$e="INSERT INTO xpmp_blog_feedback(name,email,web,comment) VALUES('$a','$b','$d','$d')";
				mysqli_query($set,$e);
	}
	?>
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
								About FZ STORE
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

					<form method="POST">
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
				mysqli_query($set,$e);
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

			FZ STORE &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.<br>
				<br>
				Designed By <b>Mohd Faiz.<b>
	
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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