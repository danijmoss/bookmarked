<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
    
    <?php if ( have_posts() ) : ?>
    
        <header class="page-header">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header><!-- .page-header -->


        <section class="archive-grid">
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
        </section>    

        <div class="navigation">
            <?php the_posts_navigation(); ?>
        </div>

        <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">

    <?php else : ?>

        <article class="no-results not-found">
            <header class="entry-header">
                <h2 class="entry-title"><?php _e( 'Nothing Found', 'your-theme-textdomain' ); ?></h2>
            </header>

            <div class="entry-content">
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'your-theme-textdomain' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>

    <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
