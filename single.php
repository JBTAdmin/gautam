<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aaurora
 */

get_header();

$sidebar_page_class = '';
if (is_active_sidebar('sidebar-1')) {
    $sidebar_page_class = ' with-right-sidebar';
}

?>

    <div class="site-container">
        <div class="wrap">
            <div class="main-container">
                <main id="primary" class="site-main primary-content <?php echo esc_attr($sidebar_page_class); ?>">

                    <?php
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/single/single-layout', get_post_type());

//                        the_post_navigation(
//                            array(
//                                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'aaurora') . '</span> <span class="nav-title">%title</span>',
//                                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'aaurora') . '</span> <span class="nav-title">%title</span>',
//                            )
//                        );



                        // Previous/next post navigation.
                        $next_post = get_next_post();
                        $previous_post = get_previous_post();
                        $previous_post_thumbnail ='';
                        $next_post_thumbnail = '';

                        if ( is_a( $previous_post , 'WP_Post' ) ):
                            $previous_post_thumbnail = get_the_post_thumbnail($previous_post->ID,'thumbnail');
                        endif;

                        if ( is_a( $next_post , 'WP_Post' ) ):
                            $next_post_thumbnail = get_the_post_thumbnail($next_post->ID,'thumbnail');
                        endif;

                        the_post_navigation( array(

                            'next_text' => '<div><small class="meta-nav" aria-hidden="true">' . __( 'Newer Post', 'aaurora' ) . '</small> ' .
                                '<span class="screen-reader-text">' . __( 'Newer post:', 'aaurora' ) . '</span> ' .
                                '<h2 class="post-title">%title</h2></div>' . $next_post_thumbnail,

                            'prev_text' => $previous_post_thumbnail . '<div><small class="meta-nav" aria-hidden="true">' . __( 'Older Post', 'aaurora' ) . '</small> ' .
                                '<span class="screen-reader-text">' . __( 'Older post:', 'aaurora' ) . '</span> ' .
                                '<h2 class="post-title">%title</h2></div>' ,
                        ) );




                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->

                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </div> <!-- #container -->
<?php
get_footer();
