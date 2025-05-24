<?php
/*
Template Name: Search Page
*/
?>

<?php get_header() ?>

    
<div class="search">
     <h1>Site Search</h1>
        <div class="content search">
            <div class="search-page-form">
                <?php get_search_page_form(); ?>
            </div>
        </div>
</div>


<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/divider.png">


<?php get_footer() ?>