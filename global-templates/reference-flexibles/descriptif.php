<?php
/**
 * Descriptif template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section descriptif -->
<section class="descriptif">

	<?php if ( $description = get_sub_field( 'description' ) ) : ?>
		<div class="description"><?php echo wp_kses_post( $description ); ?></div>
	<?php endif; ?>

</section>
