<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };




$wp_customize->add_section(
	"{$slug}_contacts",
	array(
		'title'            => __( 'Контакты', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'priority'         => 10,
		'description'      => __( 'Список контактов организации. Телефоны разделять запятыми!', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'panel'            => $slug
	)
); /**/



foreach ( array(
	'phone'   => __( 'Телефон', PARKING_PAGE_ACT_TEXTDOMAIN ),
	'email'   => __( 'Email', PARKING_PAGE_ACT_TEXTDOMAIN ),
	'address' => __( 'Адрес', PARKING_PAGE_ACT_TEXTDOMAIN ),
) as $key => $label ) {
	$wp_customize->add_setting(
		"{$slug}_contacts[{$key}]",
		array(
			'default'           => '',
			'transport'         => 'reset',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		"{$slug}_contacts[{$key}]",
		array(
			'section'           => "{$slug}_contacts",
			'label'             => $label,
			'type'              => 'text',
		)
	); /**/
}