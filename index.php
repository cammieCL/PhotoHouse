<!DOCTYPE html>
<html lang="en">
<head>
<title>PhotoHouse</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/photopage.css">

</head>
<body>

<div class="bg-modal"> </div>
<div class = "modal-opac"> 	
	<div class="modal-content">	
		<div class="close"> + </div>
		<center>	<img class = "modal-img" src = "images/logo_1.gif" alt = "Image"> </center> 
			<p class = "loginscris"> <b> Log in to see more </b></p> <br>
			<form action = "login.php" name = "formular" method = "post">
					<input class = "input_form" type = "text" placeholder = "Username" name = "user_login" REQUIRED>
					<input class = "input_form" type = "password" placeholder = "Password" name = "pass_login" REQUIRED>
					<input class = "butonulmeu" type = "submit" value = "Log In" name = "buton_login">
			</form>
    </div>
</div>

<div class = "bg-modal"> </div>
<div class = "modal-opac-signup">
	<div class="modal-cont">
		<div class = "closesign"> + </div>
		<img class = "modal-img" src = "images/logo_1.gif" alt = "Image">
		<form action = "signup.php" name = "signup" method = "post">
			<p class = "loginscris"> <b> Sign up for unlimited photos </b></p> <br>
			<input class = "input_form" type = "text" placeholder = "First Name" name = "nume_sign" REQUIRED>
			<input class = "input_form" type = "text" placeholder = "Last Name" name = "prenume_sign" REQUIRED>
			<input class = "input_form" type = "text" placeholder = "Username" name = "user_sign" REQUIRED>
			<input class = "input_form" type = "password" placeholder = "Password" name = "pass_sign" REQUIRED>
			<center> <p class = "tipscris"> I am a 
			<input class = "radiob" type = "radio" name = "tip" value = "Photographer" checked> Photographer<br>
  			&nbsp; <input class = "radiob" type = "radio" name = "tip" value = "Buyer"> Viewer <br>  </p> </center> <br>
			<input class = "butonulmeu" type = "submit" value = "Sign Up" name = "buton_signup">
		</form> 
	</div>
</div>


<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="cauta.php" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="cauta fotografie" required="required" name = "cautext">
			<input class="menu_search_button" type = "submit"><img src="images/search.png" name = "butoncauta">
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li> <a href="category.html">Travel</a></li>
            <li><a href="category.html">People</a></li>
            <li><a href="category.html">Tehnology</a></li>
	        <li><a href="category.html">Nature</a></li>
            <li><a href="category.html">Fashion</a></li>
            <li><a href="category.html">Arhitecture</a></li>
            <li><a href="category.html">Food </a></li>
            <li><a href="category.html">Animals </a></li>
            <li><a href="category.html">Art </a></li>
            <li><a href="category.html">Business </a></li>
            <li><a href="category.html">Sports </a></li>
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
	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="index.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.gif" alt="" width = "275" height = "95"></div>
					<!--	<div>PhotoHouse</div> -->
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div> 
			<nav class="main_nav">
				<div>
					<ul>
						<li class="active"><a href="#">Explore</a></li>
						<li><a href="collection.php">Collection</a></li>
						<li><a href="hottest.php">Hottest 50</a></li>
						<li><a href="#">Categories</a>
							<!-- <ul class = "submeniu">
								<li class = "subelem"><a href="travel.php">Travel</a></li>
								<li class = "subelem"><a href="people.php">People</a></li>
								<li class = "subelem"><a href="tehnology.php">Tehnology</a></li>
								<li class = "subelem"><a href="nature.php">Nature</a></li>
								<li class = "subelem"><a href="fashion.php">Fashion</a></li>
								<li class = "subelem"><a href="art.php">Art</a></li>
								<li class = "subelem"><a href="food.php">Food </a></li>
								<li class = "subelem"><a href="animals.php">Animals </a></li>
							</ul> -->
						</li>
						<li><a href="inspire.php">Inspire</a></li>
					</ul>
				</div>
			</nav> 
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="search.php" id="header_search_form">
						<input type="text" class="search_input" placeholder="Cauta fotografie" required="required" name = "decautat">
						<button class="header_search_button" name = "butoncautare"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<div class = "d-flex flex-row align-items-center justify-content-start">
					<div class = "main_nav">
						<ul>
							<li><a href="#" id = "loginbuton">Log in</a></li>
							<li><a href="#" id = "signupbuton">Sign Up</a></li>
						</ul>
					</div>
				</div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><a href = "contact.php"> <img src="images/phone.svg"> </a> </div></div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					
					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/homep.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Latest photos added </div>
											<div class="home_subtitle">Inspire people</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="fashion.php"><img src="images/home1.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_image"><a href = "people.php"><img src="images/home2.jpg" alt=""> </a></div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="travel.php"><img src="images/home_3.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/homep.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Popular</div>
											<div class="home_subtitle">Spring in Japan</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="nature.php"><img src="images/home4.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
														<div class="product_image"><a href = "arhitecture.php"><img src="images/home_5.jpg" alt=""> </a></div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="travel.php"><img src="images/home_6.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/homep.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Trendsetters</div>
											<div class="home_subtitle">Summer Wear</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="travel.php"><img src="images/home_7.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
														<div class="product_image"><a href = "culture.php"><img src="images/home_8.jpg" alt=""> </a></div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="fashion.php"><img src="images/home_9.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/homep.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Nature is Us</div>
											<div class="home_subtitle">Earth Day</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="health.html"><img src="images/home_10.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
														<div class="product_image"><a href = "travel.php"><img src="images/home_11.jpg" alt=""> </a></div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="nature.php"><img src="images/home_12.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				<!-- Home Slider Dots -->
				
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Popular on PhotoHouse </div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li><a href="travel.php">Travel</a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="people.php">People</a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="tehnology.php">Tehnology </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="nature.php">Nature</a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="fashion.php">Fashion </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="arhitecture.php">Arhitecture </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="food.php">Food </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="animals.php">Animals </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="culture.php">Culture </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="business.php">Business </a></li>
								<p style = "font-weight: 700; font-size: 18px"> &nbsp; / &nbsp; </p>
								<li><a href="health.php">Health </a></li>
							</ul>
						</div>
					</div>
				</div> 
				<div class="row products_row">
					
					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product1.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="nature.php">Easter is coming</a></div>
											<div class="product_category">In <a href="nature.php">Nature</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product2.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="nature.php">Monika Grabkowska</a></div>
											<div class="product_category">In <a href="nature.php">Nature</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="food.php">Gaelle Marcel</a></div>
											<div class="product_category">In <a href="food.php">Food</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="tehnology.php">Markus Spiske</a></div>
											<div class="product_category">In <a href="inspire.php">Inspire</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product5.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="travel.php">Evgeni Tcherkasski</a></div>
											<div class="product_category">In <a href="travel.php">Travel</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/product6.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="travel.php">Kyler Boone</a></div>
											<div class="product_category">In <a href="travel.php">Travel</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box1.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="tehnology.php">
												<div class="background_image" style="background-image:url(images/box_1_imggg.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Tehnology</div>
									</div>
								</div>
							</div>

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box2.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="food.php">
												<div class="background_image" style="background-image:url(images/box_2_imgg.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Yummy</div>
									</div>
								</div>
							</div>

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box3.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="fashion.php">
												<div class="background_image" style="background-image:url(images/box_3_imgg.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Popular Choice</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>PhotoHouse</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p> Cele mai variate fotografii de la fotografi tineri </p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="nature.php"><div> Spring in Japan <div class="footer_tag_1">online now</div></div></a>
									</li>
									<li>
										<a href="culture.php"><div> Easter</div></a>
									</li>
									<li>
										<a href="arhitecture.php"> <div> Hour of history</div></a>
									</li>
									<li>
										<a href="nature.php"><div> The Grand Canyon's Story <div class="footer_tag_2">recommended</div></div></a>
									</li>
									<li>
										<a href="travel.php"><div> All roads lead home </div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li> <a href="termsofuse.php">Terms of Use</a></li>
										<li> <a href="privacy.php">Privacy Policy</a></li>
										<li> <a href="help.php">Help</a></li>
										<li><a href="aboutus.php">About Us</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
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
<script src="js/custom.js"></script>
<script src="js/login.js"></script>
</body>
</html>