<?php

class CalculatorTest extends WP_UnitTestCase {

	public function testIsString() {
		$this->assertIsString( 'hello' );
	}

	public function testIsNotArray() {
		$value = 'hello';

		$this->assertIsArray( $value );
	}

}
