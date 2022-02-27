<?php

/**
 *  GroundCTRL Framework 
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 */

$theme_version = '1.0.0';

/* Theme Setup */
require_once get_template_directory() . '/inc/setup.php'; 

/* Include CSS & JavaScript */
require_once get_template_directory() . '/inc/enqueues.php'; 

/* Register navmenus */
require_once get_template_directory() . '/inc/navmenus.php'; 

/* Register sidebars */
require_once get_template_directory() . '/inc/sidebars.php'; 

/* Nav Walker */
require_once get_template_directory() . '/inc/lib/class-wp-bootstrap-navwalker.php'; 

/* Register Custom Post Types & Taxonomies */
foreach ( glob( get_template_directory() . '/inc/cpt/*.php' ) as $cpt ) {
	require_once $cpt;
}; 
