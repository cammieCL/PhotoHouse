<!DOCTYPE html>
<html lang="en">
<head>
<title>Inspire</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/category.css">
<link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/photopage.css">

</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Women</a></li>
			<li><a href="#">Men</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Home Deco</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+1 912-252-7350</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
  
<div class="super_container">

	<!-- Header -->
	<?php	
		session_start();
		if ($_SESSION['photo']) { ?>
			<header class="header">
				<div class="header_overlay"></div>
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo">
						<a href="indexp.php" id = "buton_acasa">
							<div class="d-flex flex-row align-items-center justify-content-start">
								<div><img src="images/logo_1.gif" alt="" width = "275" height = "95"></div>
							</div>
						</a>	
					</div>
					<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<nav class="main_nav">
						<ul class="d-flex flex-row align-items-start justify-content-start">	
							<li class="active"><a href="#">Explore</a></li>
							<li><a href="#">Collection</a> </li>
							<li><a href="category.html">Photographers</a></li>
							<li><a href="category.html">Categories</a></li>
							<li><a href="inspire.php">Inspire</a></li>
						</ul>
					</nav>
					<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
						<!-- Search -->
						<div class="header_search">
							<form action="#" id="header_search_form">
								<input type="text" class="search_input" placeholder="Search Item" required="required">
								<button class="header_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>
						<!-- User -->
						<div class="cart"><a href="#"><div><img src="images/user.svg" alt=""> </div></a></div>
						<!-- Cart -->
						<div class="cart"><a href="cart.html"><div><img class="svg" src="images/fotografiile_mele.png" alt=""></div></a></div>
						<!-- Phone -->
						<div class = "cart"> <a href = "deconectare.php" id = "log_out"> <div> <img src="images/logout_buton.png" alt="https://www.flaticon.com/authors/freepik"> </div> </a> </div> 
					</div>
				</div>
			</header>

			<?php
		}
		else if ($_SESSION['loggedin']){ ?>
			<header class="header">
				<div class="header_overlay"></div>
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo">
						<a href="indexlogat.php" id = "buton_acasa">
							<div class="d-flex flex-row align-items-center justify-content-start">
								<div><img src="images/logo_1.gif" alt="" width = "275" height = "95"></div>
							</div>
						</a>	
					</div>
					<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<nav class="main_nav">
						<ul class="d-flex flex-row align-items-start justify-content-start">	
							<li class="active"><a href="#">Explore</a></li>
		  					<li><a href="#">Collection</a> </li>
							<li><a href="category.html">Photographers</a></li>
							<li><a href="category.html">Categories</a></li>
							<li><a href="inspire.php">Inspire</a></li>
						</ul>
					</nav>
					<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
						<!-- Search -->
						<div class="header_search">
							<form action="#" id="header_search_form">
								<input type="text" class="search_input" placeholder="Search Item" required="required">
								<button class="header_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>
						<!-- User -->
						<div class="cart"><a href="#"><div><img src="images/user.svg" alt=""> </div></a></div>
						<!-- Phone -->
						<div class = "cart"> <a href = "deconectare.php" id = "log_out"> <div> <img src="images/logout_buton.png" alt="https://www.flaticon.com/authors/freepik"> </div> </a> </div> 
						<div class = "cart"> <a href = "contact.php"> <div> <img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"> </div> </a> </div> 
					</div>
				</div>
			</header>
		<?php
		}
		else { ?>
			<header class="header">
				<div class="header_overlay"></div>
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo">
						<a href="indexp.php" id = "buton_acasa">
							<div class="d-flex flex-row align-items-center justify-content-start">
								<div><img src="images/logo_1.gif" alt="" width = "275" height = "95"></div>
							</div>
						</a>	
					</div>
					<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<nav class="main_nav">
						<ul class="d-flex flex-row align-items-start justify-content-start">	
							<li class="active"><a href="#">Explore</a></li>
							<li><a href="#">Collection</a> </li>
							<li><a href="category.html">Photographers</a></li>
							<li><a href="category.html">Categories</a></li>
							<li><a href="inspire.php">Inspire</a></li>
						</ul>
					</nav>
					<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
						<!-- Search -->
						<div class="header_search">
							<form action="#" id="header_search_form">
								<input type="text" class="search_input" placeholder="Search Item" required="required">
								<button class="header_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>
						<div class = "d-flex flex-row align-items-center justify-content-start">
							<div class = "main_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">	
									<li><a href="#" id = "loginbuton">Log in</a></li>
									<li><a href="#" id = "signupbuton">Sign Up</a></li>
								</ul>
							</div>
						</div>
						<!-- Phone -->
						<div class="header_phone d-flex flex-row align-items-center justify-content-start">
							<div><div><a href = "category.html"> <img src="images/phone.svg"> </a> </div></div>
						</div>
					</div>
				</div>
			</header>
		<?php
		} ?>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Inspire</div>
				</div>
			</div>
		</div>

		<div class = "poze">
		<?php
			include ("db/conectare.php");
		 	error_reporting(0);
			session_start();
			$user = $_SESSION['admin'];
			$sql = "SELECT * from produse order by data_publicarii DESC";

			if ($r = mysqli_query($conn, $sql)) {
				if (mysqli_num_rows($r) > 0) {
					echo ("<table>"); $c = 1; 
					while ($linie = mysqli_fetch_array($r)) { 
						if ($c == 1)
							echo("<tr>");
							echo("<td> <div class='product_image'> <img src = '$linie[6]'> </div> </td>"); 
							
							$c++;
							if ($c == 5) {
								echo("</tr>");
								$c = 1;
							}
					}
				}
			}
			?>
		</div>
	</div>

		<!-- Footer -->

	<!--	<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row"> -->
						
						<!-- About -->
					<!--	<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Little Closet</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
								</div>
							</div>
						</div> -->

						<!-- Footer Links -->
					<!--	<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
									</li>
									<li>
										<a href="#"><div>Return Policy</div></a>
									</li>
									<li>
										<a href="#"><div>Size Guide<div class="footer_tag_2">recommended</div></div></a>
									</li>
									<li>
										<a href="#"><div>Terms and Conditions</div></a>
									</li>
									<li>
										<a href="#"><div>Contact</div></a>
									</li>
								</ul>
							</div>
						</div> -->

						<!-- Footer Contact -->
				<!--		<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Stay in Touch</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		<!--	<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li> <a href="category.html">Payments</a></li>
										<li> <a href="category.html">Terms of Use</a></li>
										<li> <a href="category.html">Privacy Policy</a></li>
										<li> <a href="category.html">Help</a></li>
										<li><a href="category.html">About Us</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div> -->
		
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/category.js"></script>
</body>
</html>