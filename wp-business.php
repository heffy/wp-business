 <?php

 /*
   Plugin Name: PP - Business Post
 */

 //Exit if accessed directly
if( ! defined('ABSPATH')){
	exit;
}

require ( plugin_dir_path(__FILE__). 'wp-business-cpt.php');
require ( plugin_dir_path(__FILE__). 'wp-business-render-admin.php');
require ( plugin_dir_path(__FILE__). 'wp-business-fields.php');