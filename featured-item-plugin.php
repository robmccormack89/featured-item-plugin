<?php
/*
Plugin Name: Featured Item Section by RMcC
Plugin URI: #
Description: Adds featured item section via shortcode [featured_content_item_section]
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: featured-item
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('VIDEO_POPUP_PATH')) define('VIDEO_POPUP_PATH', plugin_dir_path( __FILE__ ));
if (!defined('VIDEO_POPUP_URL')) define('VIDEO_POPUP_URL', plugin_dir_url( __FILE__ ));
if (!defined('VIDEO_POPUP_BASE')) define('VIDEO_POPUP_BASE', dirname(plugin_basename( __FILE__ )));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\VideoPopup;

// require action functions 
require_once('inc/functions.php');
