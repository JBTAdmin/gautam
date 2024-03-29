<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gautam
 */

get_theme_mod( 'sidebar_listing', 'right' );
$option = array( 'content-only', 'gautam-sidebar-left' );
if ( ! is_active_sidebar( 'gautam-sidebar-right' ) || in_array( get_theme_mod( 'sidebar_layout_setting', 'content-only' ), $option, true ) ) {
	return;
}
?>

<aside id="primary-sidebar" class="widget-area sidebar-right">
	<?php dynamic_sidebar( 'gautam-sidebar-right' ); ?>
</aside><!-- #secondary -->

