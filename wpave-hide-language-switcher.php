<?php

/**
 * Plugin Name:       Hide Language Switcher
 * Plugin URI:        http://alexportfolio.space/
 * Description:       Hides language switcher feature from login screens introduced in WordPress ver. 5.9
 * Version:           1.0.0
 * Stable tag:        1.0.0
 * Author:            Alex M.
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpave-hide-language-switcher
 */

if (!defined('WPINC')) {
	die;
}

define('WPAVE_HIDE_LANGUAGE_SWITCHER', '1.0.0');

add_filter('login_display_language_dropdown', '__return_false');

add_filter('plugin_action_links_hide-language-switcher/wpave-hide-language-switcher.php', function ($links) {
	$links[] = '<a target="_blank" href="https://forms.gle/3TZmcCXru6HTZrQu8">Hire me</a>';
	
	return $links;
});