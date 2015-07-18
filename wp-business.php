<?php
/*
Plugin Name: Purely Penzance Custom Business Post
Plugin URI: https://github.com/heffy/wp-business
Description: A custome porst type for recording business details
Author: Jacques Heffernan
Version: 1.0
Author URI: http://www.jacquesheffernan.co.uk
*/

//Exit if accessed directly
if( ! defined('ABSPATH')){
	exit;
}

require ( plugin_dir_path(__FILE__). 'wp-business-cpt.php');
require ( plugin_dir_path(__FILE__). 'wp-business-fields.php');
?>
