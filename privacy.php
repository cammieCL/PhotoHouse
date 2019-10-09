<!DOCTYPE html>
<html lang="en">
<head>
<title>Privacy Policy</title>
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
					<div class="home_title">Privacy Policy</div>
				</div>
			</div>
		</div>

        <div class="main-padding">

<br />

<p style = 'font-size: 20px; color: black' >This privacy policy has been compiled to better serve those who are concerned with how their 'Personally identifiable information' (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>

<p style = 'font-size: 20px; color: black'><strong>What personal information do we collect from the people that visit our blog, website or app?</strong></p>
<p style = 'font-size: 20px; color: black'>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, credit card information or other details to help you with your experience.</p>

<p style = 'font-size: 20px; color: black'><strong>When do we collect information?</strong></p>
<p style = 'font-size: 20px; color: black'>We collect information from you when you register on our site, place an order, subscribe to a newsletter, fill out a form or enter information on our site.</p>

<p style = 'font-size: 20px; color: black'><strong>How do we use your information?</strong></p>
<p style = 'font-size: 20px; color: black'>We may use such information in the following ways:</p>
<ul>
    <li style = 'font-size: 20px; color: black'>To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.</li>
    <li style = 'font-size: 20px; color: black'>To improve our website in order to better serve you.</li>
    <li style = 'font-size: 20px; color: black'>To allow us to better service you in responding to your customer service requests.</li>
    <li style = 'font-size: 20px; color: black'>To administer a contest, promotion, survey or other site feature.</li>
    <li style = 'font-size: 20px; color: black'>To quickly process your transactions.</li>
    <li style = 'font-size: 20px; color: black'>To send periodic emails regarding your order or other products and services.</li>
</ul>

<p style = 'font-size: 20px; color: black'><strong>How do we protect visitor information?</strong></p>
<p style = 'font-size: 20px; color: black'>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.</p>
<p style = 'font-size: 20px; color: black'>We use regular Malware Scanning.</p>
<p style = 'font-size: 20px; color: black'>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.</p>
<p style = 'font-size: 20px; color: black'>We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.</p>
<p style = 'font-size: 20px; color: black'>All transactions are processed through a gateway provider and are not stored or processed on our servers.</p>

<p style = 'font-size: 20px; color: black'><strong>Do we use 'cookies'?</strong></p>
<p style = 'font-size: 20px; color: black'>Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the site's or service provider's systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>
<p style = 'font-size: 20px; color: black'>We use cookies to:</p>
<ul>
    <li style = 'font-size: 20px; color: black' >Help remember and process the items in the shopping cart.</li>
    <li style = 'font-size: 20px; color: black'>Understand and save user's preferences for future visits.</li>
    <li style = 'font-size: 20px; color: black'>Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third party services that track this information on our behalf.</li>
</ul>
<p style = 'font-size: 20px; color: black'>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser's Help menu to learn the correct way to modify your cookies.</p>
<p style = 'font-size: 20px; color: black'>If you disable cookies off, some features will be disabled It will turn off some of the features that make your site experience more efficient and some of our services will not function properly.</p>

<p style = 'font-size: 20px; color: black'><strong>How can you opt out, remove or modify information you have provided to us?</strong></p>
<p style = 'font-size: 20px; color: black'>You can request to have your information removed by clicking on the Contact Us/Live Chat button on this or the home page.</p>
<p style = 'font-size: 20px; color: black'>Please note that we may maintain information about an individual sales transaction in order to complete that transaction and for record keeping purposes.</p>

<p style = 'font-size: 20px; color: black'><strong>Third Party Disclosures</strong></p>
<p style = 'font-size: 20px; color: black'>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety.</p>
<p style = 'font-size: 20px; color: black'>However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

<p style = 'font-size: 20px; color: black'><strong>Third party Links</strong></p>
<p style = 'font-size: 20px; color: black'>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>

<p style = 'font-size: 20px; color: black'><strong>Transfer Of Your Personal Information</strong></p>
<p style = 'font-size: 20px; color: black'>Your information, including personal information, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>
<p style = 'font-size: 20px; color: black'>We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your personal information will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

<p style = 'font-size: 20px; color: black'><strong>Disclosure Of Your Personal Information</strong></p>
<p style = 'font-size: 20px; color: black'>If we are involved in a merger, acquisition or asset sale, your personal information may be transferred. We will provide notice before your personal information is transferred and becomes subject to a different Privacy Policy.</p>
<p style = 'font-size: 20px; color: black'>Under certain circumstances, we may be required to disclose your personal information if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>

<p style = 'font-size: 20px; color: black'><strong>Retention of Your Personal Information</strong></p>    
<p style = 'font-size: 20px; color: black'>We will retain your personal information only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your information to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>

<p style = 'font-size: 20px; color: black'><strong>Information Regarding Your Data Protection Rights Under General Data Protection Regulation (GDPR)</strong></p>
<p style = 'font-size: 20px; color: black'>For the purpose of this Privacy Policy, we are a Data Controller of your personal information.</p>

<p style = 'font-size: 20px; color: black'>If you are from the European Economic Area (EEA), our legal basis for collecting and using your personal information, as described in this Privacy Policy, depends on the information we collect and the specific context in which we collect it. We may process your personal information because:</p>
<ul>
    <li style = 'font-size: 20px; color: black'>We need to perform a contract with you, such as when you create a Policy with us</li>
    <li style = 'font-size: 20px; color: black'>You have given us permission to do so</li>
    <li style = 'font-size: 20px; color: black'>The processing is in our legitimate interests and it's not overridden by your rights</li>
    <li style = 'font-size: 20px; color: black'>For payment processing purposes</li>
    <li style = 'font-size: 20px; color: black'>To comply with the law</li>
</ul>

<p style = 'font-size: 20px; color: black'>If you are a resident of the European Economic Area (EEA), you have certain data protection rights. In certain circumstances, you have the following data protection rights:</p>
<ul>
    <li style = 'font-size: 20px; color: black'>The right to access, update or to delete the personal information we have on you</li>
    <li style = 'font-size: 20px; color: black'>The right of rectification</li> 
    <li style = 'font-size: 20px; color: black'>The right to object</li>
    <li style = 'font-size: 20px; color: black'>The right of restriction</li>
    <li style = 'font-size: 20px; color: black'>The right to data portability</li>
    <li style = 'font-size: 20px; color: black'>The right to withdraw consent</li>
</ul>
<p style = 'font-size: 20px; color: black'>Please note that we may ask you to verify your identity before responding to such requests.</p>

<p style = 'font-size: 20px; color: black'>You have the right to complain to a Data Protection Authority about our collection and use of your personal information. For more information, please contact your local data protection authority in the European Economic Area (EEA).</p>

<p style = 'font-size: 20px; color: black'><strong>Service Providers</strong></p>
<p style = 'font-size: 20px; color: black'>We employ third party companies and individuals to facilitate our Website ("Service Providers"), to provide our Website on our behalf, to perform Website-related services or to assist us in analyzing how our Website is used. These third-parties have access to your personal information only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p> 
<ul>
    <li>
        <p style = 'font-size: 20px; color: black'><strong>Analytics</strong></p>
        <ul>
            <li>
                <p style = 'font-size: 20px; color: black'>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</p>
                <p style = 'font-size: 20px; color: black'>You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js, and dc.js) from sharing information with Google Analytics about visits activity.</p>
                <p style = 'font-size: 20px; color: black'>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page: <a href="http://www.google.com/intl/en/policies/privacy/">http://www.google.com/intl/en/policies/privacy/</a></p>
            </li>
        </ul>
    </li>
    <li>
        <p style = 'font-size: 20px; color: black'><strong>Payments processors</strong></p>
        <p style = 'font-size: 20px; color: black'>We provide paid products and/or services on our Website. In that case, we use third-party services for payment processing (e.g. payment processors).</p>
        <p style = 'font-size: 20px; color: black'>We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council.</p>
    </li>
</ul>              

<p style = 'font-size: 20px; color: black'><strong>Contacting Us</strong></p>
<p style = 'font-size: 20px; color: black'>If there are any questions regarding this privacy policy you may contact us.</p>

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