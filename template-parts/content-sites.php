<?php
/**
 * Template part for displaying page content in page-sites.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sites"); ?>>
	<header class="row-1">
		<h1><?php the_title( ); ?></h1>
	</header><!-- .entry-header -->
	<div class="row-2">
		<?php if(get_the_content()):?>
			<div class="copy column-1">
				<?php the_content();?>
			</div><!--.copy-->
		<?php endif;?>
	</div><!--.row-2-->
	<div class="row-3">

	</div><!--.row-3-->
</article><!-- #post-## -->
