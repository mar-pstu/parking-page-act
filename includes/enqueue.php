<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



/**
 * Подключение скриптов
 *
 * @param string $handle Имя / идентификатор скрипта
 * @param string $src URL на файл скрипта
 * @param array $deps массив зависимостей
 * @param string|bool $ver версия
 * @param bool $in_footer подключать в шапке или подвале
 */
function scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script(
		'parking-page-act-main',
		PARKING_PAGE_ACT_URL . 'scripts/main.min.js',
		array( 'jquery' ),
		filemtime( PARKING_PAGE_ACT_DIR . 'scripts/main.min.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'parking_page_act\scripts' );




/**
 * Подключение файла стилей в шапку сайта
 **/
function ctitical_styles() {
	if ( file_exists( get_theme_file_path( 'styles/critical.min.css' ) ) ) {
		echo '<style type="text/css">' . file_get_contents( PARKING_PAGE_ACT_DIR . 'styles/critical.min.css' ) . '</style>';
	}
}
add_action( 'wp_head', 'parking_page_act\ctitical_styles', 10, 0 );