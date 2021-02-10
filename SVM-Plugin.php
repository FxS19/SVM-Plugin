<?php
/**
 * SVM-Plugin
 *
 * @package           fxExample
 * @author            Felix Schmidt
 * @copyright         2020 WI19b
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:        SVM-Plugin
 * Plugin URI:        127.0.0.1/:%20P
 * Description:       Plugin zum Bereitstellen von Funktionen die für den SVM-Mergelstetten benötigt werden
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Felix Schmidt
 * Author URI:        -
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) or die( 'Something went wrong...' );

/**
 * Deaktiviere die Adminbar für Angemeldete Benutzer außer Administratoren, Authoren und Editoren
 * @param any content
 */
function my_function_admin_bar($content) {
    return (current_user_can( 'administrator' ) || current_user_can( 'author' ) || current_user_can( 'editor' ) ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/**
 * Weiterleitung zur Startseite nach dem Ausloggen
 */
function redirect_after_logout(){
	wp_redirect( home_url() );
	exit();
}
add_action('wp_logout', 'redirect_after_logout');

?>