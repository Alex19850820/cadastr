<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cadastr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php bloginfo('template_url')?>/assets/images/favicon.ico" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php the_title();?></title>
	<?php wp_head(); ?>
	<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
		<a href="http://windows.microsoft.com/en-US/internet-explorer/">
			<img src="<?php bloginfo('template_url')?>/assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
		</a>
	</div>
</head>
<body <?php //body_class(); ?>>
<div class="page">
	<!-- Page Header-->
	<header class="section page-header" id="home">
		<!-- RD Navbar-->
		<div class="rd-navbar-wrap">
			<nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
				<div class="rd-navbar-main-outer">
					<div class="rd-navbar-main">
						<!-- RD Navbar Panel-->
						<div class="rd-navbar-panel">
							<!-- RD Navbar Toggle-->
							<button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1">
								<span></span>
							</button>
							<!-- RD Navbar Brand-->
							<a class="rd-navbar-brand" href="/">
								<img src="<?php bloginfo('template_url')?>/assets/images/logo-default-161x39.png" alt="" width="161" height="39" srcset="<?php bloginfo('template_url')?>/assets/images/logo-default-221x50.png 2x"/>
							</a>
						</div>
						<div class="rd-navbar-main-element">
							<div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
								<?php
									$args = [
										'theme_location'  => '',
										'menu'            => 'main-menu',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => '',
										'menu_id'         => false,
										'echo'            => true,
										'fallback_cb'     => '__return_empty_string',
										'before'          => false,
										'after'           => false,
										'link_before'     => false,
										'link_after'      => false,
										'items_wrap'      => '<ul class="rd-navbar-nav">%3$s</ul>',
										'depth'           => 0,
										'walker'          => false,
									];
								?>
								<?php
								wp_nav_menu($args);?>
<!--								<ul class="rd-navbar-nav">-->
<!--									<li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#about-us">About Us</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#services">Services</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#our-team">Our Team</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#career">Career</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#projects">Our Projects</a></li>-->
<!--									<li class="rd-nav-item"><a class="rd-nav-link" href="#testimonials">Testimonials</a></li>-->
<!--								</ul>-->
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- Slider-->