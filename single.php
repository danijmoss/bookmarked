<?php get_header() ?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="single-post">
            <h1 class="single-post-heading"><?php the_title() ?></h1>
            <p class="single-post-date"><?php echo get_the_date(); ?></p>
            <div class="single-post-content">
                <div class="single-post-img"><?php the_post_thumbnail('large', ['class' => 'single-post-image']); ?></div>
                <?php the_content() ?>
            </div>
        </div>
    <?php }
?>

<a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="button single-post-button">Back to All Blog Posts</a>


<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">


<?php get_footer() ?>