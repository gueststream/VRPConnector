<?php

/**
 * Plugin Name: VRPConnector
 * Plugin URI: http://www.gueststream.com/apps-and-tools/vrpconnector/ 
 * Description: Vacation Rental Platform Connector.
 * Author: GuestStream, Inc.
 * Version: 0.06
 * Author URI: http://www.gueststream.com/ 
 */
if ( !isset( $_SESSION ) ) {
	@session_start();
}
/** Constants needed throughout plugin: * */
define( 'VRP_URL', plugin_dir_url( __FILE__ ) );
define( 'VRP_PATH', dirname( __FILE__ ) . '/' );

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/lib/DummyResult.php";
require __DIR__ . "/lib/calendar.php";

$vrp = new \Gueststream\VRPConnector;

		
//Activation:
register_activation_hook( __FILE__, 'vrp_flush_rewrites' );
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );

/**
 * Flush rewrite rules upon activation/deactivation.
 */
function vrp_flush_rewrites() {
	\Gueststream\VRPConnector::rewrite();
	flush_rewrite_rules();
}
