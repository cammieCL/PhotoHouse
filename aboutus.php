<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
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

<div class = "bg-modal"> </div>
<div class = "modal-opac-contulmeu">
	<div class = "modal-content-cont" style = "height: 700px">
		<div class="closecont"> + </div>
		<img class = "modal-img" src = "images/logo_1.gif" alt = "Image">
		<?php
			session_start();
 			include("db/conectare.php");
			$user = $_SESSION['admin'];
			$sql = "SELECT * from useri WHERE username LIKE '$user'";
			if ($rasp = mysqli_query($conn, $sql)) {
				$linie = mysqli_fetch_array($rasp);
				echo("<p class = 'loginscris' style = 'font-size: 45px'> Welcome $linie[1] $linie[2] </p>");
			}
		?>
			<p style = "font-size: 30px; font-family: 'Times New Roman'"> Change your password </p>
			<form action = "schimba.php" action = "post">
				<input type = "hidden" name = "numeutilizator" value = "<?php echo $user ?>"> <br> 
        <input type = "password" name = "p_veche" placeholder = "Old password" REQUIRED class = "input_formular"> <br> 
        <input type = "password" name = "p_noua" placeholder = "New password" REQUIRED class = "input_formular"> <br> 
        <input type = "password" name = "rep_noua" placeholder = "Repeat new password" REQUIRED class = "input_formular"> <br>
        <input class = "butonmodificare" type = "submit" name = "schimba_parola" value = "Change password">
    
			</form>
	</div>
</div>


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
		error_reporting(0);
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
							<li><a href="indexp.php">Explore</a></li>
							<li><a href="collection.php">Collection</a> </li>
							<li><a href="hottest.php">Hottest 50</a></li>
							<li><a href="#">Categories</a></li>
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
						<div class="cart"><a href="#" id = "contulmeubuton"><div><img src="images/user.svg" alt=""> </div></a></div>
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
							<li><a href="indexlogat.php">Explore</a></li>
							<li><a href="collection.php">Collection</a> </li>
							<li><a href="hottest.php">Hottest 50</a></li>
							<li><a href="#">Categories</a></li>
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
						<div class="cart"><a href="#" id = "contulmeubuton"><div><img src="images/user.svg" alt=""> </div></a></div>
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
							<li><a href="index.php">Explore</a></li>
							<li><a href="collection.php">Collection</a> </li>
							<li><a href="hottest.php">Hottest 50</a></li>
							<li><a href="#">Categories</a></li>
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
							<nav class = "main_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">	
									<li><a href="#" id = "loginbuton">Log in</a></li>
									<li><a href="#" id = "signupbuton">Sign Up</a></li>
								</ul>
							</nav>
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
					<div class="home_title">About Us</div>
				</div>
			</div>
		</div>
    </div>
    <br> <br> <br> <br> <br> <br> <br>
     <center> <p style = "font-size: 50px; color: black; font-family: 'Courier New'"><strong>Our team</strong></p> </center>
     <center> <img src = "images/cami.jpg"> 
     <center> <p style = "font-size: 30px; color: black; font-family: 'Courier New'"><strong>Lazăr Camelia </strong></p> </center>
     <center> <p style = "font-size: 30px; color: black; font-family: 'Courier New'"><strong> Founder</strong></p> </center>




<script>
	document.getElementById('contulmeubuton').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'flex';
    document.querySelector('.modal-opac-contulmeu').style.display = 'flex'; 
  });

  document.querySelector('.closecont').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac-contulmeu').style.display = 'none';
  });
</script>

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
<script src="js/login.js"></script>
</body>
</html>