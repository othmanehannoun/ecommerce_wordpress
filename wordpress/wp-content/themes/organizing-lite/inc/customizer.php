<?php    
/**
 *Organizing Lite Theme Customizer
 *
 * @package Organizing Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function organizing_lite_customize_register( $wp_customize ) {	
	
	function organizing_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function organizing_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'organizing_lite_optionpanel_wrap', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'organizing-lite' ),		
	) );
	
	//Site Layout Options
	$wp_customize->add_section('organizing_lite_sitelayout_option',array(
		'title' => __('Layout Options','organizing-lite'),			
		'priority' => 1,
		'panel' => 	'organizing_lite_optionpanel_wrap',          
	));		
	
	$wp_customize->add_setting('organizing_lite_boxlayout_option',array(
		'sanitize_callback' => 'organizing_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'organizing_lite_boxlayout_option', array(
    	'section'   => 'organizing_lite_sitelayout_option',    	 
		'label' => __('Check to Box Layout','organizing-lite'),
		'description' => __('If you want to box layout please check the Box Layout Option.','organizing-lite'),
    	'type'      => 'checkbox'
     )); // Layout Options
	
	$wp_customize->add_setting('organizing_lite_color_scheme',array(
		'default' => '#f2b23d',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'organizing_lite_color_scheme',array(
			'label' => __('Color Scheme Options','organizing-lite'),			
			'description' => __('More color options in available PRO Version','organizing-lite'),
			'section' => 'colors',
			'settings' => 'organizing_lite_color_scheme'
		))
	);	
	
	  //Header social icons
	$wp_customize->add_section('organizing_lite_social_section',array(
		'title' => __('Header social icons','organizing-lite'),
		'description' => __( 'Add social icons link here to display icons in header', 'organizing-lite' ),			
		'priority' => null,
		'panel' => 	'organizing_lite_optionpanel_wrap', 
	));
	
	$wp_customize->add_setting('organizing_lite_fb_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('organizing_lite_fb_link',array(
		'label' => __('Add facebook link here','organizing-lite'),
		'section' => 'organizing_lite_social_section',
		'setting' => 'organizing_lite_fb_link'
	));	
	
	$wp_customize->add_setting('organizing_lite_twitt_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('organizing_lite_twitt_link',array(
		'label' => __('Add twitter link here','organizing-lite'),
		'section' => 'organizing_lite_social_section',
		'setting' => 'organizing_lite_twitt_link'
	));
	
	$wp_customize->add_setting('organizing_lite_gplus_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('organizing_lite_gplus_link',array(
		'label' => __('Add google plus link here','organizing-lite'),
		'section' => 'organizing_lite_social_section',
		'setting' => 'organizing_lite_gplus_link'
	));
	
	$wp_customize->add_setting('organizing_lite_linked_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('organizing_lite_linked_link',array(
		'label' => __('Add linkedin link here','organizing-lite'),
		'section' => 'organizing_lite_social_section',
		'setting' => 'organizing_lite_linked_link'
	));
	
	$wp_customize->add_setting('organizing_lite_show_socialsection',array(
		'default' => false,
		'sanitize_callback' => 'organizing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'organizing_lite_show_socialsection', array(
	   'settings' => 'organizing_lite_show_socialsection',
	   'section'   => 'organizing_lite_social_section',
	   'label'     => __('Check To show This Section','organizing-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Social icons Section 	 
	
	// Slider Section		
	$wp_customize->add_section( 'organizing_lite_frontpage_slider_option', array(
		'title' => __('Slider Settings', 'organizing-lite'),
		'priority' => null,
		'description' => __('Default image size for frontpage slider is 1398 x 643 pixel.','organizing-lite'), 
		'panel' => 	'organizing_lite_optionpanel_wrap',           			
    ));
	
	$wp_customize->add_setting('organizing_lite_front_sliderpge1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'organizing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('organizing_lite_front_sliderpge1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide one:','organizing-lite'),
		'section' => 'organizing_lite_frontpage_slider_option'
	));	
	
	$wp_customize->add_setting('organizing_lite_front_sliderpge2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'organizing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('organizing_lite_front_sliderpge2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide two:','organizing-lite'),
		'section' => 'organizing_lite_frontpage_slider_option'
	));	
	
	$wp_customize->add_setting('organizing_lite_front_sliderpge3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'organizing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('organizing_lite_front_sliderpge3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide three:','organizing-lite'),
		'section' => 'organizing_lite_frontpage_slider_option'
	));	// Slider Section	
	
	$wp_customize->add_setting('organizing_lite_front_sliderpgemore',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('organizing_lite_front_sliderpgemore',array(	
		'type' => 'text',
		'label' => __('Add slider Read more button name here','organizing-lite'),
		'section' => 'organizing_lite_frontpage_slider_option',
		'setting' => 'organizing_lite_front_sliderpgemore'
	)); // Slider Read More Button Text
	
	$wp_customize->add_setting('organizing_lite_front_sliderpgeshowoption',array(
		'default' => false,
		'sanitize_callback' => 'organizing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'organizing_lite_front_sliderpgeshowoption', array(
	    'settings' => 'organizing_lite_front_sliderpgeshowoption',
	    'section'   => 'organizing_lite_frontpage_slider_option',
	    'label'     => __('Check To Show This Section','organizing-lite'),
	    'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	
	
		 
}
add_action( 'customize_register', 'organizing_lite_customize_register' );

function organizing_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .org_blogstyle_front h2 a:hover,
        #sidebar aside.widget ul li a:hover,								
        .org_blogstyle_front h3 a:hover,				
        .postmeta a:hover,
        .button:hover,		
        .sitefooter ul li a:hover, 
        .sitefooter ul li.current_page_item a,		
		.sitefooter ul li a:hover, 
		.sitefooter ul li.current_page_item a,
        .header_navigation ul li a:hover, 
        .header_navigation ul li.current-menu-item a,
        .header_navigation ul li.current-menu-parent a.parent,
        .header_navigation ul li.current-menu-item ul.sub-menu li a:hover				
            { color:<?php echo esc_html( get_theme_mod('organizing_lite_color_scheme','#f2b23d')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,					
        .nivo-controlNav a.active,        
		.sitefour_pagecolumn:hover,	
		.nivo-caption .slide_more,											
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,
		.social-icons a:hover,       		
        .toggle a	
            { background-color:<?php echo esc_html( get_theme_mod('organizing_lite_color_scheme','#f2b23d')); ?>;}	
		
		.button:hover
            { border-color:<?php echo esc_html( get_theme_mod('organizing_lite_color_scheme','#f2b23d')); ?>;}						
         	
    </style> 
<?php                                                    
}
         
add_action('wp_head','organizing_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function organizing_lite_customize_preview_js() {
	wp_enqueue_script( 'organizing_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20171016', true );
}
add_action( 'customize_preview_init', 'organizing_lite_customize_preview_js' );