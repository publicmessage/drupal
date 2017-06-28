<?php

namespace Drupal\qbpl_donate\Controller;

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
      '#markup' => ('Please give me monies'),
    );
  }

}