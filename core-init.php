<?php 
/*
*
*	***** currency list woocommerce *****
*
*	This file initializes all CLW Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('CLW_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('CLW_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('CLW_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('CLW_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function clw_register_core_css(){
	switch ($_GET['page']) {
		case 'edit-wallet':
		case 'GXPKimnmNp':
			//wp_enqueue_style('clw-core', CLW_CORE_CSS . 'clw-core.css',null,time(),'all');
			break;
	}
	
};
add_action( 'admin_enqueue_scripts', 'clw_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function clw_register_core_js(){
// Register Core Plugin JS	
	switch ($_GET['page']) {
		case 'edit-wallet':
		case 'GXPKimnmNp':
			//wp_enqueue_script('clw-core', CLW_CORE_JS . 'clw-core.js','jquery',time(),true);
			break;
	}
	
};
add_action( 'admin_enqueue_scripts', 'clw_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( CLW_CORE_INC . 'clw-core-functions.php' ) ) {
	require_once CLW_CORE_INC . 'clw-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( CLW_CORE_INC . 'clw-ajax-request.php' ) ) {
	require_once CLW_CORE_INC . 'clw-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( CLW_CORE_INC . 'clw-shortcodes.php' ) ) {
	require_once CLW_CORE_INC . 'clw-shortcodes.php';
}