<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <section class="footer-meta">
                Built by me, Joel Worsham. &copy; <?php echo date( 'Y' ); ?>
            </section>

            <section class="footer-social">
                <a href="https://github.com/joelworsham" target="_blank" rel="nofollow">
                    <span class="fab fa-github"></span>
                </a>

                <a href="https://www.linkedin.com/in/joel-worsham-51158593/" target="_blank" rel="nofollow">
                    <span class="fab fa-linkedin"></span>
                </a>

                <a href="https://stackoverflow.com/users/2292329/joel-worsham" target="_blank" rel="nofollow">
                    <span class="fab fa-stack-overflow"></span>
                </a>
            </section>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>