<?php
/**
 * Template Name: Search
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				get_template_part( 'template-parts/content', 'search' );
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
