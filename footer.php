
<footer class="site-footer">
    <div class="site-footer-inner">

        <p class="footer-site-name">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </p>

        <p class="footer-copyright">
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>.
            All rights reserved.
        </p>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
