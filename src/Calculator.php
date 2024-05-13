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

	/**
	 * Multiple two numbers.
	 *
	 * @param float $number1 The first number.
	 * @param float $number2 The second number.
	 *
	 * @return float
	 */
	public function multiply( float $number1, float $number2 ): float {
		return $number1 * $number2;
	}
}
