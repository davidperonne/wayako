<?php
/**
 * The template for footer
 *
 * @package Wayako
 */

?>

		</main><!-- #main -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-footer__container alignwide">

			<?php dynamic_sidebar( 'footer-widget' ); ?>

		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<button class="scrollToTopBtn"><span class="screen-reader-text"><?php esc_html_e( 'To top', 'wayako' ); ?></span></button>

<?php wp_footer(); ?>

</body>
</html>
