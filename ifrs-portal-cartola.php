<?php
defined('ABSPATH') or die('No script kiddies please!');
/*
Plugin Name: IFRS Portal Cartola
Plugin URI:  https://github.com/IFRS/portal-plugin-cartola
Description: Plugin para definir seleção única das categorias de um post (cartola).
Version:     1.1.0
Author:      Ricardo Moro
Author URI:  https://github.com/ricardomoro
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
Text Domain: ifrs-portal-plugin-cartola
Domain Path: /lang
*/

if ( file_exists( dirname( __FILE__ ) . '/vendor/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/vendor/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/CMB2/init.php';
}

require_once('cartola.php');
