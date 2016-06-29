<?php

namespace Drupal\socialshareprivacy\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "socialshareprivacy",
 *   admin_label = @Translation("SocialSharePrivacy"),
 *   category = @Translation("Blocks")
 * )
 */
class socialshareprivacyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '<div class="share"></div>',
      '#attached' => array(
        'library' =>  array(
          'socialshareprivacy/jquery.socialshareprivacy'
        ),
      ),
    );
  }

}
