<?php
/**
 * Template part for displaying page content in page-leadership.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-leadership"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .entry-header -->
    <section class="row-2">
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
    </section><!--.row-2-->
    <section class="row-3">
		<?php $manager_header = get_field("manager_header");
		if($manager_header):?>
            <header>
                <h2><?php echo $manager_header;?></h2>
            </header>
		<?php endif;?>
		<?php
		$args = array('post_type'=>'leaders',"posts_per_page"=>-1,"order"=>"DESC","orderby"=>"menu_order",
            "tax_query"=>array(array(
                    "taxonomy"=>"leaders_type",
                    "field"=>"slug",
                    "terms"=>"manager"
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
    </section><!--.row-3-->
    <div class="row-4">
		<?php $agencies_header = get_field("agencies_header");
		$agencies_gallery = get_field("agencies_gallery");
		if($agencies_header):?>
            <header>
                <h2><?php echo $agencies_header;?></h2>
            </header>
		<?php endif;?>
		<?php if($agencies_gallery):
			$count = 0;?>
            <div class="wrapper clear-bottom">
				<?php foreach($agencies_gallery as $agency):
					if($agency['image']):?>
                        <div class="agency js-blocks count-<?php echo $count+1;?>" style="background-image: url(<?php echo $agency['image']['url'];?>);">
							<?php if($agency['link']):?>
                            <a href="<?php echo $agency['link'];?>" target="_blank">
								<?php endif;?>
                                <img src="<?php echo $agency['image']['url'];?>" alt="<?php echo $agency['image']['alt'];?>">
								<?php if($agency['link']):?>
                            </a>
						<?php endif;?>
                        </div><!--.agency-->
					<?php endif;?>
					<?php $count++;
				endforeach;?>
            </div><!--.wrapper-->
		<?php endif;?>
    </div><!--.row-4-->
    <div class="row-5">
		<?php $technology_header = get_field("technology_header");
		$technology_gallery = get_field("technology_gallery");
		if($technology_header):?>
            <header>
                <h2><?php echo $technology_header;?></h2>
            </header>
		<?php endif;?>
		<?php if($technology_gallery):
			$count = 0;?>
            <div class="wrapper clear-bottom">
				<?php foreach($technology_gallery as $technology):
					if($technology['image']):?>
                        <div class="technology js-blocks count-<?php echo $count+1;?>" style="background-image: url(<?php echo $agency['image']['url'];?>);">
							<?php if($technology['link']):?>
                            <a href="<?php echo $technology['link'];?>" target="_blank">
								<?php endif;?>
                                <img src="<?php echo $technology['image']['url'];?>" alt="<?php echo $technology['image']['alt'];?>">
								<?php if($technology['link']):?>
                            </a>
						<?php endif;?>
                        </div><!--.agency-->
					<?php endif;?>
					<?php $count++;
				endforeach;?>
            </div><!--.wrapper-->
		<?php endif;?>
    </div><!--.row-5-->
</article><!-- #post-## -->
