<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-careers"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .row-1 -->
    <section class="row-2">

    </section><!--.row-2-->
	<?php if(get_the_content()):?>
		<section class="row-3 copy">
			<?php the_content();?>
		</section><!--.row-2-->
	<?php endif;?>
</article><!-- #post-## -->
