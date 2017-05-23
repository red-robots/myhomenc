<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

$is_page = $wp_query->post_count === 1 && get_the_ID() === 516 ? true:false;?>

<article <?php if($is_page) echo 'id="post-516"'; ?> <?php post_class("template-search"); ?>>
    <?php
    if(!$is_page):
        $post = get_post(516);
        setup_postdata($post);
	    $fallback_search_text = get_field("fallback_search_text");
    else:
        the_post();
    endif;?>
    <header class="row-1">
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>
        </div><!--.wrapper-->
    </header><!-- .row-1 -->
    <section class="row-2 copy">
        <?php the_content();?>
        <?php get_search_form(); ?>
    </section><!--.row-2-->
    <?php if(!$is_page):
        wp_reset_postdata();
        if(isset($_GET['s'])&&isset($_GET['search_type'])&&$_GET['search_type']=="agent"):
            // WP_User_Query arguments
            $args = array (
                'role' => 'agent',
                'order' => 'ASC',
                'orderby' => 'display_name',
                'search' => '*'.esc_attr( $_GET['s'] ).'*',
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key'     => 'first_name',
                        'value'   => $_GET['s'],
                        'compare' => 'IN'
                    ),
                    array(
                        'key'     => 'last_name',
                        'value'   => $_GET['s'],
                        'compare' => 'IN'
                    ),
                    array(
                        'key' => 'description',
                        'value' => $_GET['s'],
                        'compare' => 'IN'
                    )
                )
            );
            $query = new WP_User_Query($args);
            $agents = $query->get_results();
            if(!empty($agents)): ?>
                <section class="row-3">
                    <?php foreach($agents as $agent):?>
                        <div class="item">
                            <h2><a href="<?php echo get_author_posts_url($agent->ID);?>"><?php echo $agent->display_name;?></a></h2>
                        </div><!--.item-->
                    <?php endforeach;?>
                </section><!--.row-3-->
            <?php else: ?>
                <section class="row-3 copy">
                    <?php if($fallback_search_text) echo $fallback_search_text;?>
                </section><!--.row-3-->
            <?php endif;
        else:
            if(have_posts()): ?>
                <section class="row-3">
                    <?php while(have_posts()): the_post();?>
                        <div class="item">
                            <h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
                        </div><!--.item-->
                    <?php endwhile;?>
                </section><!--.row-3-->
            <?php else: ?>
                <section class="row-3 copy">
                    <?php if($fallback_search_text) echo $fallback_search_text;?>
                </section><!--.row-3-->
            <?php endif;
        endif;
    endif;?>
</article><!-- #post-## -->
