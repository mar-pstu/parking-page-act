<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



define( 'PARKING_PAGE_ACT_URL', get_template_directory_uri() . '/' );
define( 'PARKING_PAGE_ACT_DIR', get_template_directory() . '/' );
define( 'PARKING_PAGE_ACT_TEXTDOMAIN', 'parking-page-act' );
define( 'PARKING_PAGE_ACT_SLUG', 'parking_page_act' );



get_template_part( 'includes/enqueue' );
get_template_part( 'includes/template-functions' );



/**
 * Регистрация переводов строк
 */
if ( function_exists( 'pll_register_string' ) ) {
	include get_theme_file_path( 'includes/register-strings.php' );
}



/**
 * Регистрация настроек кастомайзера
 */
if ( is_customize_preview() ) {
	add_action( 'customize_register', function ( $wp_customize ) {
		$slug = PARKING_PAGE_ACT_SLUG;
		$wp_customize->add_panel(
			$slug,
			array(
				'capability'      => 'edit_theme_options',
				'title'           => __( 'Настройки Заглушки', PARKING_PAGE_ACT_TEXTDOMAIN ),
				'priority'        => 200
			)
		);
		include get_theme_file_path( 'customizer/home.php' );
		include get_theme_file_path( 'customizer/contacts.php' );
		include get_theme_file_path( 'customizer/socials.php' );
	} );
}



function parked_page_act_theme_supports() {
	add_theme_support( 'menus' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'parked_page_act_theme_supports' );



/**
 * Загрузка "переводов"
 */
function parking_page_act_load_textdomain() {
	load_theme_textdomain( PARKING_PAGE_ACT_TEXTDOMAIN, PARKING_PAGE_ACT_DIR . 'languages/' );
}
add_action( 'after_setup_theme', 'parking_page_act_load_textdomain' );



/**
 * Регистрация меню
 */
function parking_page_act_register_nav_menus() {
	register_nav_menus( array(
		'main'      => __( 'Главное меню', PARKING_PAGE_ACT_TEXTDOMAIN ),
	) );
}
add_action( 'after_setup_theme', 'parking_page_act_register_nav_menus' );