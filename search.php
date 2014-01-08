<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/superfish.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css3/forms.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.hoverIntent.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/script.js"></script>
    <script src="search/search.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
	<div class="container_12">
		<div class="grid_12">
			<!--======================== header ============================-->
			<header>
				<div class="wrapper indent-bottom">
					<!--======================== logo ============================-->
					<h1>
						<a href="index.html">Smartgroup</a>
					</h1>
					<ul class="secondary-menu">
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Support</a></li>
						<li class="last-item">
							<span>Search</span> 
							<!--=================== search form =====================-->
							<form id="search" action="search.php" method="GET" accept-charset="utf-8">
								<fieldset>
									<label class="keywords">
										<input type="text" name="s" />
									</label>
									<a onClick="document.getElementById('search').submit()"></a>
								</fieldset>
							</form>
						</li>
					</ul>
				</div>
				<!--======================== menu ============================-->
				<nav>
					<ul class="menu responsive-menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="about-entrust.html">Services</a>
							<ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
								<li><a href="#">Consectetuer</a>
									<ul>
										<li><a href="#">Praesent vestibulum</a></li>
										<li><a href="#">Molestie lacus</a></li>
										<li class="last-item"><a href="#">Lorem ipsum dolor</a></li>
									</ul>
								</li>
								<li class="last-item"><a href="#">Adipiscing elit</a></li>
							</ul>
						</li>
						<li><a href="index-2.html">Resources</a></li>
						<li><a href="index-3.html">Partners</a></li>
						<li><a href="index-4.html">About</a></li>
						<li class="last-item"><a href="contact-entrust-manufacturing-technologies.html">Contacts</a></li>
					</ul>
					<div class="clear"></div>
				</nav>
				<div class="clear"></div>
			</header>
			<!--======================== content ===========================-->
			<section id="content">
				<div class="indent-left4 indent-right4">
          <h3>Search result:</h3>
          <div id="search-results"></div>
				</div>
			</section>
			<!--======================== aside ============================-->
			<aside>
				<div class="wrapper">
					<div class="grid_3 alpha">
						<h5 class="p3">Quick links</h5>
						<ul class="list-1">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">consectetuer adipiscing</a></li>
              <li class="last-item"><a href="#">Praesent vestibulum</a></li>
						</ul>
					</div>
					<div class="grid_6">
						<div class="indent-right6">
							<h5 class="p3">About</h5>
							Lorem ipsum dolor sit amet, consec tetuer adipiscin elit. Praesent ves tibu lum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus hasellus portaus suscipit varius mi. Cum sociis natoque penatibus 
						</div>
					</div>
					<div class="grid_3 omega">
						<h5 class="p4">Follow</h5>
						<div class="wrapper">
							<ul class="social-icons">
								<li><a href="#" class="icon-1">RSS</a></li>
								<li class="last-item"><a href="#" class="icon-2">Twitter</a></li>
							</ul>
							<ul class="social-icons last-item">
								<li><a href="#" class="icon-3">Linkedin</a></li>
								<li class="last-item"><a href="#" class="icon-4">Facebook</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<!--======================== footer ============================-->
			<footer>
				<div class="footer-text">James Smith&nbsp;&nbsp;© 2013&nbsp;&nbsp;<a href="index-6.html">Privacy Policy</a></div>
			</footer>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>