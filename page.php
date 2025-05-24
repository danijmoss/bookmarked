<?php get_header() ?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h1><?php the_title() ?></h1>
            <div class="content">
                <?php the_content() ?>
            </div>
        </div>
    <?php }


?>

<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">


<?php get_footer() ?>