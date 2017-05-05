<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-careers"); ?> style="
	<?php echo "background-image: url(".get_template_directory_uri()."/images/background.jpg);"; ?>">
	<header class="row-1">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div><!--.wrapper-->
	</header><!-- .row-1 -->
	<?php if(get_the_content()):?>
		<section class="row-2 copy">
			<?php the_content();?>
		</section><!--.row-2-->
	<?php endif;?>
    <?php $form = get_field("form");
    $images = get_field("images");
    if($form||$images):?>
        <section class="row-3 clear-bottom">
            <div class="column-1 copy">
                <?php if($form):
                    echo $form;
                endif;?>
            </div><!--.column-1-->
            <div class="column-2">
                <?php if($images):?>
                    <div class="flexslider">
                        <ul class="slides">
                            <?php foreach($images as $row):?>
                            <li><img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>"></li>
                            <?php endforeach;?>
                        </ul>
                    </div><!--.flexslider-->
                <?php endif;?>
            </div><!--.column-2-->
        </section><!--.row-2-->
	<?php endif;
	$after_text = get_field("after_text");
	if($after_text):?>
        <div class="row-4 copy">
            <?php echo $after_text;?>
        </div><!--.row-4-->
    <?php endif;?>
</article><!-- #post-## -->
