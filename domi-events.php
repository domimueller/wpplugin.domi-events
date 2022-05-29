<?php

/**
* Plugin Name: Veranstaltungen
* Plugin URI: 
* Description: Funktionalität für Veranstaltungen. Darstellung im Theme via template-events.php
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_events_customcss() {
    wp_enqueue_style( 'eventscss',  plugin_dir_url( __FILE__ ) . '/css/events.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_events_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/optionsPage.php';
include $plugin_url . '/includes/PostTypeAdvancedCustomFields.php';
include $plugin_url . '/includes/OptionsAdvancedCustomFields.php';



?>