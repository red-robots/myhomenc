<?php
/**
* Template Name: Our Agents
*/
 get_header(); ?>


<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>



        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
                <div id="agent-boxes" class="clear-bottom">
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
                                    if ($agentName) {
                                        echo $agentName . ' ';
                                    }
                                    if ($agentName2) {
                                        echo $agentName2;
                                    } ?>
                                    </h2>
                                    <div><?php //echo $myField; ?></div>
                                </div><!-- agent-profile-box-content -->
                                <div class="link"><a href="<?php echo $link; ?>"></a></div>
                            </div><!--  agent-profile-box -->

                        <?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         endforeach;
                    endif; ?>
                </div><!-- agent-boxes  -->
            </main><!-- #main -->
        </div><!-- #primary -->
    <?php endwhile;
endif;
get_footer(); ?>