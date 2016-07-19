<?php

/**
 * @file
 * Definition of Drupal\tardis\Plugin\views\style\Tardis.
 */

namespace Drupal\slider\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list of years and months
 * in reverse chronological order linked to content.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "slider",
 *   title = @Translation("slider"),
 *   help = @Translation("Render Image of a content type"),
 *   theme = "views_view_slider",
 *   display_types = { "normal" }
 * )
 *
 */
class Slider extends StylePluginBase {
  /**
   * Does the style plugin for itself support to add fields to it's output.
   *
   * @var bool
   */
   protected $usesFields = TRUE;
   /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;
  /**
   * Set default options
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['interval'] = array('default' => '5000');
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    // Path prefix for TARDIS links.
    $form['interval'] = array(
      '#type' => 'textfield',
      '#title' => t('InterView'),
      '#default_value' => (isset($this->options['interval'])) ? $this->options['interval'] : '5000',
      '#description' => t('Interval of each Image'),
    );

   
  }
}