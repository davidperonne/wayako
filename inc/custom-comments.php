<?php
/**
 * Comment layout
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add Bootstrap classes to comment form fields.
add_filter( 'comment_form_default_fields', 'wayako_bootstrap_comment_form_fields' );

if ( ! function_exists( 'wayako_bootstrap_comment_form_fields' ) ) {
	/**
	 * Add Bootstrap classes to WP's comment form default fields.
	 *
	 * @param array $fields {
	 *     Default comment fields.
	 *
	 *     @type string $author  Comment author field HTML.
	 *     @type string $email   Comment author email field HTML.
	 *     @type string $url     Comment author URL field HTML.
	 *     @type string $cookies Comment cookie opt-in field HTML.
	 * }
	 *
	 * @return array
	 */
	function wayako_bootstrap_comment_form_fields( $fields ) {

		if ( isset( $fields['author'] ) ) {
			$fields['author'] = '<div class="">
			<div class="form-group comment-form-author">
			<label class="screen-reader-text" for="author">' . esc_html__( 'Name', 'wayako' ) . ' <span class="required">*</span></label> <input class="form-control" id="author" name="author" type="text" value="" size="30" placeholder="' . esc_html__( 'Name', 'wayako' ) . '*" maxlength="245" required="required"></div>';
		}
		if ( isset( $fields['email'] ) ) {
			$fields['email'] = '<div class="form-group comment-form-email">
			<label class="screen-reader-text" for="email">E-mail <span class="required">*</span></label> <input class="form-control" id="email" name="email" type="email" value="" size="30" placeholder="Email*" maxlength="100" aria-describedby="email-notes" required="required"></div>';
		}
		if ( isset( $fields['url'] ) ) {
			$fields['url'] = '<div class="form-group comment-form-url">
			<label class="screen-reader-text" for="url">Site web</label> <input class="form-control" id="url" name="url" type="url" value="" size="30" placeholder="' . esc_html__( 'Website', 'wayako' ) . '" maxlength="200"></div>
			</div>';
		}

		if ( isset( $fields['cookies'] ) ) {
			$fields['cookies'] = '<div class="form-group form-check comment-form-cookies-consent"><input class="form-check-input me-3" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label class="form-check-label" for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and site in the browser for my next comment.', 'wayako' ) . '</label></div>';
		}

		return $fields;
	}
} // End of if function_exists( 'wayako_bootstrap_comment_form_fields' )

// Add Bootstrap classes to comment form submit button and comment field.
add_filter( 'comment_form_defaults', 'wayako_bootstrap_comment_form' );

if ( ! function_exists( 'wayako_bootstrap_comment_form' ) ) {
	/**
	 * Adds Bootstrap classes to comment form submit button and comment field.
	 *
	 * @param string[] $args Comment form arguments and fields.
	 *
	 * @return string[]
	 */
	function wayako_bootstrap_comment_form( $args ) {

		if ( isset( $args['comment_field'] ) ) {
			$args['comment_field'] = '<div class="form-group comment-form-comment mb-3">
			<label class="screen-reader-text" for="comment">Message</label> 
			<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" placeholder="Votre message"></textarea>
			</div>';
		}

		if ( isset( $args['class_submit'] ) ) {
			$args['class_submit'] = 'btn btn-green';
		}

		if ( isset( $args['label_submit'] ) ) {
			$args['label_submit'] = esc_html__( 'Post comment', 'wayako' );
		}

		if ( isset( $args['title_reply'] ) ) {
			$args['title_reply'] = esc_html__( 'Leave a comment', 'wayako' );
		}

		if ( isset( $args['comment_notes_before'] ) ) {
			$args['comment_notes_before'] = '<p class="comment-notes required-fields"><span class="required">*</span> ' . esc_html__( 'Required fields', 'wayako' ) . '</p>';
		}

		return $args;
	}
} // End of if function_exists( 'wayako_bootstrap_comment_form' ).


// Add note if comments are closed.
add_action( 'comment_form_comments_closed', 'wayako_comment_form_comments_closed' );

if ( ! function_exists( 'wayako_comment_form_comments_closed' ) ) {
	/**
	 * Displays a note that comments are closed if comments are closed and there are comments.
	 */
	function wayako_comment_form_comments_closed() {
		if ( get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wayako' ); ?></p>
			<?php
		}
	}
} // End of if function_exists( 'wayako_comment_form_comments_closed' ).



if ( ! function_exists( 'wayako_comments' ) ) {
	/**
	 * Custom ccomments function.
	 *
	 * @param [type] $comment
	 * @param [type] $args
	 * @param [type] $depth
	 * @return void
	 */
	function wayako_comments( $comment, $args, $depth ) {
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div class="comment__item">

				<div class="comment__author">
					<div class="avatar"></div>
					<div class="comment__author-body">
						<span class="h6 author"><?php echo get_comment_author(); ?></span>
						<span class="date"><?php echo get_comment_date(); ?></span>
					</div>
				</div>

				<div class="comment__body">
					<div class="comment-arrow"></div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php esc_html_e( 'Your comment is awaiting moderation.','wayako' ); ?></em>
						<br />
					<?php endif; ?>

					<div>
						<?php comment_text(); ?>
					</div>

				</div>

				<span href="#" class="comment__reply-link">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</span>

			</div>
		</li>
		<?php
	}
}
