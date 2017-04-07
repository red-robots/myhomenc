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
    <section class="row-2">
        <div class="wrapper">
			<?php $email_tag = get_field( "email_tag" );
			$phone_tag       = get_field( "phone_tag" );
			$view_agents_tag = get_field( "view_agents_tag" );
			$directions_tag = get_field( "directions_tag" );
			$email_tag       = $email_tag ? $email_tag . " " : "";
			$phone_tag       = $phone_tag ? $phone_tag . " " : "";
			$view_agents_tag = $view_agents_tag ? $view_agents_tag : "";
			$directions_tag = $directions_tag ? $directions_tag : ""; ?>
            <div class="column-1">
				<?php 
				$image       = get_field( "mm_image" );
				$email       = get_field( "mm_email" );
				$address     = get_field( "mm_address" );
				$directions  = get_field( "mm_directions" );
				$phone       = get_field( "mm_phone" );
				$link        = get_field( "mm_link" ); ?>
				<?php if ( $address || $email || $directions || $phone || $link ): ?>
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
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $view_agents_tag; ?></a>
                            </div><!--.link-->
						<?php endif; ?>
                    </div><!--.column-2-->
				<?php endif; ?>
            </div><!--.row-1-->
            <div class="column-2">
				<?php
				$image       = get_field( "mth_image" );
				$email       = get_field( "mth_email" );
				$address     = get_field( "mth_address" );
				$directions  = get_field( "mth_directions" );
				$phone       = get_field( "mth_phone" );
				$link        = get_field( "mth_link" ); ?>
				<?php if ( $address || $email || $directions || $phone || $link ): ?>
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
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $view_agents_tag; ?></a>
                            </div><!--.link-->
						<?php endif; ?>
                    </div><!--.column-2-->
				<?php endif; ?>
            </div><!--.row-2-->
            <div class="column-3">
				<?php
				$image       = get_field( "mhl_image" );
				$email       = get_field( "mhl_email" );
				$address     = get_field( "mhl_address" );
				$directions  = get_field( "mhl_directions" );
				$phone       = get_field( "mhl_phone" );
				$link        = get_field( "mhl_link" ); ?>
				<?php if ( $address || $email || $directions || $phone || $link ): ?>
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
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $view_agents_tag; ?></a>
                            </div><!--.link-->
						<?php endif; ?>
                    </div><!--.column-2-->
				<?php endif; ?>
            </div><!--.col-3-->
        </div><!--.wrapper-->
    </section><!--.row-2-->
	<section class="row-3 copy">
        <?php the_content(); ?>
	</section><!--.row-3-->
    <section class="row-4">
		<?php $team_header = get_field("team_header");
		if($team_header):?>
            <header>
                <h2><?php echo $team_header;?></h2>
            </header>
		<?php endif;?>
		<?php
		$args = array('post_type'=>'leaders',"posts_per_page"=>-1,"orderby"=>"menu_order","order"=>"DESC",
		              "tax_query"=>array(array(
			              "taxonomy"=>"leaders_type",
			              "field"=>"slug",
			              "terms"=>"brokers-in-charge"
		              )
		              ));
		$query = new WP_Query($args);
		if($query->have_posts()):
			$count = 0;?>
            <div class="wrapper clear-bottom">
				<?php while($query->have_posts()):$query->the_post();
					$image = get_field("image");
					$title = get_field("title");
					$phone = get_field("phone");
					$email = get_field("email"); ?>
                    <div class="leader js-blocks count-<?php echo $count+1;?>">
                        <div class="wrapper">
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                            <div class="info">
                                <div class="wrapper">
                                    <header><h3><?php echo the_title();?></h3></header>
									<?php if($title):?>
                                        <div class="title"><?php echo $title;?></div><!--.title-->
									<?php endif;?>
									<?php if($phone):?>
                                        <div class="phone"><?php echo $phone;?></div><!--.phone-->
									<?php endif;?>
									<?php if($email):?>
                                        <div class="email">
                                            <a href="<?php echo "mailto:".$email;?>" target="_blank">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </div><!--.title-->
									<?php endif;?>
                                </div><!--.wrapper-->
                                <div class="close clear-bottom">
                                    <i class="fa fa-times"></i>
                                </div><!--.close-->
                            </div><!--.info-->
                            <div class="open">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div><!--.wrapper-->
                    </div><!--.leader-->
					<?php $count++;
				endwhile;?>
            </div><!--.wrapper-->
			<?php wp_reset_postdata();
		endif;?>
    </section><!--.row-4-->
</article><!-- #post-## -->