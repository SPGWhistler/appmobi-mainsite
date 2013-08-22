<?php
if($_GET["q"]!=""){
    //header('Location: http://dev.appmobi.com/?q=' . $_GET["q"] );
	header('location: http://html5dev-software.intel.com');
    exit();
}
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
