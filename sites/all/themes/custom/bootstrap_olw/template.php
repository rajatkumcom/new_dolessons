<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function bootstrap_olw_preprocess_html(&$vars) {
  foreach($vars['user']->roles as $role){
    $vars['classes_array'][] = 'role-' . drupal_html_class($role);
  }
}
function bootstrap_olw_theme(&$existing, $type, $theme, $path){
	$items = array(); 

	$items['user_login'] = array(
			'render element' => 'form',
			'path' => drupal_get_path('theme', 'bootstrap_olw') . '/templates',
			'template' => 'user-login',
	);
	
	 $items['user_register_form'] = array(
	    'render element' => 'form',
	    'path' => drupal_get_path('theme', 'bootstrap_olw') . '/templates',
	    'template' => 'user-register-form',
	  );
	return $items;
}

/*function bootstrap_olw_preprocess_page(&$vars){
  $path = 'forums/general-discussion';
//print_r($cur_path);


  if (strpos($path,'forums/general-discussion') !== false) {
    drupal_set_title('Forum');
  }
}*/

function bootstrap_olw_form_comment_form_alter(&$form, &$form_state) {

  $form['comment_body']['#after_build'][] = 'bootstrap_olw_customize_comment_form';

}

function bootstrap_olw_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

/*
 * Implements hook_preprocess_node()
 */
function bootstrap_olw_preprocess_node(&$variables) {
	if ($variables['node']->type == 'store_items') {
		$type = $variables['elements']['product:commerce_price']['#object']->type;
		$array = array($type);
		$view = views_get_view('store');
		$view->set_display("related_items");
		$view->set_arguments($array);
		$view->pre_execute();
		$view->execute();
		$variables['related_items'] = $view->render();
		
		$view = views_get_view('commerce_wishlist_page');
		$view->set_display("master");
		$view->pre_execute();
		$view->execute();
		$variables['commerce_wishlist_page'] = $view->render();
		
	}
	
}

/*
 * Implements THEME_preprocess_page()
 */
function bootstrap_olw_preprocess_page(&$vars, $hook) {
	if (isset($vars['node']->type)) {
		// If the content type's machine name is "my_machine_name" the file
		// name will be "page--my-machine-name.tpl.php".
		$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
	}
}
