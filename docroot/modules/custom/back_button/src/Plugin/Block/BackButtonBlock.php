<?php

namespace Drupal\back_button\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "back_button",
 *   admin_label = @Translation("back block"),
 *   category = @Translation("blocks"),
 * )
 */

class BackButtonBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  
  public function build() {
    /*url = window.location.href*/
    /*url.substring(0, url.lastIndexOf('/'));*/
    // maybe look into making this more robust
    return [
      '#markup' => $this->t('<form><input type="button" value="More" onclick="history.go(-1)"></form>'),
    ];
  }
}