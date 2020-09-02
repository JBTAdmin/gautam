<?php
/**
 * Create theme options.
 *
 * @package aaurora
 */

if ( ! function_exists( 'aaurora_theme_customize_register' ) ) :
	/**
	 * Change default Customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 */
	function aaurora_theme_customize_register( $wp_customize ) {
		$wp_customize->remove_section( 'colors' );

		$wp_customize->remove_section( 'header_image' );

		$wp_customize->remove_section( 'background_image' );

		$wp_customize->get_section( 'title_tagline' )->panel = 'theme_settings_panel';

		$wp_customize->get_section( 'title_tagline' )->title = esc_html__( 'Site Logo and Favicon', 'aaurora' );
	}
endif;
add_action( 'customize_register', 'aaurora_theme_customize_register' );

Kirki::add_config(
	'aaurora_theme_options',
	array(
		'capability'  => 'edit_theme_options',
		'option_type' => 'theme_mod',
	)
);

// Create main panel.
Kirki::add_panel(
	'theme_settings_panel',
	array(
		'title'       => esc_attr__( 'Theme Settings', 'aaurora' ),
		'description' => esc_attr__( 'Manage theme settings', 'aaurora' ),
	)
);

// SECTION: General.
Kirki::add_section(
	'general',
	array(
		'title'       => esc_attr__( 'General', 'aaurora' ),
		'description' => '',
		'panel'       => 'theme_settings_panel',
		'priority'    => 10,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'color_theme',
		'label'       => esc_attr__( 'Theme color', 'aaurora' ),
		'description' => '',
		'section'     => 'general',
		'default'     => '#e22c2f',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => ':root',
				'property' => '--theme-color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'color_body_text',
		'label'       => esc_attr__( 'Body text color', 'aaurora' ),
		'description' => '',
		'section'     => 'general',
		'default'     => '#333333',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => 'body',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'background',
		'settings'    => 'body_background',
		'label'       => esc_attr__( 'Body background', 'aaurora' ),
		'description' => esc_attr__( 'Change your site main background settings.', 'aaurora' ),
		'section'     => 'general',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'body',
			),
		),
	)
);

// SECTION: Header.
Kirki::add_section(
	'header',
	array(
		'title'       => esc_attr__( 'Header', 'aaurora' ),
		'description' => '',
		'panel'       => 'theme_settings_panel',
		'priority'    => 30,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'color_site_header',
		'label'       => esc_attr__( 'Header Background Color', 'aaurora' ),
		'description' => '',
		'section'     => 'header',
		'default'     => '#fff',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => '.site-header, .aside-header-container',
				'property' => 'background',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'color_site_title_text',
		'label'       => esc_attr__( 'Site Title Color', 'aaurora' ),
		'description' => '',
		'section'     => 'header',
		'default'     => '#333333',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => '.site-branding',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'color_main_menu_link',
		'label'       => esc_attr__( 'Mainmenu link color', 'aaurora' ),
		'description' => '',
		'section'     => 'header',
		'default'     => '#000000',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => '.main-navigation, .sidebar-close-btn',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'     => 'radio-buttonset',
		'settings' => 'main_menu_align',
		'label'    => esc_attr__( 'Main menu align', 'aaurora' ),
		'section'  => 'header',
		'default'  => 'right',
		'choices'  => array(
			'center' => esc_attr__( 'Center', 'aaurora' ),
			'right'  => esc_attr__( 'Right', 'aaurora' ),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'main_menu_font_decoration',
		'label'       => esc_attr__( 'Main menu font decoration', 'aaurora' ),
		'section'     => 'header',
		'default'     => 'none',
		'choices'     => array(
			'uppercase' => esc_attr__( 'UPPERCASE', 'aaurora' ),
			'none'      => esc_attr__( 'None', 'aaurora' ),
		),
		'description' => '',
		'output'      => array(
			array(
				'element'  => '.header-menu',
				'property' => 'text-transform',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'main_menu_font_weight',
		'label'       => esc_attr__( 'Main menu font weight', 'aaurora' ),
		'section'     => 'header',
		'default'     => '500',
		'choices'     => array(
			'500' => esc_attr__( 'Regular', 'aaurora' ),
			'700' => esc_attr__( 'Bold', 'aaurora' ),
		),
		'description' => '',
		'output'      => array(
			array(
				'element'  => '.header-menu',
				'property' => 'font-weight',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'dimension',
		'settings'    => 'mainmenu_paddings',
		'label'       => esc_attr__( 'Main Header Height', 'aaurora' ),
		'description' => esc_attr__( 'Use this option to change header height. Default: 10rem', 'aaurora' ),
		'section'     => 'header',
		'default'     => '10rem',
		'output'      => array(
			array(
				'element'  => '.main-header, .aside-header',
				'property' => 'height',
			),
		),
	)
);

// END SECTION: Header.

// SECTION: Footer.
Kirki::add_section(
	'footer',
	array(
		'title'       => esc_attr__( 'Footer', 'aaurora' ),
		'description' => '',
		'panel'       => 'theme_settings_panel',
		'priority'    => 60,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'footer_text_color',
		'label'       => esc_attr__( 'Footer text color', 'aaurora' ),
		'description' => esc_attr__( 'Change text color in footer HTML block', 'aaurora' ),
		'section'     => 'footer',
		'default'     => '#fff',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => '.site-footer',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'color',
		'settings'    => 'footer_background_color',
		'label'       => esc_attr__( 'Footer background', 'aaurora' ),
		'description' => esc_attr__( 'Change Background color of the footer section.', 'aaurora' ),
		'section'     => 'footer',
		'default'     => '#fff',
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element'  => '.site-footer',
				'property' => 'background-color',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'textarea',
		'settings'    => 'footer_copyright',
		'label'       => esc_attr__( 'Footer copyright text', 'aaurora' ),
		'description' => esc_attr__( 'Change your footer copyright text.', 'aaurora' ),
		'section'     => 'footer',
		'default'     => 'Powered by <a href="https://www.wordpress.org">WordPress</a> <br />All rights reserved',
	)
);


// END SECTION: Footer.

// SECTION: Blog Single Post.
Kirki::add_section(
	'blog_post',
	array(
		'title'       => esc_attr__( 'Single Post', 'aaurora' ),
		'description' => esc_attr__( 'This settings affect your blog single post display.', 'aaurora' ),
		'panel'       => 'theme_settings_panel',
		'priority'    => 80,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'typography',
		'settings'    => 'blog_post_title_font',
		'label'       => esc_attr__( 'Post Title Size', 'aaurora' ),
		'section'     => 'blog_post',
		'default'     => array(
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;',
			'font-size'   => '40px',
		),
		'description' => esc_attr__( 'Font used in Single Post Header .', 'aaurora' ),
		'output'      => array(
			array(
				'choice'   => 'font-size',
				'element'  => ':root',
				'property' => '--font_size_post-title_mobile',
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'toggle',
		'settings'    => 'blog_post_author',
		'label'       => esc_attr__( 'Author details', 'aaurora' ),
		'description' => esc_attr__( 'Show post author details with avatar after post content. You need to fill your post author biography details and social links in "Users" section in WordPress.', 'aaurora' ),
		'section'     => 'blog_post',
		'default'     => '1',
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'toggle',
		'settings'    => 'blog_post_featured_image',
		'label'       => esc_attr__( 'Featured image', 'aaurora' ),
		'description' => esc_attr__( 'Disable to hide post featured image on single post page (Globally on all site).', 'aaurora' ),
		'section'     => 'blog_post',
		'default'     => '1',
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'toggle',
		'settings'    => 'blog_post_tags',
		'label'       => esc_attr__( 'Tags', 'aaurora' ),
		'description' => esc_attr__( 'Disable to hide post tags on single post page.', 'aaurora' ),
		'section'     => 'blog_post',
		'default'     => '1',
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'toggle',
		'settings'    => 'blog_post_comments',
		'label'       => esc_attr__( 'Comments counter', 'aaurora' ),
		'description' => '',
		'section'     => 'blog_post',
		'default'     => '0',
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'toggle',
		'settings'    => 'blog_post_nav',
		'label'       => esc_attr__( 'Navigation links', 'aaurora' ),
		'description' => esc_attr__( 'Previous/next posts navigation links below post content.', 'aaurora' ),
		'section'     => 'blog_post',
		'default'     => '1',
	)
);

// END SECTION: Blog Single Post.

// SECTION: Sidebars.
Kirki::add_section(
	'sidebars',
	array(
		'title'       => esc_attr__( 'Sidebars', 'aaurora' ),
		'description' => esc_attr__( 'Choose your sidebar positions for different WordPress pages.', 'aaurora' ),
		'panel'       => 'theme_settings_panel',
		'priority'    => 140,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'sidebar_listing',
		'label'       => esc_attr__( 'Sidebar listing', 'aaurora' ),
		'section'     => 'sidebars',
		'default'     => 'right',
		'choices'     => array(
			'right'   => esc_attr__( 'Right', 'aaurora' ),
			'disable' => esc_attr__( 'Disable', 'aaurora' ),
		),
		'description' => '',
	)
);

// END SECTION: Sidebars.

// SECTION: Fonts.
Kirki::add_section(
	'fonts',
	array(
		'title'       => esc_attr__( 'Fonts', 'aaurora' ),
		'description' => '',
		'panel'       => 'theme_settings_panel',
		'priority'    => 160,
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'typography',
		'settings'    => 'font_header_h1',
		'label'       => esc_attr__( 'H1 font', 'aaurora' ),
		'section'     => 'fonts',
		'default'     => array(
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;',
		),
		'description' => esc_attr__( 'Font used in H1 Header .', 'aaurora' ),
		'output'      => array(
			array(
				'element' => array( 'h1' ),
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'typography',
		'settings'    => 'font_header_h2',
		'label'       => esc_attr__( 'H2 font', 'aaurora' ),
		'section'     => 'fonts',
		'default'     => array(
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;',
		),
		'description' => esc_attr__( 'Font used in H2 header.', 'aaurora' ),
		'output'      => array(
			array(
				'element' => array( 'h2' ),
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'typography',
		'settings'    => 'font_header_h3',
		'label'       => esc_attr__( 'H3 font', 'aaurora' ),
		'section'     => 'fonts',
		'default'     => array(
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;',
		),
		'description' => esc_attr__( 'Font used in H3 header.', 'aaurora' ),
		'output'      => array(
			array(
				'element' => array( 'h3' ),
			),
		),
	)
);

Kirki::add_field(
	'aaurora_theme_options',
	array(
		'type'        => 'typography',
		'settings'    => 'body_font',
		'label'       => esc_attr__( 'Body font', 'aaurora' ),
		'section'     => 'fonts',
		'default'     => array(   // TODO  In default can i use Initial as font-family.
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;',
		),
		'description' => esc_attr__( 'Font used in text elements.', 'aaurora' ),
		'output'      => array(
			array(
				'element' => 'body',
			),
		),
	)
);

// END SECTION: Fonts.
