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
 * Felix's beispiel Klasse
 */
class FX{
    /**
     * Some example function to add a Text to every Page
     */
    public static function content($content){
        return $content .= "<p>Felix's Plugin sagt Hallo!</p>";
    }
}

add_action( "the_content", array('FX', "content"));
?>