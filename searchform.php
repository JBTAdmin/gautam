<?php
/**
 * Template for displaying search forms in Aaurora.
 *
 * @since 1.0
 * @version 1.0
 * @package aaurora
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'aaurora' ); ?></span>
	</label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'aaurora' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</form>
