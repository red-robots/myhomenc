<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
	<?php if(get_the_content()):?>
		<section class="row-2 copy">
			<?php the_content();?>
			<nav class="sitemap">
				<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
			</nav>
		</section><!--.row-2-->
	<?php endif;?>
</article><!-- #post-## -->
