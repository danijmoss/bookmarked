<?php get_header() ?>

    <!-- intro area -->
    <section class="header">
        <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/header-image.png">
                
        <div class="header-text">
                    
            <h1 class="header-intro">This is Dani.</h1>
            
            <p>Dani likes to do a lot of different things. <br>Check it out! She's modeling in this picture!</p>
                    
            <p>Another thing she likes doing is reading. <br>And she tends to read A LOT during the year.</p>
                    
            <p>Scroll down to see some of the <br>things she's recently read. </p>
                
        </div>
                
    </section>

    <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">

    <!-- newest reviews -->
    <section class="book-reviews">
        <h2 class="section-header">Newest Reviews</h2>

        <div class="book-review-cards">
            <?php
            $args = array(
                'post_type'      => 'book-review',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'ASC',
            );

            $newest_reviews_query = new WP_Query($args);

            if ($newest_reviews_query->have_posts()) :
                while ($newest_reviews_query->have_posts()) : $newest_reviews_query->the_post();
                    $rating = get_field('book_rating');
                    $format = get_field('format');
            ?>
                <article class="book-review-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="book-cover">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="book-info">
                        <h3 class="book-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <?php if ($rating) : ?>
                            <p class="rating"><strong>Rating:</strong> <?php echo esc_html($rating); ?>/5</p>
                        <?php endif; ?>

                        <?php if ($format) : ?>
                            <p class="format"><strong>Format:</strong> <?php echo esc_html($format); ?></p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No book reviews found.</p>';
            endif;
            ?>
        </div>
    </section>

    <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">

    <!-- book reviews -->
    <section class="book-reviews">
        <h2 class="section-header">Recent Book Reviews</h2>

        <div class="book-review-cards">
            <?php
            $args = array(
                'post_type'      => 'book-review',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $book_query = new WP_Query($args);

            if ($book_query->have_posts()) :
                while ($book_query->have_posts()) : $book_query->the_post();
                    $rating = get_field('book_rating');
                    $format = get_field('format');
            ?>
                <article class="book-review-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="book-cover">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="book-info">
                        <h3 class="book-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <?php if ($rating) : ?>
                            <p class="rating"><strong>Rating: </strong> <?php echo esc_html($rating); ?>/5</p>
                        <?php endif; ?>

                        <?php if ($format) : ?>
                            <p class="format"><strong>Format: </strong><?php echo esc_html($format); ?></p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No book reviews found.</p>';
            endif;
            ?>
        </div>
    </section>
    <a href="<?php echo get_permalink( get_page_by_path('book-reviews') ); ?>" class="button all-reviews-btn">See All Reviews</a>

    <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">

    <!-- blog -->
    <section class="blog">
        <h2 class="section-header">Random Thoughts</h2>

        <div class="blog-posts">
            <?php
            $blog_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3, 
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $blog_query = new WP_Query($blog_args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    
                        <article class="blog-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="blog-img">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                            <?php endif; ?>
                            <div class="post-info">
                                <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <h5 class="post-date"><?php echo get_the_date('F j, Y'); ?></h5>
                            </div>
                        </article>
                    
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No recent blog posts found.</p>';
            endif;
            ?>

        
        </div>
    </section>

    <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="button all-posts-btn">See All Blog Posts</a>

    <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">

<?php get_footer() ?>