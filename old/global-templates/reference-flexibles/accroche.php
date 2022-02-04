<?php
/**
 * Accroche template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section accroche -->
<section class="accroche">

	<?php if ( $title = get_sub_field( 'title' ) ) : ?>
		<h2 class="text-center"><?php echo wp_kses_post( $title ); ?></h2>
	<?php endif; ?>

</section>
