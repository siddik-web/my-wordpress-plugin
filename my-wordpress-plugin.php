<?php
/**
 * Plugin Name: My WordPress Plugin
 * Description: Sample WordPress plugin with GitHub Actions CI.
 * Version: 1.0.0
 * Author: MD Siddiqur Rahman
 *
 * @package My_WordPress_Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';

use MyPlugin\Plugin;

Plugin::init();
