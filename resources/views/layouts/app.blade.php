<!DOCTYPE html>
<html lang="en-US">
<!-- Nachd IT Company-->
<!-- https://www.nachd-it.com -->
<!-- web, mobile and desktop developement -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flamingo</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{URL::asset('css/font-linearicons.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{URL::asset('css/travel-setting.css')}}" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body class="transparent_home_page">
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-8 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i> (+216) 22 711 337</li>
									<li class="hidden-info">
										<i class="fa fa-map-marker"></i> Abdelhamed jguirim - Sayada 5035
									</li>
								</ul>
							</div>
						</aside>
						<aside id="travel_login_register_from-2" class="widget widget_login_form">
							<span class="show_from login"><i class="fa fa-user"></i>Login</span>

							<div class="form_popup from_login" tabindex="-1">
								<div class="inner-form">
									<div class="closeicon"></div>
									<h3>Login</h3>
									<form name="loginform" id="loginform" action="#" method="post">
										<p class="login-username">
											<label for="user_login">Username or Email Address</label>
											<input type="text" name="log" id="user_login" class="input" value="" size="20">
										</p>
										<p class="login-password">
											<label for="user_pass">Password</label>
											<input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
										</p>
										<p class="login-remember">
											<label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
										</p>
										<p class="login-submit">
											<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
											<input type="hidden" name="redirect_to" value="">
										</p>
									</form>
									<a href="#" title="Lost your password?" class="lost-pass">Lost your password?</a>
								</div>
							</div>
							<span class="register_btn">Register</span>
							<div class="form_popup from_register" tabindex="-1">
								<div class="inner-form">
									<div class="closeicon"></div>
									<h3>Register</h3>
									<form method="post" class="register">
										<p class="form-row">
											<label for="reg_username">Username <span class="required">*</span></label>
											<input type="text" class="input" name="username" id="reg_username" value="" autocomplete="off">
										</p>
										<p class="form-row">
											<label for="reg_email">Email address <span class="required">*</span></label>
											<input type="email" class="input" name="email" id="reg_email" value="">
										</p>
										<p class="form-row">
											<label for="reg_password">Password <span class="required">*</span></label>
											<input type="password" class="input" name="password" id="reg_password">
										</p>
										<div style="left: -999em; position: absolute;">
											<label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off">
										</div>
										<p class="form-row">
											<input type="submit" class="button" name="register" value="Register">
										</p>
									</form>
								</div>
							</div>
							<div class="background-overlay"></div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="/" title="Travel" rel="home">
						<img src="images/logo.png" alt="Logo" width="474" height="130" class="logo_transparent_static">
						<img src="images/logo_sticky.png" alt="Sticky logo" width="474" height="130" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li class="menu-item-has-children">
							<a href="tours">Tours</a>
						</li>

						<li><a href="news">News</a></li>

						<li class="menu-item-has-children">
							<a href="gallery">Gallery</a>
						</li>
						<li>
							<a href="contact">Contact</a>
						</li>
						<li class="menu-right">
							<ul>
								<li id="travel_social_widget-2" class="widget travel_search">
									<div class="search-toggler-unit">
										<div class="search-toggler">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="search-menu search-overlay search-hidden">
										<div class="closeicon"></div>
										<form method="get" class="search-form" action="http://html.physcode.com/travel/tours.html">
											<input type="search" class="search-field" placeholder="Search ..." value="" name="s" title="Search for:">
											<input type="submit" class="search-submit font-awesome" value="&#xf002;">
										</form>
										<div class="background-overlay"></div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	@yield('content')
	
	<div class="wrapper-footer wrapper-footer-newsletter">
		<div class="main-top-footer">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
						<div class="textwidget">
							<div class="footer-info">
								<p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis motincidunt ut laoreetd
								</p>
								<ul class="contact-info">
									<li><i class="fa fa-map-marker fa-fw"></i> 1945 Washington, San Francisco</li>
									<li><i class="fa fa-phone fa-fw"></i> +1 234 456 7890</li>
									<li>
										<i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com"> hello@siteinfo.com</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">Press Centre</a></li>
								<li><a href="#">Travel News</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">About us</a></li>
								<li><a href="#">Career</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Instagram</h3>
						<div class="textwidget">
							<ul>
								<li><img src="images/instagram/1.jpg" alt="instagram"></li>
								<li><img src="images/instagram/2.jpg" alt="instagram"></li>
								<li><img src="images/instagram/3.jpg" alt="instagram"></li>
								<li><img src="images/instagram/4.jpg" alt="instagram"></li>
								<li><img src="images/instagram/5.jpg" alt="instagram"></li>
								<li><img src="images/instagram/6.jpg" alt="instagram"></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="container wrapper-copyright">
			<div class="row">
				<div class="col-sm-6">
					<div><p>Copyright © 2017 Travel. All Rights Reserved.</p></div>
				</div>
				<div class="col-sm-6">
					<aside id="text-5" class="widget_text">
						<div class="textwidget">
							<ul class="footer_menu">
								<li><a href="#">Terms of Use</a></li>
								<li>|</li>
								<li><a href="#">Privacy Policy</a></li>
								<li>|</li>
								<li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
		<div class="subscribe_shadow"></div>
		<div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
				<div class="title_subtitle">To receive our best monthly deals</div>
				<h3 class="title_primary">JOIN THE NEWSLETTER</h3>
				<span class="line_after_title"></span>
			</div>
			<div class="form-subscribe-form-wrap">
				<aside class="mailchimp-container">
					<form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
						<div class="epm-form-field">
							<label for="epm-email">Email Address</label>
							<input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
						</div>


						<input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
					</form>
				</aside>
			</div>
		</div>
	</div>
</div>
<script type='text/javascript' src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('js/vendors.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.mb-comingsoon.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('js/theme.js')}}"></script>
</body>

</html>

        
