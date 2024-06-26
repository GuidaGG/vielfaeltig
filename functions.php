<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
			'secondary' => __( 'Secondary Menu', 'tailpress' ),
			'footer_1'=> __( 'Footer 1 Menu', 'tailpress' ),
			'footer_2'=> __( 'Footer 2 Menu', 'tailpress' ),
            'sticky_menu' => __( 'Sticky Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
	   // Pass data to JavaScript
	   wp_localize_script('tailpress', 'themeData', array(
        'templateDirectoryUri' => get_template_directory_uri(),
    ));
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


/**
 * Custom: allow SVG upload.
 */

 function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


/**
 * Custom: add Contact Section to customizer.
 */

 function my_customizer_sections($wp_customize) {
    $wp_customize->add_section('contact_info_section', array(
        'title'    => __('Contact Info', 'your-theme-textdomain'),
        'priority' => 30,
    ));

    // Add a setting for Contact Info with 'textarea' type
    $wp_customize->add_setting('contact_info_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field_with_line_breaks',
    ));

    // Add a control for Contact Info
    $wp_customize->add_control('contact_info_control', array(
        'label'    => __('Contact Info', 'your-theme-textdomain'),
        'section'  => 'contact_info_section',
        'settings' => 'contact_info_setting',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'my_customizer_sections');

// Sanitize textarea with line breaks
function sanitize_textarea_field_with_line_breaks($input) {
    return wp_kses_post(nl2br($input));
}

// Display the Contact Info in your theme
function display_contact_info() {
    $contact_info = get_theme_mod('contact_info_setting', '');

    if (!empty($contact_info)) {
        echo '<div class="contact-info">' . $contact_info . '</div>';
    }
}


/**
 * Custom: add Partner Section to Customizer
 */

function my_customizer_footer_section($wp_customize) {
    $wp_customize->add_section('partner_section', array(
        'title'    => __('Partner', 'tailpress'),
        'priority' => 200,
    ));

    // Add setting for Footer Images
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting('partner_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Add control for Footer Images
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_' . $i, array(
            'label'    => __('Image ' . $i, 'tailpress'),
            'section'  => 'partner_section',
            'settings' => 'partner_' . $i,
        )));
        
        // Add setting for URL
           $wp_customize->add_setting('partner_url_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Add control for URL
        $wp_customize->add_control('partner_url_' . $i, array(
            'label'    => __('URL ' . $i, 'tailpress'),
            'section'  => 'partner_section',
            'type'     => 'url', // Specify the control type as URL
            'settings' => 'partner_url_' . $i,
        ));
    }
}
add_action('customize_register', 'my_customizer_footer_section');

// Display Footer Images in your theme as links
/* function display_footer_images() {
    echo '<h3>Partner*innen</h3><div class="footer-images">';
	
    for ($i = 1; $i <= 6; $i++) {
        $image_url = get_theme_mod('partner_' . $i, '');
        $partner_url = get_theme_mod('partner_url_' . $i, '');

        if ($image_url && $partner_url) {
            echo '<a href="' . esc_url($partner_url) . '" target="_blank">';
            echo '<img src="' . esc_url($image_url) . '" alt="Partner ' . $i . '">';
            echo '</a>';
        }
        else if($image_url) {
            echo '<img src="' . esc_url($image_url) . '" alt="Partner ' . $i . '">';
        }
    }
    
    echo '</div>';
} */

/**
 * New system for repeating partnet logos using external plugin:kirki
 */

// Include Kirki
if ( class_exists( 'Kirki' ) ) {
    Kirki::add_config( 'theme_config_id', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    Kirki::add_section( 'partner_section', array(
        'title'          => esc_html__( 'Partner', 'tailpress' ),
        'priority'       => 200,
    ) );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Partners', 'tailpress' ),
        'section'     => 'partner_section',
        'priority'    => 10,
        'settings'    => 'partners_repeater',
        'default'     => [],
        'fields' => [
            'image' => [
                'type'        => 'image',
                'label'       => esc_html__( 'Image', 'tailpress' ),
                'default'     => '',
            ],
            'url' => [
                'type'        => 'url',
                'label'       => esc_html__( 'URL', 'tailpress' ),
                'default'     => '',
            ],
            'multiply' => [
                'description' => '(if logo does not have a transparent background)',
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Multiply', 'tailpress' ),
                'default'     => false,
            ],
            'invert' => [
                'description' => '(if the logo is black after grayscale)',
                'type'        => 'checkbox',
                'label'       => esc_html__( 'Invert', 'tailpress' ),
                'default'     => false,
            ],
        ],
    ] );
}

function display_footer_images() {
    $partners = get_theme_mod('partners_repeater', []);
    
    if (!empty($partners)) {
        echo '<h3>Partner*innen</h3><div class="footer-images">';
        

        foreach ($partners as $index => $partner) {
            $image_url = isset($partner['image']) ? $partner['image'] : '';
            $partner_url = isset($partner['url']) ? $partner['url'] : '';
            $multiply = isset($partner['multiply']) ? $partner['multiply'] : false;
            $invert = isset($partner['invert']) ? $partner['invert'] : false;

            $multiply_filter = $multiply ? 'mix-blend-multiply' : '';
            $invert_filter = $invert ? 'mix-blend-screen invert' : '';

            
                if ($image_url && $partner_url) {
                    echo '<a  href="' . esc_url($partner_url) . '" target="_blank">';
                    echo '<img class="grayscale '.$multiply_filter.' '.$invert_filter.'" src="' . esc_url($image_url) . '" alt="Partner ' . ($index + 1) . '">';
                    echo '</a>';
                } elseif ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Partner ' . ($index + 1) . '">';
                } 
            }
            
            echo '</div>';
        }
    }


/**
 * Logo with Aria-label information
 */

function custom_logo_with_aria_label() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    if (has_custom_logo()) {
        // Add aria-label to the custom logo link
        $custom_logo_output = sprintf(
            '<a href="%1$s" class="custom-logo-link" rel="home" aria-label="Startseite">%2$s</a>',
            esc_url(home_url('/')),
            sprintf(
                '<img src="%1$s" class="custom-logo" alt="%2$s">',
                esc_url($logo[0]),
                get_bloginfo('name', 'display')
            )
        );

        echo $custom_logo_output;
    } else {
        // Output default site title if there is no custom logo
        echo '<a href="' . esc_url(home_url('/')) . '" class="font-extrabold text-lg uppercase" aria-label="Startseite">' . get_bloginfo('name') . '</a>';
    }
}

// Hook into the get_custom_logo filter
add_filter('get_custom_logo', 'custom_logo_with_aria_label');

// Custom Walker class for changing primary menu links
class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Check if on homepage
        $is_homepage = is_home() || is_front_page();

        // Modify the link based on the current page
        if ( $is_homepage ) {
            $output .= '<li id="menu-item-'. $item->ID . '" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-' . $item->ID . '"><a href="#' . $item->post_name . '">' . $item->title . '</a>';
        } else {
            $output .= '<li id="menu-item-'. $item->ID . '" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-' . $item->ID . '"><a href="' . esc_url( home_url( '/' ) ) . '#' . $item->post_name . '">' . $item->title . '</a>';
        }
    }
}

/* customizer socia media buttons */

function my_customizer_social_media($wp_customize) {
    // Add Social Media Section
    $wp_customize->add_section('social_media_section', array(
        'title' => __('Social Media', 'tailpress'),
        'priority' => 30,
    ));

    // Add Instagram Field
    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label' => __('Instagram URL', 'tailpress'),
        'section' => 'social_media_section',
        'type' => 'text',
    ));

    // Add WhatsApp Field
    $wp_customize->add_setting('whatsapp_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('whatsapp_number', array(
        'label' => __('WhatsApp Number', 'tailpress'),
        'section' => 'social_media_section',
        'type' => 'text',
    ));

    // Add LinkedIn Field
    $wp_customize->add_setting('linkedin_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('linkedin_url', array(
        'label' => __('LinkedIn URL', 'tailpress'),
        'section' => 'social_media_section',
        'type' => 'text',
    ));

     // Add Facebook Field
     $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook_url', array(
        'label' => __('Facebook URL', 'tailpress'),
        'section' => 'social_media_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'my_customizer_social_media');

/* customizer pop up */


function custom_popup_customizer_section($wp_customize) {
 
    $wp_customize->add_section('custom_popup_section', array(
        'title'    => __('Pop-Up', 'text_domain'),
        'priority' => 160, // Nach Bedarf anpassen
    ));
    
    $wp_customize->add_setting('popup_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('popup_title', array(
        'label'    => __('Titel', 'text_domain'),
        'section'  => 'custom_popup_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('popup_subtitle', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('popup_subtitle', array(
        'label'    => __('Untertitel', 'text_domain'),
        'section'  => 'custom_popup_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('popup_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('popup_link', array(
        'label'    => __('Link', 'text_domain'),
        'section'  => 'custom_popup_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('popup_information', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('popup_information', array(
        'label'    => __('Informationen', 'text_domain'),
        'section'  => 'custom_popup_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('popup_toggle', array(
        'default'           => 'off',
        'sanitize_callback' => 'sanitize_key',
    ));
    
    $wp_customize->add_control('popup_toggle', array(
        'label'    => __('Pop-Up anzeigen', 'text_domain'),
        'section'  => 'custom_popup_section',
        'type'     => 'radio',
        'choices'  => array(
            'on'  => __('An', 'text_domain'),
            'off' => __('Aus', 'text_domain'),
        ),
    ));
}

add_action('customize_register', 'custom_popup_customizer_section');