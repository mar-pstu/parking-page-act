<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



?>

<div class="mobilenav" id="mobilenav">
	<div class="bg navtoggle"></div>
	<div class="overlay">
		<div class="close" id="close">
			<span class="sr-only"><?php _e( 'Закрыть Меню', PARKING_PAGE_ACT_TEXTDOMAIN ); ?></span>
		</div>
		<?php get_languages_list(); ?>
		<h2><?php _e( 'Меню', PARKING_PAGE_ACT_TEXTDOMAIN ); ?></h2>
		<div id="mobilenav-list"></div>
	</div>
</div>