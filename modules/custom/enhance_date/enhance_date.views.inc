<?php
/**
 * Implements hook_views_data_alter().
 */
function enhance_date_views_data_alter(array &$data) {
 $data['node__field_date']['node_date_filter'] = array(
    'title' => t('Enhance Date Filter'),
    'filter' => array(
      'title' => t('Date Filter Not Required MIN MAX'),
      'help' => t('User Can Enhance date  experience'),
      'field' => 'field_date_value',
      'id' => 'enhance_date'
    ),
  );

  $data['node_field_data']['node_type_filter'] = array(
  'title' => t('Enhanced node type filter'),
  'filter' => array(
    'title' => t('Enhanced node type filter'),
    'help' => t('Provides a custom filter for nodes by their type.'),
    'field' => 'type',
    'id' => 'string'
  ),
);
}