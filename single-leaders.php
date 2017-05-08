<?php
/**
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php global $wp_query;
			$query = new WP_Query(array('page_id'=>62));
			$hold_query = $wp_query;
			$wp_query = $query;

			if ( have_posts()):the_post();

				get_template_part( 'template-parts/content', 'leadership' );

			endif; // End of the loop.

			$wp_query = $hold_query;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
