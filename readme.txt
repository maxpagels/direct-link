=== Plugin Name ===
Contributors: maxpagels
Tags: links
Requires at least: 4.3.0
Tested up to: 4.3.1
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Direct link allows your post title links to link directly to external sites.

== Description ==

Direct link allows your post title permalinks to link directly to external sites. It can also be used to link to a particular page of your own site.

== Installation ==

1. Upload the `directlink` directory and its contents to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. When writing a post, add a custom field with the key 'direct_link'. The value should be the full URL (including http://) of the page
you want to link to

== Frequently Asked Questions ==

= The plugin doesn't work! =

Direct link makes use of the `post_link` filter in WordPress. If your theme doesn't use the `get_permalink()` function to retrieve post permalinks, the plugin will not work.

== Changelog ==

= 1.0 =
* First version, hooray!