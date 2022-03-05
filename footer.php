<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer class="site-footer" id="">

		<div class="site-footer__container container---- alignwide">

			<div class="site-footer__widgets">

				<?php dynamic_sidebar( 'footer-widget' ); ?>

			</div>

			<div class="site-footer__copyright">

				<?php dynamic_sidebar( 'copyright-widget' ); ?>

			</div>

		</div>

	</footer>

</div>

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="visually-hidden"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<?php wp_footer(); ?>

</body>

</html>

