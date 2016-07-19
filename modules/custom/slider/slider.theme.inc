<?php

/**
 * @file
 * Theme for Slider views.
 */
function template_preprocess_views_view_slider(&$variables) {
  // View options set by user.
  // $options = $variables['view']->style_plugin->options;

  
	$rows = $variables['rows'];

	  foreach ($rows as $id => $row) {
	    $variables['rows'][$id] = array();
	    $variables['rows'][$id]['content'] = $row;
	    
	  }
	}
