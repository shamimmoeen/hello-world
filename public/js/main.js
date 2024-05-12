/**
 * The Main JavaScript File.
 */

( function() {
	function HelloWorld() {
		$( 'body' ).css( 'background-color', 'pink' );
	}

	HelloWorld();

	const a = '',
		b = '',
		c = '';

	// Bad.
	const html =
		'<p>The sum of ' +
		a +
		' and ' +
		b +
		' plus ' + c + ' is ' + ( a + b + c ) + '</p>';

	$( '.message' ).html( html );
}( jQuery ) );
