<?php
/**
 * File comment.
 *
 * @package Calculator
 */

namespace Hello_World;

/**
 * The calculator class.
 */
class Calculator {

	/**
	 * Add two numbers.
	 *
	 * @param int $number1 The first number.
	 * @param int $number2 The second number.
	 *
	 * @return int
	 */
	public function add( int $number1, int $number2 ): int {
		return $number1 + $number2;
	}

	public function multiply( $number1, $number2 ) {
		return $number1 * $number2;
	}
}
