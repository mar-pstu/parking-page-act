<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



$bgi = get_theme_mod( PARKING_PAGE_ACT_SLUG . '_home_bgi', PARKING_PAGE_ACT_URL . 'images/bg.jpg' );


?>

<html <?php language_attributes(); ?>>
	<?php get_template_part( 'parts/head' ); ?>
	<body <?php body_class(); ?> data-nav="inactive">
		<?php get_template_part( 'parts/mobilenav' ); ?>
		<div class="wrapper" id="wrapper">
			<div class="wrapper__bg bg" style="background-image: url( '<?php echo esc_attr( $bgi ); ?>' )"></div>
			<header class="wrapper__item wrapper__item--header header" id="header">
				<div class="container">
					<?php
						the_custom_logo();
						if ( has_nav_menu( 'main' ) ) {
							get_template_part( 'parts/nav' );
						}
						echo get_languages_list();
					?>
				</div>
			</header>
			<main class="wrapper__item wrapper__item--main main" id="main">