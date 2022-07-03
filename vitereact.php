<?php
/**
 * Plugin Name:       Vite React
 * Description:       A Vite React platform made by WordPress React 18.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Jamaal Mahamed
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vitereact
 */

add_action( 'admin_menu', 'vitereact_init_menu' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
function vitereact_init_menu() {
    add_menu_page( __( 'Vite React', 'vitereact'), __( 'Vite React', 'vitereact'), 'manage_options', 'vitereact', 'vitereact_admin_page', 'dashicons-plugins-checked', '50' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function vitereact_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/tmpl_vitereact.php'; // plugin_dir_path marka rabto inaad soo gashato pagekaan ku xiratiid
}

add_action( 'admin_enqueue_scripts', 'vitereact_admin_enqueue_scripts' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function vitereact_admin_enqueue_scripts() {
    // $valid_pages = array("etc","etc","etc");
		$valid_pages = array("vitereact");
		// we have to read the paremiter page value after ? for example we get vitereact after ?page=... if we are in that position we will use.;
		$page = isset($_REQUEST['page']) ? isset($_REQUEST['page']) : '';

        // we will check again to compare if our array value pages is valid inside variable $page
        if(in_array($page,$valid_pages)){
        // wp_enqueue_style iyo wp_enqueue_script wordpress aya usheegesa styleka iyo script istacmaali laha mesha taalo.
        wp_enqueue_style( 'vitereact-style', plugin_dir_url( __FILE__ ) . 'build/main.bundle.css' ); // plugin_dir_url marka rabto inaad usheegto mesha fileka ku yaalo,sida css iyo js
        wp_enqueue_script( 'vitereact-script', plugin_dir_url( __FILE__ ) . 'build/main.bundle.js', array( 'wp-element' ), '1.0.0', true );

        }
}