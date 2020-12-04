<?php
/**
 * Plugin Name: The Events Calendar Extension: Temporary fix for datepicker jQuery issue
 * Description: Ensures that the Bootstrap datepicker for The Events Calendar loads correctly.
 * Version:     1.0.0
 *
 * @since The Events Calendar 5.3.0
 */

add_filter( 'tribe_events_views_v2_datepicker_no_conflict', '__return_true' );
