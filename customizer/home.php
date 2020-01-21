<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



$wp_customize->add_section(
	"{$slug}_home",
	array(
		'title'            => __( 'Информация', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'priority'         => 10,
		'description'      => '',
		'panel'            => $slug
	)
); /**/



$wp_customize->add_setting(
	"{$slug}_home_title",
	array(
		'default'           => get_bloginfo( 'name' ),
		'transport'         => 'reset',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	"{$slug}_home_title",
	array(
		'section'           => "{$slug}_home",
		'label'             => __( 'Заголовок', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'type'              => 'text',
	)
); /**/



$wp_customize->add_setting(
	"{$slug}_home_description",
	array(
		'default'           => get_bloginfo( 'description' ),
		'transport'         => 'reset',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);
$wp_customize->add_control(
	"{$slug}_home_description",
	array(
		'section'           => "{$slug}_home",
		'label'             => __( 'Подзаголовок', PARKING_PAGE_ACT_TEXTDOMAIN ),
		'type'              => 'textarea',
	)
); /**/


$wp_customize->add_setting(
	"{$slug}_home_bgi",
	array(
		'default'           => PARKING_PAGE_ACT_URL . 'images/bg.jpg',
		'transport'         => 'reset',
		'sanitize_callback' => 'sanitize_url',
	)
);
$wp_customize->add_control(
   new \WP_Customize_Image_Control(
	   $wp_customize,
	   "{$slug}_home_bgi",
	   array(
		   'label'      => __( 'Фон', PARKING_PAGE_ACT_TEXTDOMAIN ),
		   'section'    => "{$slug}_home",
		   'settings'   => "{$slug}_home_bgi"
	   )
   )
);