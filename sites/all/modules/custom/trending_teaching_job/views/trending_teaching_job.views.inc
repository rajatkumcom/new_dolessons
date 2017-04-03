<?php
/**
 * Implements hook_views_data()
 */
 
function trending_teaching_job_views_data(){
	// First, the entry $data['trending_teaching_job_application']['table'] describes properties of
   // the actual table – not its content.
  // The 'group' index will be used as a prefix in the UI for any of this
 // table's fields, sort criteria, etc. so it's easy to tell where they came
// from.

	$data['trending_teaching_job_application']['table']['group'] = t('Trending teaching application');
	
	$data['trending_teaching_job_application']['table']['base'] = array(
    'field' => 'id', // This is the identifier field for the view.
    'title' => t('Trending Teaching Application'),
    'help' => t('Example table contains trending teaching job application data'),
    'weight' => -10,
  );
  
   // This table references the {node} table. The declaration below creates an
  // 'implicit' relationship to the node table, so that when 'node' is the base
  // table, the fields are automatically available.
  $data['trending_teaching_job_application']['table']['join'] = array(
    // Index this array by the table name to which this table refers.
    // 'left_field' is the primary key in the referenced table.
    // 'field' is the foreign key in this table.
    'users' => array(
      'left_field' => 'uid',
      'field' => 'uid_teacher',
    ),
  );
  
  // User ID table field.
  $data['trending_teaching_job_application']['uid_teacher'] = array(
    'title' => t('user applied for trending teaching application'),
    'help' => t('user id.'),
    // Define a relationship to the {node} table, so example_table views can
    // add a relationship to nodes. If you want to define a relationship the
    // other direction, use hook_views_data_alter(), or use the 'implicit' join
    // method described above.
    'relationship' => array(
      'base' => 'users', // The name of the table to join with.
      'base field' => 'uid', // The name of the field on the joined table.
      // 'field' => 'nid' -- see hook_views_data_alter(); not needed here.
      'handler' => 'views_handler_relationship',
      'label' => t('users'),
      'title' => t('users'),
      'help' => t('users'),
    ),
  );
  
   // date of application timestamp field.
  $data['trending_teaching_job_application']['application_date'] = array(
    'title' => t('application date'),
    'help' => t('application applied date.'),
    'field' => array(
      'handler' => 'views_handler_field_date',
      'click sortable' => TRUE,
    ),
    'sort' => array(
      'handler' => 'views_handler_sort_date',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_date',
    ),
  );
  
  // Example numeric text field.
  $data['trending_teaching_job_application']['school_id'] = array(
    'title' => t('school id'),
    'help' => t('node id for schools.'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );
  
  // Subject label text field
  
  $data['trending_teaching_job_application']['subject_label'] = array(
    'title' => t('subject name'),
    'help' => t('Just a plain text field.'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE, // This is use by the table display plugin.
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
    'argument' => array(
      'handler' => 'views_handler_argument_string',
    ),
  );
  
  // School label text field
  
   $data['trending_teaching_job_application']['school_label'] = array(
    'title' => t('school name'),
    'help' => t('Just a plain text field.'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE, // This is use by the table display plugin.
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
    'argument' => array(
      'handler' => 'views_handler_argument_string',
    ),
  );

	
	return $data;
}
 
 
?>
