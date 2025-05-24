<?php get_header() ?>

        <div class="single-book-review">
            <h1 class="single-book-review-title"><?php the_title() ?></h1>
            <?php the_post_thumbnail('custom-thumb'); ?>
            <div class="content">
                <?php the_content() ?>
            </div>
            <a href="<?php echo get_permalink( get_page_by_path('book-reviews') ); ?>" class="button book-review-button">Return to Book Reviews</a>
        </div>
    


<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">


<?php get_footer() ?>