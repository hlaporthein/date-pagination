<?php
/**
 * PHPUnit bootstrap file
 *
 * @package Date_Pagination_Unit_Tests
 */


$_tests_dir = '/tmp/wordpress-tests-lib';


// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */
function _manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/date-pagination.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
require dirname( __FILE__ ) . '/../tests/utils.php';
