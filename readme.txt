=== WP Tinkerwell ===
Contributors: hwk-fr
Donate link: https://hwk.fr
Tags: tinkerwell, debug, log
Requires at least: 4.9
Tested up to: 5.3
Requires PHP: 5.6
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Tinkerwell integration allowing to log anything in WordPress.

== Description ==

Welcome to WP Tinkerwell!

This plugin aims to provide a better integration between WordPress and the Tinkerwell application.

== Usage ==

1. Install & activate WP Tinkerwell plugin
2. Add the following code anywhere in your plugin or theme: `tinkerwell($my_var);`
3. Add the following code in the Tinkerwell application: `do_action('tinkerwell');`
4. Run the Tinkerwell preview to display logs

Note: `tinkerwell()` function accepts unlimited arguments and will only print logs during the Tinkerwell preview. Example: `tinkerwell($my_var, $my_var_2, my_function());`

== Why making this plugin? ==

Tinkerwell is an amazing tool which can greatly help developers to test, create and debug code. The application provide a native WordPress driver integration, but debugging plugins and themes isn't really easy out of the box. This plugin is here to fill the gap and make Tinkerwell even more awesome!

== Requirements ==

This plugin requires a Tinkerwell licence and app installed on your local development environment. To learn more about Tinkerwell, please visit: https://tinkerwell.app/.

== Compatibility ==

This plugin has been tested with native Tinkerwell app, Tinkerwell PHP Storm & Tinkerwell VSCode built-in plugins.

== Note ==

This plugin is not created or affiliated to Tinkerwell authors and developers.