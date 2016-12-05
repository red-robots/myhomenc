<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			
			<?php if(is_home()) { ?>
	            <div class="column-1 logo">
	                <h1>
		                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" alt="logo"></a>
					</h1>
		            <div class="hamburger">
			            <img src="<?php echo get_template_directory_uri()."/images/hamburger.jpg"; ?>" alt="hamburger">
		            </div><!--.hamburger-->
	            </div>
	        <?php } else { ?>
	            <div class="column-1 logo">
	                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" alt="logo"></a>
		            <div class="hamburger">
			            <img src="<?php echo get_template_directory_uri()."/images/hamburger.jpg"; ?>" alt="hamburger">
		            </div><!--.hamburger-->
	            </div>
	        <?php } ?>
			<div class="column-2">
				<div class="row-1">
					<?php $facebook_link = get_field("facebook_link","option");
					$youtube_link = get_field("youtube_link","option");?>
					<?php if($facebook_link): ?>
						<div class="blue-box">
							<a href="<?php echo $facebook_link;?>"><i class="fa fa-facebook"></i></a>
						</div>
					<?php endif;?>
					<?php if($youtube_link):?>
						<div class="blue-box">
							<a href="<?php echo $youtube_link;?>"><i class="fa fa-youtube"></i></a>
						</div>
					<?php endif;?>
					<?php get_search_form();?>
				</div><!--.row-1-->
				<nav id="site-navigation" class="row-2 main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav><!-- #site-navigation .row-2 -->
			</div><!--.column-2-->
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
