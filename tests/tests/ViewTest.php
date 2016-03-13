<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class ViewTest extends \PHPUnit_Framework_TestCase
{
	public function test_footer() {
		$view = new Felis\View();

		$this->assertContains('<footer><p>Copyright © 2016 Felis Investigations, Inc. All rights reserved.</p></footer>',
			$view->footer());
	}

	public function test_header() {
		$view = new Felis\View();
		$view->setTitle('Definitely Not Felis Investigations');
		$this->assertContains('<meta charset="utf-8">', $view->head());
		$this->assertContains('<title>Definitely Not Felis Investigations</title>', $view->head());
		$this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $view->head());
		$this->assertContains('<link rel="stylesheet" href="lib/css/felis.css">', $view->head());
	}
}

/// @endcond
?>
