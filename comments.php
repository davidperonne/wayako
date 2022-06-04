<?php
/**
 * The template for displaying comments
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area alignwide" id="comments">

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">

			<?php
			$comments_number = get_comments_number();
			if ( 1 === (int) $comments_number ) {
				printf(
					esc_html__( '%s comment', 'wayako' ),
					$comments_number
				);
			} else {
				printf(
					esc_html__( '%s comments', 'wayako' ),
					$comments_number
				);
			}
			?>

		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-above">

				<h1 class="visually-hidden"><?php esc_html_e( 'Comment navigation', 'wayako' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'wayako' ) ); ?>
					</div>
				<?php } ?>

				<?php	if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'Newer Comments &rarr;', 'wayako' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback'   => 'wayako_comments'
				)
			);
			?>

		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-below">

				<h1 class="visually-hidden"><?php esc_html_e( 'Comment navigation', 'wayako' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'wayako' ) ); ?>
					</div>
				<?php } ?>

				<?php if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'Newer Comments &rarr;', 'wayako' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->

		<?php endif; // Check for comment navigation. ?>

	<?php endif; // End of if have_comments(). ?>

	<?php comment_form(); // Render comments form. ?>

</div><!-- #comments -->
