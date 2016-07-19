<?php

namespace Drupal\commissions_and_hearings\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hearing' Block
 *
 * @Block(
 *   id = "hearing_block",
 *   admin_label = @Translation("Hearing block"),
 * )
 */
class HearingBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      // '#markup' => '<ul class="nav"><li><a href="">'.\Drupal::request()->query->get('q').'</a></li></ul>',
    	'#theme'=>'commissions_and_hearings',
    	 '#description' => 'My description',
    	 '#var1'=>$this->stringToArray(\Drupal::service('path.current')->getPath())
    );
  }

  public function stringToArray($data){
  	$data = explode("/", $data);
  	return $data[2];
  }
  
}
?>