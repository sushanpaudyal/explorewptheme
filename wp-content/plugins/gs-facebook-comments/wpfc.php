<?php
/**
 * Plugin Name: WP Facebook Comments
 * Plugin URI: http://genialsouls.com/
 * Description: The WP Facebook Comments plugin lets people comment on content on your site using their Facebook account.
 * Author: Qamar Sheeraz
 * Author URI: https://profiles.wordpress.org/qsheeraz
 * Version: 1.3
 * Stable tag: 1.3
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 require_once( 'classes/class-wpfc.php' );
 
 global $wpfc;
 $wpfc = new GS_WPFC( __FILE__ );
 $wpfc->version = '1.3';
 $wpfc->init();
?>