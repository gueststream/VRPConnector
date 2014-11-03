=== Plugin Name ===
Contributors: Houghtelin
Tags: Vacation Rental Platform, Gueststream, VRP Connector, ISILink, HomeAway, Escapia
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Vacation Rental Platform Connector allows you to display and book your vacation rental properties on your site.

== Description ==




== Installation ==

1. Extract the contents of VRPAPI.zip and upload the resulting folder `VRPAPI` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Navigate to Wordpress Admin > VRP > API Key and enter your Gueststream.net API key
1. Begin adding your shortcodes to your posts and pages as desired.

== Frequently Asked Questions ==

= What property management software(s) does the VRP Connector support? =

HomeAway, ISILink, Escapia, Barefoot, RNS.

= Does the VRP Connector require an account with Gueststream.net? =

Yes.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.1 =
* Preparing plugin for distribution via wordpress.org/plugins

== Shortcodes ==

The following shortcodes are available for use throughout your website.  To use them simply add them to the page/post content.

* [vrpAdvancedSearch] - Will display an advanced search for users to search your properties.
* [vrpComplexes] - Will display a list of all your complexes
* [vrpSpecials] - Displays all available specials
* [vrpUnits] - Displays a list of all enabled units
* [vrpSearch] - Accepts many additional values and displays units according to the values set.