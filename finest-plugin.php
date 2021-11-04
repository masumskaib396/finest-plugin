<?php
/*
Plugin Name: Finest Plugin
Plugin URI:
Description:
Version: 1.0
Author: msakib
Author URI: https://profiles.wordpress.org/msakib/
License: GPLv2 or later
Text Domain: finest-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Set plugin version constant.
define( 'FINEST_VERSION', '1.0');

/* Set constant path to the plugin directory. */
define( 'FINEST', trailingslashit( plugin_dir_path( __FILE__ ) ) );

// Plugin Function Folder Path
define( 'FINEST_INC', plugin_dir_path( __FILE__ ) . 'includes/' );

// Assets Folder URL
define( 'FINEST_ASSETS', plugins_url( 'assets', __FILE__ ) );


require_once( FINEST_INC . 'base.php' );

