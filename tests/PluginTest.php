<?php
/**
 * Plugin tests file.
 *
 * @package MyPlugin
 */

use PHPUnit\Framework\TestCase;
use MyPlugin\Plugin;

/**
 * Class PluginTest
 */
class PluginTest extends TestCase {

	/**
	 * Test the sum function.
	 *
	 * @return void
	 */
	public function test_sum(): void {
		$this->assertEquals( 4, Plugin::sum( 2, 2 ) );
	}
}
