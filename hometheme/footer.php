<footer class="site-footer">
    <div class="footer-widgets clearflix">
        <?php if(is_active_sidebar('sidebar1')){ ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('sidebar1'); ?>
            </div>
        <?php } ?>
    </div>
    <p> <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> </p>
</footer>
<?php wp_footer(); ?> 
    </body>
</html>