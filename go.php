<?php
/**
 * Gogo - A concrete5 Helper Class
 * Use Gogo to rapidly prototype concrete5 themes
 *
 * @author    Mike Lay
 * @copyright 2013 Mike Lay
 * @license   MIT
 * Package Gogo
 */
defined('C5_EXECUTE') or die('Access Denied');

class GoHelper {
	public static function go($elements) {
		$view = View::getInstance();
		foreach($elements as $el) {
			if(strpos($el, '<') === 0) {
				echo $el;
				continue;
			}
			$view->inc("elements/$el.php");
		}
	}
}
