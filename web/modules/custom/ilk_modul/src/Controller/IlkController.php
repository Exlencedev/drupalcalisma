<?php

namespace Drupal\ilk_modul\Controller;

use Drupal\Core\Controller\ControllerBase;

class IlkController extends ControllerBase {

  public function merhaba() {
    return [
      '#markup' => $this->t('Hello, this is my first Drupal 11 module!'),
    ];
  }

}
