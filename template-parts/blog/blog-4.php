<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aaurora
 * @since 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inner-entry">

		<?php aaurora_post_thumbnail( 'aaurora-blog-4-featured-image', aaurora_posted_on( true ) ); ?>

		<div class="entry-header">
			<div class="entry-meta">
				<div class="posted-on">
					<?php aaurora_posted_on(); ?>
				</div>
			</div>
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
		</div>
<!--         todo a better naming could be entry-excerpt-->
		<div class="entry-excerpt">
			<?php aaurora_excerpt( 20 ); ?>
			<div class="read-more">
				<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'read more', 'aaurora' ); ?> <?php aaurora_load_inline_svg( 'arrow-right-circle.svg' ); ?></a>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
