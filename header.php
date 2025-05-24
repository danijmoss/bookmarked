<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>

    <div class="site">

        <header class="site-header">
            <div class="header-grid">
                
                <!-- Custom Logo -->
                <div class="site-logo">
                    <?php if (function_exists('the_custom_logo')) the_custom_logo(); ?>
                </div>

                <!-- Site Navigation -->
                <nav class="site-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'main-menu',
                        'menu_id'        => 'primary-menu',
                    ));
                    ?>
                </nav>
                
                <!-- Custom Search -->
                <div class="header-search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </header>
