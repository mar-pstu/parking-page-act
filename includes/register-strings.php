<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



/**
 * Перевод строк
 **/
foreach ( array(
    'home_title',
    'home_description',
) as $key ) {
    $value = wp_strip_all_tags( get_theme_mod( PARKING_PAGE_ACT_SLUG . '_' . $key, '' ) );
    if ( ! empty( $value ) ) {
        pll_register_string( $key, $value, PARKING_PAGE_ACT_TEXTDOMAIN, false );
    }
}



/**
 *  "Перевод" ссылок на социальные сети
 **/
$socials = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_socials', array() );
foreach ( $socials as $key => $url ) {
	if ( ! empty( trim( $url ) ) ) {
		pll_register_string( "socials_{$key}", $url, PARKING_PAGE_ACT_TEXTDOMAIN, false );
	}
}



/**
 *  Перевод контактных данных
 **/
$contacts = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_contacts', array() );
foreach ( $contacts as $key => $value ) {
	if ( ! empty( trim( $value ) ) ) {
		pll_register_string( "contacts_{$key}", $value, PARKING_PAGE_ACT_TEXTDOMAIN, false );
	}
}