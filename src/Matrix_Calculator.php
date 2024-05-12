<?php
/**
 * File doc.
 *
 * @package Matrix_Calculator
 */

namespace Hello_World;

/**
 * Class documentation.
 */
class Matrix_Calculator {

	/**
	 * Output the string.
	 *
	 * @param string $text The string.
	 *
	 * @return void
	 */
	public function write( string $text ): void {
		echo esc_html( $text );
	}
}
