<!DOCTYPE html>
<html lang="en">
<head>
<title>Terms of Use</title>
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
					<div class="home_title">Terms of Use</div>
				</div>
			</div>
		</div>
    </div>

    <div class="main-padding">
        <br />

        <p style = "font-size: 20px; color: black"><strong>PLEASE READ THE FOLLOWING TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS WEBSITE.</strong></p>

        <p style = "font-size: 20px; color: black">All users of this site agree that access to and use of this site is subject to the following terms and conditions and other applicable law. If you do not agree to these terms and conditions, please do not use this site.</p>

        <p style = "font-size: 20px; color: black"><strong>Disclaimer</strong></p>
        <p style = "font-size: 20px; color: black">You understand that it is your responsibility to ensure that the privacy policy you create is complete, accurate, and meets your companies specific privacy needs. FreePrivacyPolicy.com is not liable or responsible for any privacy policies created using our services, and we give no representations or warranties, express or implied, that the privacy policies created using our service are complete, accurate or free from errors or omissions.</p>
        <p style = "font-size: 20px; color: black"><strong>FreePrivacyPolicy.com is a family friendly site</strong> and we DO NOT intentionally accept or allow the following types of sites into our program: Gambling, Adult content (porn, soft porn, sites with adult ad's), Pharmacy (Cheap drugs, Viagra, male/female enhancement, etc.), Hate, Link Farms or Spam Sites. If you sell any of these products and we find out, we will cancel your membership without hesitation. We do not need to explain our decision or reasons if we reject or cancel any membership. </p>

        <p style = "font-size: 20px; color: black"><strong>Refunds &amp; Guarantees</strong></p>
        <p style = "font-size: 20px; color: black">FreePrivacyPolicy.com offers the following guarantee. If you purchase a FreePrivacyPolicy.com course, product or service, and for some reason you decide that you would like a refund, you have 7 days to request a refund. If you request a refund within 7 days from the date of purchase, FreePrivacyPolicy.com will give you a full refund of your purchase price for the course, product or service. If you do not request a refund within the 7 day refund period, you forfeit this option and will not be eligible for a refund. We do not offer refunds on any additional services that you may purchase in the members area once you are a member. </p>

        <p style = "font-size: 20px; color: black"><strong>Email Opt-in Policy</strong></p>
        <p style = "font-size: 20px; color: black">When using our FreePrivacyPolicy.com Generator service you will be opted-in to receive weekly email updates, tips and suggestions we believe will help build, grow and enhance your site. You may unsubscribe at any time by clicking on the "Unsubscribe or Modify my subscription" link at the bottom of any email sent. </p>

        <p style = "font-size: 20px; color: black"><strong>Copyright</strong></p>
        <p style = "font-size: 20px; color: black">The entire content included in this site, including but not limited to text, graphics or code is copyrighted as a collective work under the United States and other international copyright laws, and is the property of FreePrivacyPolicy.com. The collective work includes works that are licensed to FreePrivacyPolicy.com. Copyright 2009, FreePrivacyPolicy.com ALL RIGHTS RESERVED. Permission is granted to electronically copy and print hard copy portions of this site for the sole purpose of placing an order with FreePrivacyPolicy.com or purchasing our products. Any other use, including but not limited to the reproduction, distribution, display or transmission of the content of this site is strictly prohibited, unless authorized by FreePrivacyPolicy.com. You further agree not to change or delete any proprietary notices from materials downloaded from the site. </p>

        <p style = "font-size: 20px; color: black"><strong>Trademarks</strong></p>
        <p style = "font-size: 20px; color: black">All trademarks, service marks and trade names of FreePrivacyPolicy.com used in the site are trademarks or registered trademarks of FreePrivacyPolicy.com. </p>

        <p style = "font-size: 20px; color: black"><strong>Warranty Disclaimer</strong></p>
        <p>This site and the materials and products on this site are provided "as is" and without warranties of any kind, whether express or implied. To the fullest extent permissible pursuant to applicable law, FreePrivacyPolicy.com disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement. FreePrivacyPolicy.com does not represent or warrant that the functions contained in the site will be uninterrupted or error-free, that the defects will be corrected, or that this site or the server that makes the site available are free of viruses or other harmful components. FreePrivacyPolicy.com does not make any warrantees or representations regarding the use of the materials in this site in terms of their correctness, accuracy, adequacy, usefulness, timeliness, reliability or otherwise. Some states do not permit limitations or exclusions on warranties, so the above limitations may not apply to you. </p>

        <p style = "font-size: 20px; color: black"><strong>Limitation of Liability</strong></p>
        <p style = "font-size: 20px; color: black">FreePrivacyPolicy.com shall not be liable for any special or consequential damages that result from the use of, or the inability to use, the services and products offered on this site, or the performance of the services and products. </p>

        <p style = "font-size: 20px; color: black"><strong>Typographical Errors</strong></p>
        <p style = "font-size: 20px; color: black">In the event that a FreePrivacyPolicy.com product is mistakenly listed at an incorrect price, FreePrivacyPolicy.com reserves the right to refuse or cancel any orders placed for product listed at the incorrect price. FreePrivacyPolicy.com reserves the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled, FreePrivacyPolicy.com will issue a credit to your credit card account in the amount of the incorrect price.</p>

        <p style = "font-size: 20px; color: black"><strong>Term; Termination</strong></p>
        <p style = "font-size: 20px; color: black">These terms and conditions are applicable to you upon your accessing the site and/or completing the registration or shopping process. These terms and conditions, or any part of them, may be terminated by FreePrivacyPolicy.com without notice at any time, for any reason. The provisions relating to Copyrights, Trademark, Disclaimer, Limitation of Liability, Indemnification and Miscellaneous, shall survive any termination. </p>

        <p style = "font-size: 20px; color: black"><strong>Use of Site</strong></p>
        <p style = "font-size: 20px; color: black">Harassment in any manner or form on the site, including via e-mail, chat, or by use of obscene or abusive language, is strictly forbidden. Impersonation of others, including a FreePrivacyPolicy.com or other licensed employee, host, or representative, as well as other members or visitors on the site is prohibited. You may not upload to, distribute, or otherwise publish through the site any content which is libelous, defamatory, obscene, threatening, invasive of privacy or publicity rights, abusive, illegal, or otherwise objectionable which may constitute or encourage a criminal offense, violate the rights of any party or which may otherwise give rise to liability or violate any law. You may not upload commercial content on the site or use the site to solicit others to join or become members of any other commercial online service or other organization. </p>

        <p style = "font-size: 20px; color: black"><strong>Participation Disclaimer</strong></p>
        <p style = "font-size: 20px; color: black">FreePrivacyPolicy.com does not and cannot review all communications and materials posted to or created by users accessing the site, and are not in any manner responsible for the content of these communications and materials. You acknowledge that by providing you with the ability to view and distribute user-generated content on the site, FreePrivacyPolicy.com is merely acting as a passive conduit for such distribution and is not undertaking any obligation or liability relating to any contents or activities on the site. However, FreePrivacyPolicy.com reserves the right to block or remove communications or materials that it determines to be (a) abusive, defamatory, or obscene, (b) fraudulent, deceptive, or misleading, (c) in violation of a copyright, trademark or; other intellectual property right of another or (d) offensive or otherwise unacceptable to FreePrivacyPolicy.com in its sole discretion. </p>

        <p style = "font-size: 20px; color: black"><strong>Indemnification</strong></p>
        <p style = "font-size: 20px; color: black">You agree to indemnify, defend, and hold harmless FreePrivacyPolicy.com, its officers, directors, employees, agents, licensors and suppliers (collectively the "Service Providers") from and against all losses, expenses, damages and costs, including reasonable attorneys' fees, resulting from any violation of these terms and conditions or any activity related to your account (including negligent or wrongful conduct) by you or any other person accessing the site using your Internet account. </p>

        <p style = "font-size: 20px; color: black"><strong>Third-Party Links</strong></p>
        <p style = "font-size: 20px; color: black">In an attempt to provide increased value to our visitors, FreePrivacyPolicy.com may link to sites operated by third parties. However, even if the third party is affiliated with FreePrivacyPolicy.com, FreePrivacyPolicy.com has no control over these linked sites, all of which have separate privacy and data collection practices, independent of FreePrivacyPolicy.com. These linked sites are only for your convenience and therefore you access them at your own risk. Nonetheless, FreePrivacyPolicy.com seeks to protect the integrity of its website and the links placed upon it and therefore requests any feedback on not only its own site, but for sites it links to as well (including if a specific link does not work). </p>

        <p style = "font-size: 20px; color: black"><strong>Contacting Us</strong></p>
        <p style = "font-size: 20px; color: black">If there are any questions regarding this privacy policy you may contact us.</p>

    </div>


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