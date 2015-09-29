<?php
/*
Plugin Name: PyroSteveJr - Fix Low Join Limit
Version: 1.0
Plugin URI: http://pyrostevejr.com/
Description: Fix for hosts with low join limit
Author: Stephen Phillips (PyroSteveJr)
Author URI: http://pyrostevejr.com/
*/

add_action('init', 'pyrostevejr_allow_large_joins');
function pyrostevejr_allow_large_joins(){
	global $wpdb;
	$wpdb->query('SET SQL_BIG_SELECTS=1');
}