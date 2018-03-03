<?php

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Class HelloWorldSalutation.
 */
class HelloWorldSalutation {

  use StringTranslationTrait;

  /**
   * Constructs a new HelloWorldSalutation object.
   */
  public function __construct() {

  }

  /**
  * Returns the salutation
  */
  public function getSalutation() {
    $time = new \DateTime();
    if ((int) $time->format('G') >= 06 && (int) $time->format('G') < 12) {
      return $this->t('Good morning world');
    }
    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      return $this->t('Good afternoon world');
    }
    if ((int) $time->format('G') >= 18) {
      return $this->t('Good evening world');
    }
  }
}
