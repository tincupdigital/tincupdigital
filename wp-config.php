<?php
/**
 * wp-config.php
 *
 * @package WordPress
 */

// check if development config file exists
if ( file_exists( dirname( __FILE__ ) . '/dev-config.php' ) ) {

  // set dev variable to true
  define( 'WP_LOCAL_DEV', true );

  // include development config file
  include( dirname( __FILE__ ) . '/dev-config.php' );

} else {

  // set dev variable to false
  define( 'WP_LOCAL_DEV', false );

  // include production config file
  include( dirname( __FILE__ ) . '/prd-config.php' );

}