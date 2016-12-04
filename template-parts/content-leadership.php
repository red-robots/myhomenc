<?php
/**
 * Template part for displaying page content in page-leadership.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-leadership"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
	<div class="row-2">
		<?php $team_header = get_field("team_header");
		if($team_header):?>
			<header>
				<h2><?php echo $team_header;?></h2>
			</header>
		<?php endif;?>
		<?php $paged= $paged === 0?1:$paged;
		$args = array('post_type'=>'leadership',"posts_per_page"=>8,"paged"=>$paged,"order"=>"DESC");
		$query = new WP_Query($args);
		if($query->have_posts()):?>
			<div class="wrapper">
				<?php while($query->have_posts()):$query->the_post();
					$image = get_field("image");
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
	<div class="row-3">
		<?php $agencies_header = get_field("agencies_header");
		$agencies_gallery = get_field("agencies_gallery");
		if($agencies_header):?>
			<header>
				<h2><?php echo $agencies_header;?></h2>
			</header>
		<?php endif;?>
		<?php if($agencies_gallery):?>
			<div class="wrapper">
				<?php foreach($agencies_gallery as $agency):
					if($agency['image']):?>
						<div class="agency">
							<?php if($agency['link']):?>
								<a href="<?php echo $agency['link'];?>" target="_blank">
							<?php endif;?>
								<img src="<?php echo $agency['image']['url'];?>" alt="<?php echo $agency['image']['alt'];?>">
							<?php if($agency['link']):?>
								</a>
							<?php endif;?>
						</div><!--.agency-->
					<?php endif;?>
				<?php endforeach;?>
			</div><!--.wrapper-->
		<?php endif;?>
	</div><!--.row-3-->
</article><!-- #post-## -->
