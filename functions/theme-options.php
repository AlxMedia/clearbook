<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'clearbook', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'clearbook' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'clearbook' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'clearbook' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'clearbook' ),
	'button_url'  => 'https://wordpress.org/support/theme/clearbook/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'clearbook' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'clearbook' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'clearbook' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'clearbook' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'clearbook' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'clearbook' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'clearbook' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'clearbook' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'clearbook' ),
	'description'	=> esc_html__( 'Your blog heading', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'clearbook' ),
	'description'	=> esc_html__( 'Your blog subheading', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Show Excerpts
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'excerpt-enable',
	'label'			=> esc_html__( 'Enable Excerpts', 'clearbook' ),
	'description'	=> esc_html__( 'Show instead of full post', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'clearbook' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'clearbook' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Featured Category
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'clearbook' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'clearbook' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'clearbook' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'clearbook' ),
	'description'	=> esc_html__( '2 columns of widgets', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'clearbook' ),
	'description'	=> esc_html__( '2 columns of widgets', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Author Avatar
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-avatar',
	'label'			=> esc_html__( 'Author Avatar', 'clearbook' ),
	'description'	=> esc_html__( 'Circle images', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Comment Count
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'clearbook' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'clearbook' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'clearbook' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearbook' ),
		'categories'=> esc_html__( 'Related by categories', 'clearbook' ),
		'tags'		=> esc_html__( 'Related by tags', 'clearbook' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'clearbook' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'clearbook' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearbook' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'clearbook' ),
		'content'	=> esc_html__( 'Below content', 'clearbook' ),
	),
) );
// Header: Search
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'clearbook' ),
	'description'	=> esc_html__( 'Header search button', 'clearbook' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'clearbook' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearbook' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'clearbook' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'clearbook' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'clearbook' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'clearbook' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'clearbook' ),
	'description'	=> esc_html__( 'A short description of you', 'clearbook' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'clearbook' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'clearbook' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'clearbook' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'clearbook' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'clearbook' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'clearbook' ),
	'description'	=> esc_html__( 'Footer credit text', 'clearbook' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'clearbook' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'clearbook' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'clearbook' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'clearbook' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'clearbook' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'clearbook' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'clearbook' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'clearbook' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'clearbook' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function clearbook_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'clearbook' ),
		'description'	=> esc_html__( '(is_home) Primary', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'clearbook' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'clearbook' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'clearbook' ),
		'description'	=> esc_html__( '(is_category) Primary', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'clearbook' ),
		'description'	=> esc_html__( '(is_search) Primary', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'clearbook' ),
		'description'	=> esc_html__( '(is_404) Primary', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	Kirki::add_field( 'clearbook_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'clearbook' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'clearbook' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearbook' ),
	) );
	
 } 
add_action( 'init', 'clearbook_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'clearbook' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'clearbook' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'clearbook' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearbook' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'clearbook' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'clearbook' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'clearbook' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'clearbook' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'clearbook' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearbook' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'clearbook' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'clearbook' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'clearbook' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'clearbook' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'clearbook' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'clearbook' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'clearbook' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'clearbook' ),
	'description'	=> esc_html__( 'Select font for the theme', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'playfair-display',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'clearbook' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'clearbook' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'clearbook' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'clearbook' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'clearbook' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'clearbook' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'clearbook' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'clearbook' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'clearbook' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'clearbook' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'clearbook' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'clearbook' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'clearbook' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'clearbook' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'clearbook' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'clearbook' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'clearbook' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'clearbook' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'clearbook' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'clearbook' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'clearbook' ),
		'arial'					=> esc_html__( 'Arial', 'clearbook' ),
		'georgia'				=> esc_html__( 'Georgia', 'clearbook' ),
		'verdana'				=> esc_html__( 'Verdana', 'clearbook' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'clearbook' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'clearbook' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '1080',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'clearbook' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '800',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'clearbook' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'clearbook' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'clearbook' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'clearbook' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Header Color
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Social Sidebar Color
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar Color', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '#f4f4f4',
) );
// Styling: Featured Background
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-featured',
	'label'			=> esc_html__( 'Featured Background', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '#e54927',
) );
// Styling: Background Color
Kirki::add_field( 'clearbook_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'clearbook' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
