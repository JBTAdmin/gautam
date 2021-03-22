<?php
/**
 * Template for displaying search forms in Aaurora in widgets.
 *
 * @package aaurora
 *
 * @since 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field">
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'aaurora' ); ?></span>
	</label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr__( 'Search..', 'aaurora' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</form>
