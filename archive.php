<?php get_header() ?>

<section class="archive-grid">
    <h1 class="page-title"><?php the_archive_title(); ?></h1>

    <div class="grid-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="grid-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Placeholder">
                    <?php endif; ?>
                </a>
            </div>
        <?php endwhile; endif; ?>
    </div>

    <div class="pagination">
        <?php the_posts_pagination(); ?>
    </div>

    <a href="<?php echo get_permalink( get_page_by_path('book-reviews') ); ?>" class="button archive-button">Return to Book Reviews</a>

</section>

<?php get_footer() ?>