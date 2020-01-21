<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



?>

<nav class="nav" id="nav">
	<?php
		wp_nav_menu( array(
			'theme_location'  => 'main',
			'menu'            => 'main',
			'container'       => false,
			'menu_class'      => 'nav__list list',
			'menu_id'         => 'nav-list',
			'echo'            => true,
			'depth'           => 2,
		) );
	?>
	<button class="burger" id="burger">
		<span class="label"><?php _e( 'Открыть меню', PARKING_PAGE_ACT_TEXTDOMAIN ); ?></span>
		<span class="icon">
			<span class="bar bar1"></span>
			<span class="bar bar2"></span>
			<span class="bar bar3"></span>
		</span>
	</button>
</nav>