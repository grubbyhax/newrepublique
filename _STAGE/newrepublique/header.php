<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<title>New Republique Test</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<?php wp_head(); ?>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
<a href="#" class="brand-logo"><img id="logo_big" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO_TextOnly.png"></a>
<a href="#" data-target="nav-mobile" data-activates="nav-mobile" class="sidenav-trigger"><img id="menu_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu_icon.png"></a>

			<ul id="nav-mobile" class="right side-nav primay_nav">
<li><a href="index.html">About Us</a></li>
<li><a href="index.html">Work</a></li>
<li><a href="index.html">Services</a></li>
<li><a href="index.html">Blog</a></li>
<li><a href="index.html">Research</a></li>
<li><a href="index.html">Careers</a></li>
<li><a href="index.html">Contact Us</a></li>
			</ul>

		</div>
	</nav>

	<div id="main" class="row">
		<div id="sidebar" class="">
<img id="logo_big" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO_Big_RGB.png">
			<div id="menu">
				<ul id="nav-desktop" class="primay_nav">
<li><a href="index.html">About Us<span rel="About Us"></span></a></li>
<li><a href="index.html">Work<span rel="Work"></span></a></li>
<li><a href="index.html">Services<span rel="Services">Services</span></a></li>
<li><a href="index.html">Blog<span rel="Blog"></span></a></li>
<li><a href="index.html">Research<span rel="Research">Research</span></a></li>
<li><a href="index.html">Careers<span rel="Careers"></span></a></li>
<li><a href="index.html">Contact Us<span rel="Contact Us"></span></a></li>
				</ul>
			</div>

		</div>