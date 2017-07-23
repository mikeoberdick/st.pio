<?php
/**
 * Setup Advanced Custom Fields
 *
 * @package understrap
 */

//Add the ACF options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Company Profile',
		'menu_title'	=> 'Company Profile',
		'menu_slug' 	=> 'company-profile'
	));
    
}
