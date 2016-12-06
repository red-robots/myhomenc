<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-news-single"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
	<section class="row-2 clear-bottom">
		<div class="column-1 copy">
			<?php the_content();?>
		</div><!--.column-1-->
		<div class="column-2">
			<?php $post = get_post(18);
			setup_postdata($post);
			$recent_posts_header = get_field("recent_posts_header");
			if($recent_posts_header):?>
				<header>
					<div class="wrapper">
						<h2><?php echo $recent_posts_header;?></h2>
					</div><!--.wrapper-->
				</header>
			<?php endif;
			wp_reset_postdata();?>
			<?php $args = array('post_type'=>'post',"posts_per_page"=>3,"paged"=>$paged,"order"=>"DESC");
			$query = new WP_Query($args);
			if($query->have_posts()):?>
				<?php while($query->have_posts()):$query->the_post();?>
					<?php $image = get_field("image");
					if($image):?>
						<div class="news">
							<a href="<?php echo get_the_permalink();?>">
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
								<header>
									<h2><?php the_title();?></h2>
								</header>
							</a>
						</div><!--.news-->
					<?php endif;?>
				<?php endwhile;?>
				<?php wp_reset_postdata();
			endif;?>
		</div><!--.column-2-->
	</section><!--.row-2-->
</article><!-- #post-## -->
