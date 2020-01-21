<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



?>

<div class="container">
	<?php if ( ! empty( trim( $title ) ) ) : ?>
		<h1 class="title"><?php echo $title; ?></h1>
	<?php endif; ?>
	<?php if ( ! empty( trim( $description ) ) ) : ?>
		<p class="description"><?php echo $description; ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $contacts ) ) : ?>
		<div class="contacts" role="list">
			<?php
				foreach ( $contacts as $key => &$value ) {
					if ( ! empty( $value ) ) {
						$result = __return_empty_string();
						if ( 'email' == $key ) {
							$result = render_emails_list( $value );
						} elseif ( 'phone' == $key ) {
							$result = render_phones_list( $value );
						} else {
							$result = '<p>' . $value . '</p>';
						}
						printf(
							'<div class="box box--%1$s" role="listitem">%2$s</div>',
							$key,
							$result
						);
					}
				}
			?>
		</div>
	<?php endif; ?>
	<?php echo $socials; ?>
</div>