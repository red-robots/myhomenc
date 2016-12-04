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
		$args = array('post_type'=>'post',"posts_per_page"=>8,"paged"=>$paged,"order"=>"DESC");
		$query = new WP_Query($args);
		if($query->have_posts()):?>
			<div class="wrapper">
				<?php while($query->have_posts()):$query->the_post();
					$iamge = get_field("image");
					$title = get_field("title");
					$phone = get_field("phone");
					$email = get_field("email"); ?>
					<div class="leader js-blocks">
						<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
						<div class="info">
							<h3><?php echo the_title();?></h3>
							<?php if($title):?>
								<div class="title"><?php echo $title;?></div><!--.title-->
							<?php endif;?>
							<?php if($phone):?>
								<div class="phone"><?php echo $phone;?></div><!--.phone-->
							<?php endif;?>
							<?php if($email):?>
								<div class="email">
									<a href="<?php echo $email;?>" target="_blank">
										<i class="fa fa-envelope"></i>
									</a>
								</div><!--.title-->
							<?php endif;?>
						</div><!--.info-->
					</div><!--.leader-->
				<?php endwhile;?>
			</div><!--.wrapper-->
			<nav class="pagination">
				<?php pagi_posts_nav($query);?>
			</nav>
		<?php wp_reset_postdata();
		endif;?>
	</div><!--.row-2-->
</article><!-- #post-## -->
