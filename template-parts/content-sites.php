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
	<section class="row-2">
		<?php if(get_the_content()):?>
			<div class="copy column-1">
				<?php the_content();?>
			</div><!--.copy-->
		<?php endif;?>
		<?php $link = get_field("link");
		$link_text = get_field("link_text");
		if($link_text&&$link):?>
			<div class="column-2">
				<a href="<?php echo $link;?>" target="_blank">
					<?php echo $link_text;?>
				</a>
			</div><!--.column-2-->
		<?php endif;?>
	</section><!--.row-2-->
	<?php $logo = get_field("logo");
	if($logo):?>
		<div class="row-3">
			<img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">
		</div><!--.row-3-->
	<?php endif;?>
</article><!-- #post-## -->
