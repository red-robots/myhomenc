<?php
/*
 * Template part for displaying page content in page-news.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-news"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
	<div class="row-2">
		<?php $paged= $paged === 0?1:$paged;
		$args = array('post_type'=>'post',"posts_per_page"=>6,"paged"=>$paged,"order"=>"DESC");
		$query = new WP_Query($args);
		if($query->have_posts()):
			$count=0;?>
			<div class="wrapper clear-bottom">
				<?php while($query->have_posts()):$query->the_post();?>
					<?php $image = get_field("image");
					if($image):?>
						<div class="news js-blocks count-<?php echo $count%3;?>">
							<a href="<?php echo get_the_permalink();?>">
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
								<header>
									<h2><?php the_title();?></h2>
								</header>
							</a>
						</div><!--.news-->
						<?php $count++;
					endif;?>
				<?php endwhile;?>
			</div><!--.wrapper-->
			<nav class="pagination clear-bottom">
				<?php pagi_posts_nav($query);?>
			</nav>
		<?php wp_reset_postdata();
		endif;?>
	</div><!--.row-2-->
</article><!-- #post-## -->
