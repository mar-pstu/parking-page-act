<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



function render_socials_list( $socials = array() ) {
	$result = __return_empty_array();
	if ( function_exists( 'pll__' ) ) {
		foreach ( $socials as $key => &$value ) {
			if ( ! empty( trim( $value ) ) ) {
				$value = pll__( $value );
			}
		}
	}
	foreach ( array(
		'facebook'  => __( 'Facebook', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'twitter'   => __( 'Twitter', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'instagram' => __( 'Instagram', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'youtube'   => __( 'YouTube', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'linkedin'  => __( 'LinkedIn', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'ok'        => __( 'Одноклассники', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'vk'        => __( 'ВКонтакте', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'github'    => __( 'GitHub', PARKING_PAGE_ACT_TEXTDOMAIN ),
	) as $key => $label ) {
		if ( isset( $socials[ $key ] ) && ! empty( $socials[ $key ] ) ) {
			$result[] = sprintf(
				'<li class="%1$s"><a href="%2$s" target="_blank"><span class="sr-only">%3$s</span></a></li>',
				$key,
				esc_attr( $socials[ $key ] ),
				$label
			);
		}
	}
	return ( empty( $result ) ) ? __return_empty_string() : '<ul class="socials">' . implode( "\r\n", $result ) . '</ul>';
}



function render_phones_list( $phones ) {
	$result = __return_empty_array();
	$phones = explode( ',', $phones );
	foreach ( $phones as $phone ) {
		$result[] = sprintf(
			'<li><a href="tel:%1$s">%2$s</a></li>',
			esc_attr( preg_replace( '/[^0-9]/', '', $phone ) ),
			$phone
		);
	}
	return ( empty( $result ) ) ? __return_empty_string() : '<ul class="phones">' . implode( "\r\n", $result ) . '</ul>';
}


function render_emails_list( $emails ) {
	$result = __return_empty_array();
	$emails = wp_parse_list( $emails );
	foreach ( $emails as $email ) {
		$result[] = sprintf(
			'<li><a href="mailto:%1$s">%2$s</a></li>',
			esc_attr( $email ),
			$email
		);
	}
	return ( empty( $result ) ) ? __return_empty_string() : '<ul class="emails">' . implode( "\r\n", $result ) . '</ul>';
}




function get_languages_list() {
	$result = __return_empty_array();
	if ( ( function_exists( 'pll_the_languages' ) ) && ( function_exists( 'pll_current_language' ) ) ) {
		$current = pll_current_language( 'slug' );
		$other = pll_the_languages( array(
			'dropdown'           => 0,
			'show_names'         => '',
			'display_names_as'   => 'slug',
			'show_flags'         => 0,
			'hide_if_empty'      => 0,
			'force_home'         => 0,
			'echo'               => 0,
			'hide_if_no_translation' => 0,
			'hide_current'       => 0,
			'post_id'            => ( is_singular() ) ? get_the_ID() : NULL,
			'raw'                => 1,
		) );
		if ( is_array( $other ) && count( $other ) > 1 ) {
			foreach ( $other as $lang ) $result[] = sprintf(
				( $lang[ 'slug' ] == $current ) ? '<li class="current">%2$s</li>' : '<li><a href="%1$s">%2$s</a></li>',
				$lang[ 'url' ],
				$lang[ 'name' ]
			);
		}
	}
	if ( ! empty( $result ) ) echo '<ul class="languages">' . implode( "\r\n", $result ) . '</ul>';
}