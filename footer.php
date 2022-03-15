<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wayako
 */

?>

<?php /*
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
	*/ ?>

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
