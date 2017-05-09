<?php
/**
 * Template part for displaying page content in page-agents.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("template-agents"); ?>>
    <header class="row-1">
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>
        </div><!--.wrapper-->
    </header><!-- .row-1 -->
    <section id="page-text">
        <div id="agents-page-content" class="clear-bottom">
            <div id="agents-page-text">
                <?php the_content(); ?>
                <div id="agent-search">SEARCH BY NAME
                <!-- --> 
                    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                        <div>
                            <input name="s" type="text" id="agent-search1" placeholder="enter name here" value="<?php echo wp_specialchars($s, 1); ?>" size="18" />
                            <input type="hidden" name="search_type" value="agent" />
                            <input type="submit" id="searchsubmit" value=" " class="btn" />
                        </div>
                    </form>
                <!-- -->
                </div><!-- agent-search -->
            </div><!-- agents-page-text -->
        
            <div id="agents-page-box">
                <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent/">
                    <h3>Need help selecting<br> an agent?</h3>
                    <img src="<?php bloginfo('template_url'); ?>/images/arrow-white.png" alt="" border="0">Answer a few quick questions to get matched with an agent that best meets your needs.
                </a>
            </div><!-- agents-page-box -->
        
        </div><!-- agents-page-content -->
    </section><!-- page-text -->
    <section id="agent-boxes" class="clear-bottom">
        <?php
        
        // WP_User_Query arguments
        $args = array (
            'role' => 'Agent',
            'order' => 'ASC',
            'orderby' => 'display_name',
        );

        // Create the WP_User_Query object
        $wp_user_query = new WP_User_Query($args);

        // Get the results
        $authors = $wp_user_query->get_results();
        // Check for results
        if (!empty($authors)) :
                // loop trough each author
            foreach ($authors as $author) :
            // get all the user's data
                $author_info = get_userdata($author->ID);
                $author_id = $author_info->ID;
                $myField = get_field( 'custom_bio', 'user_'.$author_id );
                $link = get_author_posts_url($author_id);
                $agentName = get_field( 'first_name', 'user_'.$author_id );
                $agentName2 = get_field( 'last_name', 'user_'.$author_id );
                // email
                $email = get_field( 'email', 'user_'.$author_id );
                $antispam = antispambot($email);
                $image = get_field( 'photo', 'user_'.$author_id );
                $size = 'agent_feed';
                $thumb = $image['sizes'][ $size ]; ?>

                <div class="agent-profile-box js-blocks">
                    <img src="<?php echo $thumb; ?>" />
                    <div class="agent-profile-box-content">
                        <h2>
                        <?php
                        if ($agentName) :
                            echo $agentName . ' ';
                        endif;
                        if ($agentName2) :
                            echo $agentName2;
                        endif; ?>
                        </h2>
                        <div><?php //echo $myField; ?></div>
                    </div><!-- agent-profile-box-content -->
                    <div class="link"><a href="<?php echo $link; ?>"></a></div>
                </div><!--  agent-profile-box -->

            <?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         endforeach;
        endif; ?>
    </section><!-- agent-boxes  -->
</article>