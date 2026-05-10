<?php
/**
 * Plugin core class file.
 *
 * @package MyPlugin
 */

namespace MyPlugin;

/**
 * Main Plugin class.
 */
class Plugin {

	/**
	 * Initialize the plugin.
	 *
	 * @return void
	 */
	public static function init(): void {
		add_action( 'init', array( self::class, 'boot' ) );
	}

	/**
	 * Boot the plugin logic.
	 *
	 * @return void
	 */
	public static function boot(): void {
		// Plugin boot logic.
	}

	/**
	 * Calculate the sum of two integers.
	 *
	 * @param int $a First number.
	 * @param int $b Second number.
	 * @return int
	 */
	public static function sum( int $a, int $b ): int {
		return $a + $b;
	}
}
