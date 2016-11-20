<?php
/**
 * soil-setup.php
 *
 * @package _s
 */

/**
 * Cleaner WP markup
 */
add_theme_support( 'soil-clean-up' );

/**
 * Disable trackbacks
 */
add_theme_support( 'soil-disable-trackbacks' );

/**
 * Load jQuery from CDN
 */
add_theme_support( 'soil-jquery-cdn' );

/**
 * Move all JS to footer
 */
add_theme_support( 'soil-js-to-footer' );

/**
 * Cleaner search URL
 */
add_theme_support( 'soil-nice-search' );

/**
 * Google Analytics
 */
add_theme_support( 'soil-google-analytics', 'UA-68600644-1' );
