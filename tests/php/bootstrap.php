<?php
/**
 * PHPUnit bootstrap file
 *
 * @package Your_Plugin_Slug
 */

$_tests_dir = dirname(__FILE__ ) . '/../../wordpress-tests-lib';

var_dump( $_tests_dir);
if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
    echo "Could not find $_tests_dir/includes/functions.php, have you run bin/install-wp-tests.sh ?" . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    exit( 1 );
}

// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
