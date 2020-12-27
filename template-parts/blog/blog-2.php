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

<article id="post-<?php the_ID(); ?>">
    <div class="inner-entry">
        <div class="featured-image">
			<?php aaurora_post_thumbnail( 'aaurora-blog-2-featured-image', aaurora_posted_on( true ) ); ?>
        </div>
        <div class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
        </div><!-- .entry-header -->
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
