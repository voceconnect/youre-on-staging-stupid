<?php

/*
  Plugin Name: You're On Staging Stupid
  Description: Adds a notification to the bottom of the site so a user knows they're on staging.
  Version: 0.1.0
  Author: Michael Pretty (prettyboymp)
  Author URI: http://vocecommunications.com
  License: GPLv2
 */

add_action( 'wp_enqueue_scripts', 'youre_on_staging_enqueue' );
add_action( 'admin_enqueue_scripts', 'youre_on_staging_enqueue' );
add_action( 'login_enqueue_scripts', 'youre_on_staging_enqueue' );

function youre_on_staging_enqueue() {
	wp_enqueue_style( 'youre_on_staging', plugins_url( 'style.css', __FILE__ ), null, '0.1.0' );
	wp_enqueue_script( 'youre_on_staging', plugins_url( 'main.js', __FILE__ ), array( 'jquery' ), '0.1.0', true );
}
