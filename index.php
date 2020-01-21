<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



get_header();



$title = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_home_title', get_bloginfo( 'name' ) );
$description = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_home_description', get_bloginfo( 'description' ) );
$socials = render_socials_list( get_theme_mod( PARKING_PAGE_ACT_SLUG . '_socials', array() ) );
$contacts = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_contacts', array() );

if ( function_exists( 'pll__' ) ) {
	$title = pll__( $title );
	$description = pll__( $description );
	foreach ( $contacts as $key => &$value ) {
		if ( ! empty( trim( $value ) ) ) {
			$value = pll__( $value );
		}
	}
}

include get_theme_file_path( 'views/home.php' );



get_footer();