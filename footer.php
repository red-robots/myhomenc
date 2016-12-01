<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrapper">
		<div class="row-1">
			<div class="column-1">
				<?php $south_end_title = get_field("south_end_title","option");
				$south_end_address = get_field("south_end_address","option");
				$uptown_title = get_field("uptown_title","option");
				$uptown_address = get_field("uptown_address","option");
				$elizabeth_title = get_field("elizabeth_title","option");
				$elizabeth_address = get_field("elizabeth_address","option");?>
				<?php if($south_end_address&&$south_end_title):?>
				<div class="row-1">
					<div class="office-title">
						<?php echo $south_end_title;?>
					</div>
					<div class="office-address">
						<?php echo $south_end_address;?>
					</div>
				</div><!--.row-1-->
				<?php endif;
				if($uptown_address&&$uptown_title):?>
				<div class="row-2">
					<div class="office-title">
						<?php echo $uptown_title;?>
					</div>
					<div class="office-address">
						<?php echo $uptown_address;?>
					</div>
				</div><!--.row-2-->
				<?php endif;
				if($elizabeth_address&&$elizabeth_title):?>
				<div class="row-3">
					<div class="office-title">
						<?php echo $elizabeth_title;?>
					</div>
					<div class="office-address">
						<?php echo $elizabeth_address;?>
					</div>
				</div><!--.row-3-->
				<?php endif;?>
			</div><!-- .column-1 -->
			<div class="column-2">
				<?php $newsletter_signup_link = get_field("newsletter_signup_link","option");
				$newsletter_signup_text = get_field("newsletter_signup_text","option");
				if($newsletter_signup_link):?>
					<div class="newsletter-signup">
						<a href="<?php echo $newsletter_signup_link;?>">
							<?php echo $newsletter_signup_text;?>
						</a>
					</div><!--.newsletter-signup-->
				<?php endif;?>
			</div><!-- .column-2 -->
			<div class="column-3">
				<div class="row-1">
					<?php $facebook_link = get_field( "facebook_link", "option" );
					$youtube_link        = get_field( "youtube_link", "option" ); ?>
					<?php if ( $facebook_link ): ?>
						<div class="blue-circle">
							<a href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook"></i></a>
						</div>
					<?php endif; ?>
					<?php if ( $youtube_link ): ?>
						<div class="blue-circle">
							<a href="<?php echo $youtube_link; ?>"><i class="fa fa-youtube"></i></a>
						</div>
					<?php endif; ?>
				</div><!--.row-1-->
				<div class="row-2">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
				</div><!--.row-2-->
			</div><!-- .column-3 -->
		</div><!--.row-1-->
		<div class="row-2">
			<?php wp_nav_menu( array( 'theme_location' => 'sitemapbw' ) ); ?>
		</div><!--.row-2-->
	</div><!-- wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
