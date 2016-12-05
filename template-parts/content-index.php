<?php
/**
 * Template part for displaying index.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
	<section class="row-1">
		<?php $slides = get_field("slides");
		if($slides):?>
			<div id="slider" class="clear-bottom">
				<ul class="slides">
					<?php foreach($slides as $slide):
						if($slide['image']):?>
						<li>
							<img src="<?php echo $slide['image']['url'];?>" alt="<?php echo $slide['image']['alt']?>">
							<?php if($slide['title']||$slide['copy']):?>
								<div class="info">
									<?php if($slide['title']):?>
										<header>
											<div class="wrapper">
												<h2><?php echo $slide['title'];?></h2>
											</div><!--.wrapper-->
										</header>
									<?php endif;?>
									<?php if($slide['copy']):?>
										<div class="copy">
											<?php echo $slide['copy'];?>
										</div><!--.copy-->
									<?php endif;?>
								</div><!--.info-->
							<?php endif;?>
						</li>
					<?php endif;
					endforeach;?>
				</ul>
			</div><!--#slider-->
			<nav id="carousel">
				<ul class="slides">
					<?php foreach($slides as $slide):?>
						<?php if($slide['title']):?>
							<li class="slide">
								<div class="wrapper">
									<span><?php echo $slide['title'];?></span>
								</div><!--.wrapper-->
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ul>
			</nav><!--#carousel-->
		<?php endif;?>
	</section><!--.row-1-->
	<div class="row-2 clear-bottom">
		<?php $page_title = get_field("page_title");
		$page_copy = get_field("page_copy");
		$logos = get_field("logos");
		if($page_copy||$page_title):?>
			<section class="row-1">
				<?php if($page_title):?>
					<header><h1><?php echo $page_title;?></h1></header>
				<?php endif;?>
				<?php if($page_copy):?>
					<div class="copy">
						<?php echo $page_copy;?>
					</div>
				<?php endif;?>
			</section><!--.row-1-->
		<?php endif;?>
		<?php if($logos):?>
			<section class="row-2">
				<?php foreach($logos as $logo):?>
					<?php if($logo['image']):?>
						<div class="logo">
							<?php if($logo['link']):?>
								<a href="<?php echo $logo['link'];?>">
							<?php endif;?>
							<img src="<?php echo $logo['image']['url'];?>" alt="<?php echo $logo['image']['alt']?>">
							<?php if($logo['link']):?>
								</a>
							<?php endif;?>
						</div><!--.logo-->
					<?php endif;?>
				<?php endforeach;?>
			</section><!--.row-2-->
		<?php endif;?>
	</div><!--.row-2-->
	<div class="row-3 clear-bottom">
		<?php $image_boxes = get_field("image_boxes");
		for($i = 0;$i<count($image_boxes)&&count($image_boxes)>2&&$i<3;$i++):?>
			<?php if($image_boxes[$i]['image']):?>
				<section class="column-<?php echo ($i+1);?>">
					<?php if($image_boxes[$i]['video_link']):?>
						<a class="colorbox-video" href="<?php echo $image_boxes[$i]['video_link'];?>">
					<?php else:
						if($image_boxes[$i]['link']):?>
							<a href="<?php echo $image_boxes[$i]['link'];?>">
						<?php endif;
					endif;?>
					<img src="<?php echo $image_boxes[$i]['image']['url'];?>" alt="<?php echo $image_boxes[$i]['image']['alt'];?>">
					<?php if($image_boxes[$i]['title']||$image_boxes[$i]['copy']||$image_boxes[$i]['link_text']):?>
						<div class="info">
							<?php if($image_boxes[$i]['title']):?>
								<header>
									<h2><?php echo $image_boxes[$i]['title'];?></h2>
								</header>
							<?php endif;?>
							<?php if($image_boxes[$i]['copy']):?>
								<div class="copy"><?php echo $image_boxes[$i]['copy'];?></div><!--.copy-->
							<?php endif;?>
							<?php if($image_boxes[$i]['link_text']):?>
								<div class="link"><?php echo $image_boxes[$i]['link_text'];?></div><!--.link-->
							<?php endif;?>
						</div><!--.info-->
					<?php endif;?>
					<?php if($image_boxes[$i]['link']||$image_boxes[$i]['video_link']):?>
						</a>
					<?php endif;?>
				</section><!--.column-#-->
			<?php endif;?>
		<?php endfor;?>
	</div><!--.row-3-->
</article><!-- #post-## -->
