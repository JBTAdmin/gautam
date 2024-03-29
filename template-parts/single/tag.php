<?php
/**
 * Displayes Tags.
 *
 * @package Gautam
 * @since 1.0
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( 'post' === get_post_type() ) {
	/* translators: used between list items, there is a space after the comma */
	$tags_list = get_the_tag_list();
	if ( $tags_list ) {
		printf( '<span class="tags-links">' . esc_html( ' %1$s' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

