<?php
/**
 * Plugin Name: VRPConnector
 * Plugin URI: http://www.gueststream.com/apps-and-tools/vrpconnector/ 
 * Description: Vacation Rental Platform Connector.
 * Author: GuestStream, Inc.
 * Version: 0.06
 * Author URI: http://www.gueststream.com/ 
 */

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/lib/DummyResult.php";
require __DIR__ . "/lib/calendar.php";

$vrp = new \Gueststream\VRPConnector;

if (is_admin()) {
    new \Gueststream\PluginUpdater( __FILE__, 'Gueststream-Inc', "VRPConnector" );
}
