<?php

/* *
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */

namespace Drupal\demo\Controller;
use Drupal\Core\Controller\ControllerBase;

class DemoController extends ControllerBase {

	public function demo() {
	    return array(
	      '#markup' => t('Hello @value!'),
	    );
  	}
}
