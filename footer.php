        <!--footer-->
        <footer class="site-footer">
            <div class="footer-header">
                <a href="<?php echo home_url(); ?>"><h2>Dani Does Stuff</h2></a>
            </div>

            <div class="footer-widgets">
                <?php if (is_active_sidebar('footer-col-1')) : ?>
                    <div class="footer-col"><?php dynamic_sidebar('footer-col-1'); ?></div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-col-2')) : ?>
                    <div class="footer-col"><?php dynamic_sidebar('footer-col-2'); ?></div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-col-3')) : ?>
                    <div class="footer-col"><?php dynamic_sidebar('footer-col-3'); ?></div>
                <?php endif; ?>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div>
        </footer>


        <?php wp_footer() ?>
    </div>
</body>
</html>