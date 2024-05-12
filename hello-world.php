<?php
/**
 * Plugin Name:     Hello World
 * Plugin URI:      https://mainulhassan.com
 * Description:     A WordPress plugin boilerplate with WPCS, Testing, CI/CD for both testing and coding standards.
 * Author:          Mainul Hassan Main
 * Author URI:      https://mainulhassan.com
 * Text Domain:     hello-world
 * Domain Path:     /languages
 * Update URI:      https://mainulhassan.com
 * Version:         0.1.0
 *
 * @package         Hello_World
 */

use Hello_World\Matrix_Calculator;

require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

/**
 * Show result.
 *
 * @return void
 */
function hello_world_show_result() {
	$calculator = new \Hello_World\Calculator();

	echo esc_html( $calculator->add( 2, 5 ) );

	$matrix_calculator = new Matrix_Calculator();
	$matrix_calculator->write( "\n" );
	$matrix_calculator->write( 'hello world' );
	$array = array(
		'hello' => 'world',
	);
}

add_action( 'wp_head', 'hello_world_show_result' );
