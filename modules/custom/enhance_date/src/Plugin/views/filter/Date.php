<?php

namespace Drupal\enhance_date\Plugin\views\filter;

use Drupal\views\Plugin\views\filter\NumericFilter;
use Drupal\Core\Form\FormStateInterface;

/**
 * Simple filter to handle greater than/less than filters
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("enhance_date")
 */
class Date extends NumericFilter{
	protected $alwaysMultiple = TRUE;
	protected $valueFormType = 'select';
	function operators() {
		$operators = parent::operators();
		$filter = array(
				'enhanceBetween' => array(
			        'title' => $this->t('Enhance Date Between'),
			        'method' => 'enhanceBetween',
			        'short' => $this->t('enhanceBetween'),
			        'values' => 1,
			      ),
			);
		return $filter+$operators;
	}

	protected function valueForm(&$form, FormStateInterface $form_state) {
    $form['value']['#tree'] = TRUE;

    // We have to make some choices when creating this as an exposed
    // filter form. For example, if the operator is locked and thus
    // not rendered, we can't render dependencies; instead we only
    // render the form items we need.
    $which = 'all';
    if (!empty($form['operator'])) {
      $source = ':input[name="options[operator]"]';
    }

    if ($exposed = $form_state->get('exposed')) {
      $identifier = $this->options['expose']['identifier'];

      if (empty($this->options['expose']['use_operator']) || empty($this->options['expose']['operator_id'])) {
        // exposed and locked.
        $which = in_array($this->operator, $this->operatorValues(2)) ? 'minmax' : 'value';
      }
      else {
        $source = ':input[name="' . $this->options['expose']['operator_id'] . '"]';
      }
    }

    $user_input = $form_state->getUserInput();
    if ($which == 'all') {
      $form['value']['value'] = array(
        '#type' => 'select',
        '#title' => !$exposed ? $this->t('Value') : '',
        '#options'=>['2015'=>'2015','2016'=>'2016','2017'=>'2017'],
        '#default_value'=>[date('Y')=>date('Y')]
      );
      // Setup #states for all operators with one value.
      foreach ($this->operatorValues(1) as $operator) {
        $form['value']['value']['#states']['visible'][] = array(
          $source => array('value' => $operator),
        );
      }
      if ($exposed && !isset($user_input[$identifier]['value'])) {
        $user_input[$identifier]['value'] = $this->value['value'];
        $form_state->setUserInput($user_input);
      }
    }
    elseif ($which == 'value') {
      // When exposed we drop the value-value and just do value if
      // the operator is locked.
      $form['value'] = array(
        '#type' => 'select',
        '#title' => !$exposed ? $this->t('Value') : '',
        '#options'=>['2015'=>'2015','2016'=>'2016','2017'=>'2017','2018'=>'2018'],
        '#default_value'=>[date('Y')=>date('Y')]
      );
      if ($exposed && !isset($user_input[$identifier])) {
        $user_input[$identifier] = $this->value['value'];
        $form_state->setUserInput($user_input);
      }
    }


  }

	protected function enhanceBetween($field) {
	    if ($this->operator == 'enhanceBetween') {
	    	if($this->value['value']!='All'){
	    		$min = $this->value['value']."-01-01";
	    	$max = ($this->value['value']+1)."-01-01";
	      $this->query->addWhere($this->options['group'], $field, array($min, $max), 'BETWEEN');
	    	}
	    	
	 
	    }
    
  }
}