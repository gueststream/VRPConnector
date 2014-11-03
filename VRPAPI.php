<?php
/*
  Plugin Name: Vacation Rental Platform Connector
  Plugin URI: http://www.gueststream.com
  Description: Utilizes the VRPc API.
  Author: GuestStream, Inc.
  Version: 1.11
  Author URI: http://www.gueststream.com/ 
 */
$vrpVersion = "1.11";
session_start();

include "lib/DummyResult.php";
include "lib/api.php";
include "lib/calendar.php";

$vrp = new vrpapi();

