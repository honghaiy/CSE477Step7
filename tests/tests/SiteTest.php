<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SiteTest extends \PHPUnit_Framework_TestCase
{
	public function emailGetterAndSetter() {
		$site = new Felis\Site();
		$site->setEmail("hello");
		$this->assertEquals("hello", $site->getEmail());

	}

	public function rootGetterAndSetter() {
		$site = new Felis\Site();
		$site->setRoot("hello");
		$this->assertEquals("hello", $site->getRoot());
	}

	public function test_localize() {
		$site = new Felis\Site();
		$localize = require 'localize.inc.php';
		if(is_callable($localize)) {
			$localize($site);
		}
		$this->assertEquals('test_', $site->getTablePrefix());
	}
}

/// @endcond
?>
