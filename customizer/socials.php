<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };




$wp_customize->add_section(
	"{$slug}_socials",
	array(
		'title'            => __( 'Социальные сети', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'priority'         => 10,
		'description'      => __( 'Список ссылок на страницы социальных сетей организации', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'panel'            => $slug
	)
); /**/



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
	$wp_customize->add_setting(
		"{$slug}_socials[{$key}]",
		array(
			'default'           => '',
			'transport'         => 'reset',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		"{$slug}_socials[{$key}]",
		array(
			'section'           => "{$slug}_socials",
			'label'             => $label,
			'type'              => 'text',
		)
	); /**/
}