<?php
/**
 * Plugin Name: KC FAB
 * Plugin URI: https://github.com/katrincwl/kc_fab_wpp
 * Description: KC FAB is a jQuery plugin to create materialize floating action button easily.
 * Version: 1.0.0
 * Author: Mark Luk
 * Author URI: https://github.com/katrincwl
 * License: A short license name. Example: MIT
 */

/* If this file is called directly, abort. */
if ( ! defined( 'WPINC' ) ) {
    die;
}

/* Include core class */
require plugin_dir_path( __FILE__ ) . 'includes/class-kc-fab-wpp.php';

/* Call when activate plugin  */
function activate_plugin_name() {

}

/* Call when deactivate plugin */
function deactivate_plugin_name() {

}


/* Register hooks */
register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );


function execute_plugin() {

    $plugin = new Kc_Fab_Wpp();
//    $plugin->run();

}
execute_plugin();