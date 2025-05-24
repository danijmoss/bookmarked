<?php get_header() ?>

<h1 class="main-blog-heading">My Thoughts</h1>
<p class="main-blog-subtitle">Random feelings and ideas I have about my hobbies and life in general.</p>

<main class="main-blog">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="main-post-row">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="main-post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                </div>
            <?php endif; ?>
            <div class="main-post-content">
                <h2 class="main-post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="main-post-date"><?php echo get_the_date(); ?></p>
                <div class="main-excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 25, ''); ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">Continue Reading &raquo;</a>
                </div>

            </div>
        </article>
        <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>




<?php get_footer() ?>