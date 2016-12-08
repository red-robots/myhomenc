<?php
/**
 * Template part for displaying index.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "template-index" ); ?>>
	<section class="row-1">
		<?php $slides = get_field( "slides" );
		if ( $slides ):?>
			<div id="slider" class="clear-bottom">
				<ul class="slides">
					<?php foreach ( $slides as $slide ):
						if ( $slide['image'] ):?>
							<li>
								<img src="<?php echo $slide['image']['url']; ?>"
								     alt="<?php echo $slide['image']['alt'] ?>">
								<?php if ( $slide['title'] || $slide['copy'] ): ?>
									<div class="info">
										<?php if ( $slide['title'] ): ?>
											<header>
												<div class="wrapper">
													<h2><?php echo $slide['title']; ?></h2>
												</div><!--.wrapper-->
											</header>
										<?php endif; ?>
										<?php if ( $slide['copy'] ): ?>
											<div class="copy">
												<?php echo $slide['copy']; ?>
											</div><!--.copy-->
										<?php endif; ?>
									</div><!--.info-->
								<?php endif; ?>
							</li>
						<?php endif;
					endforeach; ?>
				</ul>
			</div><!--#slider-->
			<nav id="carousel">
				<ul class="slides">
					<?php foreach ( $slides as $slide ): ?>
						<?php if ( $slide['title'] ): ?>
							<li class="slide">
								<div class="wrapper">
									<span><?php echo $slide['title']; ?></span>
								</div><!--.wrapper-->
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</nav><!--#carousel-->
		<?php endif; ?>
	</section><!--.row-1-->
	<div class="row-2">
		<?php $page_title = get_field( "page_title" );
		$page_copy        = get_field( "page_copy" );
		$logos            = get_field( "logos" );
		if ( $page_copy || $page_title ):?>
			<section class="row-1">
				<?php if ( $page_title ): ?>
					<header><h1><?php echo $page_title; ?></h1></header>
				<?php endif; ?>
				<?php if ( $page_copy ): ?>
					<div class="copy">
						<?php echo $page_copy; ?>
					</div>
				<?php endif; ?>
			</section><!--.row-1-->
		<?php endif; ?>
	</div><!--.row-2-->
	<?php if ( $logos ): ?>
		<section class="row-3">
			<?php foreach ( $logos as $logo ): ?>
				<?php if ( $logo['image'] ): ?>
					<div class="logo" style="background-image:url(<?php echo $logo['image']['url']; ?>);">
						<?php if ( $logo['link'] ): ?>
						<a href="<?php echo $logo['link']; ?>">
							<?php endif; ?>
							<img src="<?php echo $logo['image']['url']; ?>" alt="<?php echo $logo['image']['alt'] ?>">
							<?php if ( $logo['link'] ): ?>
						</a>
					<?php endif; ?>
					</div><!--.logo-->
				<?php endif; ?>
			<?php endforeach; ?>
		</section><!--.row-3-->
	<?php endif; ?>
	<div class="row-4 clear-bottom">
		<?php $image   = get_field( "image_box_1" );
		$title         = get_field( "title_box_1" );
		$copy          = get_field( "copy_box_1" );
		$link          = get_field( "link_box_1" );
		$link_type     = get_field( "link_type_box_1" );
		$internal_link = get_field( "internal_link_box_1" );
		$external_link = get_field( "external_link_box_1" );
		$video         = get_field( "video_box_1" );
		$link_text     = get_field( "link_text_box_1" );
		$internal = null; ?>
		<?php if ( $image ): ?>
			<section class="column-1 js-blocks">
				<?php if ( strcmp( $link, "yes" ) === 0 ):
				switch ( $link_type ):
				case "internal":
				$internal = $internal_link; ?>
				<a href="<?php echo get_the_permalink($internal->ID);?>">
					<?php break;
					case "external": ?>
					<a href="<?php echo $external_link; ?>">
						<?php break;
						case "video": ?>
						<a class="colorbox-video" href="<?php echo $video; ?>">
							<?php break;
							endswitch;
							?>
							<?php endif; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<?php if ( $title || $copy || $link_text || $internal ): ?>
								<div class="info">
									<?php if ( $title ): ?>
										<header>
											<h2><?php echo $title; ?></h2>
										</header>
									<?php endif; ?>
									<?php if ( $copy || $interal ):
										if ( $internal ):
											$copy = $internal->post_title;
										endif; ?>
										<div class="copy"><?php echo $copy; ?></div><!--.copy-->
									<?php endif; ?>
									<?php if ( $link_text ): ?>
										<div class="link"><?php echo $link_text; ?></div><!--.link-->
									<?php endif; ?>
								</div><!--.info-->
							<?php endif; ?>
							<?php if ( strcmp( $link, "yes" ) === 0 ):
							switch ( $link_type ):
							case "internal": ?>
						</a>
					<?php break;
					case "external": ?>
					</a>
				<?php break;
				case "video": ?>
				</a>
			<?php break;
			endswitch;
			?>
			<?php endif; ?>
			</section><!--.column-1-->
		<?php endif; ?>
		<?php $image   = get_field( "image_box_2" );
		$title         = get_field( "title_box_2" );
		$copy          = get_field( "copy_box_2" );
		$link          = get_field( "link_box_2" );
		$link_type     = get_field( "link_type_box_2" );
		$internal_link = get_field( "internal_link_box_2" );
		$external_link = get_field( "external_link_box_2" );
		$video         = get_field( "video_box_2" );
		$link_text     = get_field( "link_text_box_2" );
		$internal = null;?>
		<?php if ( $image ):?>
			<section class="column-2 js-blocks">
				<?php if ( strcmp( $link, "yes" ) === 0 ):
				switch ( $link_type ):
				case "internal":
				$internal = $internal_link;?>
				<a href="<?php echo get_the_permalink($internal->ID); ?>">
					<?php break;
					case "external": ?>
					<a href="<?php echo $external_link; ?>">
						<?php break;
						case "video": ?>
						<a class="colorbox-video" href="<?php echo $video; ?>">
							<?php break;
							endswitch;
							?>
							<?php endif; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<?php if ( $title || $copy || $link_text || $internal ): ?>
								<div class="info">
									<?php if ( $title ): ?>
										<header>
											<h2><?php echo $title; ?></h2>
										</header>
									<?php endif; ?>
									<?php if ( $copy || $internal ):
										if ( $internal ):
											$copy = $internal->post_title;
										endif; ?>
										<div class="copy"><?php echo $copy; ?></div><!--.copy-->
									<?php endif; ?>
									<?php if ( $link_text ): ?>
										<div class="link"><?php echo $link_text; ?></div><!--.link-->
									<?php endif; ?>
								</div><!--.info-->
							<?php endif; ?>
							<?php if ( strcmp( $link, "yes" ) === 0 ):
							switch ( $link_type ):
							case "internal": ?>
						</a>
					<?php break;
					case "external": ?>
					</a>
				<?php break;
				case "video": ?>
				</a>
			<?php break;
			endswitch;
			?>
			<?php endif; ?>
			</section><!--.column-2-->
		<?php endif; ?>
		<?php $image   = get_field( "image_box_3" );
		$title         = get_field( "title_box_3" );
		$copy          = get_field( "copy_box_3" );
		$link          = get_field( "link_box_3" );
		$link_type     = get_field( "link_type_box_3" );
		$internal_link = get_field( "internal_link_box_3" );
		$external_link = get_field( "external_link_box_3" );
		$video         = get_field( "video_box_3" );
		$link_text     = get_field( "link_text_box_3" );
		$internal = null;?>
		<?php if ( $image ): ?>
			<section class="column-3 js-blocks">
				<?php if ( strcmp( $link, "yes" ) === 0 ):
				switch ( $link_type ):
				case "internal":
				$internal = $internal_link; ?>
				<a href="<?php echo get_the_permalink($internal->ID); ?>">
					<?php break;
					case "external": ?>
					<a href="<?php echo $external_link; ?>">
						<?php break;
						case "video": ?>
						<a class="colorbox-video" href="<?php echo $video; ?>">
							<?php break;
							endswitch;
							?>
							<?php endif; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<?php if ( $title || $copy || $link_text || $internal ): ?>
								<div class="info">
									<?php if ( $title ): ?>
										<header>
											<h2><?php echo $title; ?></h2>
										</header>
									<?php endif; ?>
									<?php if ( $copy || $internal ):
										if ( $internal ):
											$copy = $internal->post_title;
										endif; ?>
										<div class="copy"><?php echo $copy; ?></div><!--.copy-->
									<?php endif; ?>
									<?php if ( $link_text ): ?>
										<div class="link"><?php echo $link_text; ?></div><!--.link-->
									<?php endif; ?>
								</div><!--.info-->
							<?php endif; ?>
							<?php if ( strcmp( $link, "yes" ) === 0 ):
							switch ( $link_type ):
							case "internal": ?>
						</a>
					<?php break;
					case "external": ?>
					</a>
				<?php break;
				case "video": ?>
				</a>
			<?php break;
			endswitch;
			?>
			<?php endif; ?>
			</section><!--.column-3-->
		<?php endif; ?>
	</div><!--.row-4-->
</article><!-- #post-## -->
