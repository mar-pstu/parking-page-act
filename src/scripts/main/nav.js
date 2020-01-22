/* Навигационное меню */
jQuery( document ).ready( function () {


	jQuery( 'body' ).on( 'click', '#burger, #close, #mobilenav .bg', function() {
		if ( jQuery( 'body' ).attr( 'data-nav' ) == 'active' ) {
			jQuery( '#mobilenav' ).removeClass( 'active' );
			jQuery( '#burger' ).removeClass( 'active' );
			jQuery( 'body' ).attr( 'data-nav', 'inactive' ).css( { 'overflow': 'auto' } );
		} else {
			jQuery( '#mobilenav' ).addClass( 'active' );
			jQuery( '#burger' ).addClass( 'active' );
			jQuery( 'body' ).attr( 'data-nav', 'active' ).css( { 'overflow': 'hidden' } );
		}
	} );


	jQuery( '#nav-list' ).clone().removeClass().appendTo( jQuery( '#mobilenav-list' ) );


} );