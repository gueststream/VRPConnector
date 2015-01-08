<?php
/**
 * Plugin Name: VRPConnector
 * Plugin URI: http://www.gueststream.com
 * Description: Vacation Rental Platform Connector.
 * Author: GuestStream, Inc.
 * Version: 0
 * Author URI: http://www.gueststream.com/ 
 */
error_reporting(-1);
ini_set("display_errors",1);

require __DIR__ . "/vendor/autoload.php";
//require __DIR__ . "/lib/VRPConnector.php";
require __DIR__ . "/lib/DummyResult.php";
require __DIR__ . "/lib/calendar.php";
//require __DIR__ . "/lib/PluginUpdater.php";

$vrp = new \Gueststream\VRPConnector;

if ( is_admin() ) {
    new \Gueststream\PluginUpdater( __FILE__, 'Gueststream-Inc', "VRPConnector" );
}
