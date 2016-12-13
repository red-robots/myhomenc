<?php
/**
 * Template part for displaying page content in page-contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "template-contact" ); ?> style="
	<?php echo "background-image: url(" . get_template_directory_uri() . "/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
	<div class="row-2">
		<section class="column-1 copy">
			<?php the_content(); ?>
		</section><!--.column-1-->
		<section class="column-2">
			<div class="wrapper">
				<?php $email_tag = get_field( "email_tag" );
				$phone_tag       = get_field( "phone_tag" );
				$view_agents_tag = get_field( "view_agents_tag" );
				$directions_tag = get_field( "directions_tag" );
				$email_tag       = $email_tag ? $email_tag . " " : "";
				$phone_tag       = $phone_tag ? $phone_tag . " " : "";
				$view_agents_tag = $view_agents_tag ? $view_agents_tag : "";
				$directions_tag = $directions_tag ? $directions_tag : ""; ?>
				<div class="row-1">
					<?php $title = get_field( "mm_title" );
					$image       = get_field( "mm_image" );
					$email       = get_field( "mm_email" );
					$address     = get_field( "mm_address" );
					$directions  = get_field( "mm_directions" );
					$phone       = get_field( "mm_phone" );
					$link        = get_field( "mm_link" ); ?>
					<?php if ( $title ): ?>
						<?php if ( $image ): ?>
							<div class="column-1" style="background-image: url(<?php echo $image['url']; ?>);">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div><!--.column-1-->
						<?php else: ?>
							<div class="column-1">
							</div><!--.column-1-->
						<?php endif; ?>
						<div class="column-2">
							<div class="wrapper">
								<h2><?php echo $title; ?></h2>
								<?php if ( $address ): ?>
									<div class="address">
										<?php echo $address; ?>
									</div><!--.address-->
								<?php endif; ?>
								<?php if ( $directions ): ?>
									<div class="directions">
										<a href="<?php echo $directions; ?>"><?php echo $directions_tag; ?></a>
									</div><!--.directions-->
								<?php endif; ?>
								<?php if ( $email ): ?>
									<div class="email">
										<?php echo $email_tag . '<a href="mailto:' . $email . '">' . $email . '</a>'; ?>
									</div><!--.email-->
								<?php endif; ?>
								<?php if ( $phone ): ?>
									<div class="phone">
										<?php echo $phone_tag . $phone; ?>
									</div><!--.phone-->
								<?php endif; ?>
							</div><!--.wrapper-->
							<?php if ( $link ): ?>
								<div class="link">
									<a href="<?php echo $link; ?>"><?php echo $view_agents_tag; ?></a>
								</div><!--.link-->
							<?php endif; ?>
						</div><!--.column-2-->
					<?php endif; ?>
				</div><!--.row-1-->
				<div class="row-2">
					<?php $title = get_field( "mth_title" );
					$image       = get_field( "mth_image" );
					$email       = get_field( "mth_email" );
					$address     = get_field( "mth_address" );
					$directions  = get_field( "mth_directions" );
					$phone       = get_field( "mth_phone" );
					$link        = get_field( "mth_link" ); ?>
					<?php if ( $title ): ?>
						<?php if ( $image ): ?>
							<div class="column-1" style="background-image: url(<?php echo $image['url']; ?>);">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div><!--.column-1-->
						<?php else: ?>
							<div class="column-1">
							</div><!--.column-1-->
						<?php endif; ?>
						<div class="column-2">
							<div class="wrapper">
								<h2><?php echo $title; ?></h2>
								<?php if ( $address ): ?>
									<div class="address">
										<?php echo $address; ?>
									</div><!--.address-->
								<?php endif; ?>
								<?php if ( $directions ): ?>
									<div class="directions">
										<a href="<?php echo $directions; ?>"><?php echo $directions_tag; ?></a>
									</div><!--.directions-->
								<?php endif; ?>
								<?php if ( $email ): ?>
									<div class="email">
										<?php echo $email_tag . '<a href="mailto:' . $email . '">' . $email . '</a>'; ?>
									</div><!--.email-->
								<?php endif; ?>
								<?php if ( $phone ): ?>
									<div class="phone">
										<?php echo $phone_tag . $phone; ?>
									</div><!--.phone-->
								<?php endif; ?>
							</div><!--.wrapper-->
							<?php if ( $link ): ?>
								<div class="link">
									<a href="<?php echo $link; ?>"><?php echo $view_agents_tag; ?></a>
								</div><!--.link-->
							<?php endif; ?>
						</div><!--.column-2-->
					<?php endif; ?>
				</div><!--.row-2-->
				<div class="row-3">
					<?php $title = get_field( "mhl_title" );
					$image       = get_field( "mhl_image" );
					$email       = get_field( "mhl_email" );
					$address     = get_field( "mhl_address" );
					$directions  = get_field( "mhl_directions" );
					$phone       = get_field( "mhl_phone" );
					$link        = get_field( "mhl_link" ); ?>
					<?php if ( $title ): ?>
						<?php if ( $image ): ?>
							<div class="column-1" style="background-image: url(<?php echo $image['url']; ?>);">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div><!--.column-1-->
						<?php else: ?>
							<div class="column-1">
							</div><!--.column-1-->
						<?php endif; ?>
						<div class="column-2">
							<div class="wrapper">
								<h2><?php echo $title; ?></h2>
								<?php if ( $address ): ?>
									<div class="address">
										<?php echo $address; ?>
									</div><!--.address-->
								<?php endif; ?>
								<?php if ( $directions ): ?>
									<div class="directions">
										<a href="<?php echo $directions; ?>"><?php echo $directions_tag; ?></a>
									</div><!--.directions-->
								<?php endif; ?>
								<?php if ( $email ): ?>
									<div class="email">
										<?php echo $email_tag . '<a href="mailto:' . $email . '">' . $email . '</a>'; ?>
									</div><!--.email-->
								<?php endif; ?>
								<?php if ( $phone ): ?>
									<div class="phone">
										<?php echo $phone_tag . $phone; ?>
									</div><!--.phone-->
								<?php endif; ?>
							</div><!--.wrapper-->
							<?php if ( $link ): ?>
								<div class="link">
									<a href="<?php echo $link; ?>"><?php echo $view_agents_tag; ?></a>
								</div><!--.link-->
							<?php endif; ?>
						</div><!--.column-2-->
					<?php endif; ?>
				</div><!--.row-3-->
			</div><!--.wrapper-->
		</section><!--.column-2-->
	</div><!--.row-2-->
</article><!-- #post-## -->
