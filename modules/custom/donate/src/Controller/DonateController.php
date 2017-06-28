<?php

namespace Drupal\donate\Controller;

use Drupal\Core\Controller\ControllerBase;

class DonateController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => 'Please <a href="https://www.eff.org/helpout">donate</a> in whatever way you can. Thank you!</a>',
    );
  }

}