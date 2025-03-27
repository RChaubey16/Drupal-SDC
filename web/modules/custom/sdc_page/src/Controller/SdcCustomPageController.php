<?php

namespace Drupal\sdc_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class SdcCustomPageController extends ControllerBase {
  public function content() {
    return [
      '#theme' => 'sdc_custom_page',
      '#title' => $this->t('Welcome to the SDC Custom Page!'),
      '#custom_variable' => $this->t('This is a custom message passed to the Twig template.')
    ];
  }
}
