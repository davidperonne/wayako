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




	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wayako' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wayako' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wayako' ), 'wayako', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="screen-reader-text"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<?php wp_footer(); ?>

</body>
</html>
