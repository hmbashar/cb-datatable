<?php 
/*
Plugin Name: CB Datatable
Plugin URI: https://github.com/hmbashar/cb-datatable
Description: CB Datatable
Version: 1.0.0
Author: Md Abul Bashar
Author URI: http://hmbashar.com
Text Domain: cb-datatable
Domain Path: /languages
*/

define('CB_DATATABLE_VERSION', '1.0');
define('CB_DATATABLE_DIR', plugin_dir_path(__FILE__));
define('CB_DATATABLE_URL', plugin_dir_url(__FILE__));

function cb_datatable_admin_menu() {

    add_menu_page( 'CB Datatable', 'CB Datatable', 'manage_options', 'cb-datatable', 'cb_datatable_page_callback' );
}

add_action( 'admin_menu', 'cb_datatable_admin_menu' );


function cb_datatable_page_callback() {
    ob_start();
    include CB_DATATABLE_DIR . 'templates/cb-datatable.php';
    $output = ob_get_contents();
    ob_end_clean();
    echo $output;    
}