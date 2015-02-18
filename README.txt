=== Plugin Name ===
Contributors: Houghtelin
Tags: Vacation Rental Platform, Gueststream, VRP Connector, ISILink, HomeAway, Escapia
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Vacation Rental Platform Connector allows you to display and book your vacation rental properties on your site.

== Description ==

The Vacation Rental Property Connector plugin by Gueststream, Inc. allows you to sync all of your vacation rental
properties from a wide variety of property management software to your website allowing potential guests to
search, sort, compare and book your rental properties right from your website.

= Example Sites =
* http://www.grandcaymanvillas.net
* http://www.breckenridgeloging.com
* http://www.mauihawaiivacations.com
* http://www.tellurideluxury.com


== Installation ==

1. Download the ZIP file from https://github.com/Gueststream-Inc/VRPConnector
1. Extract the contents of the zip file and upload the resulting folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Navigate to Wordpress Admin > VRP > API Key and enter your Gueststream.net API key
1. Begin adding the available shortcodes to your posts and pages as desired.

== Frequently Asked Questions ==

= What property management software(s) does the VRP Connector support? =

HomeAway, ISILink, Escapia, Barefoot, RNS.

= Does the VRP Connector require an account with Gueststream.net? =

Yes, Gueststream.net provides the back-end service of interfacing with many property management software APIs that allows
you to seamlessly connect your website to your property management software data.

== Changelog ==

= 1.0 =
* Initial Release

== Shortcodes ==

The following shortcodes are available for use throughout your website.  To use them simply add them to the page/post content.

* [vrpAdvancedSearch] - Will display an advanced search for users to search your properties.
* [vrpComplexes] - Will display a list of all your complexes
* [vrpSpecials] - Displays all available specials
* [vrpUnits] - Displays a list of all enabled units
* [vrpSearch] - Accepts many additional values and displays units according to the values set.