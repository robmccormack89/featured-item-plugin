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
if (!defined('FEATURED_ITEM_PATH')) define('FEATURED_ITEM_PATH', plugin_dir_path( __FILE__ ));
if (!defined('FEATURED_ITEM_URL')) define('FEATURED_ITEM_URL', plugin_dir_url( __FILE__ ));
if (!defined('FEATURED_ITEM_BASE')) define('FEATURED_ITEM_BASE', dirname(plugin_basename( __FILE__ )));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\FeaturedItem;

// require action functions 
require_once('inc/functions.php');
