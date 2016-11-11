<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avantime
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="site">
	<header id="header" class="site-header" role="banner">
		<div class="site-branding">
		<div class="container">
	        <div class="toggle-holder">
	          <a href="#" class="nav-opener"></a>
	        </div>
	        <!-- logo of the page -->
	        <?php avantime_content_logo();?>

	        <!-- navigation menu -->
	        <?php avantime_content_header_menu();?>
		</div>

		<div class="header-item">
			<!-- search button  -->
			<?php avantime_content_header_search();?>
	        
	        <!-- hold button  -->
			<?php avantime_content_header_hold();?>
	     </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
