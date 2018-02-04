<?php

/*
 * Implements hook_views_data()
 */
function assign_teacher_views_data() {

	$data['assign_teacher']['table']['group'] = t('Assign Teacher');

			$data['assign_teacher']['table']['base'] = array(
					'field' => 'id',
					'title' => t('Assign Teacher'),
					'help' => t('Assign Teacher contains students assigned to teacher'),
					'weight' => -10,
			);

			$data['assign_teacher']['table']['join'] = array(
					'users' => array(
							'left_field' => 'uid',
							'field' => 'uid_teacher',
					),
			);

			$data['assign_teacher']['id'] = array(
					'title' => t('Id Assign Teacher'),
					'help' => t('Serial Id Assign Teacher'),
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
			
			$data['assign_teacher']['uid_teacher'] = array(
					'title' => t('Id Teacher Assign Teacher'),
					'help' => t('Id Teacher Assign Teacher'),
					'relationship' => array(
							'base' => 'users',
							'base field' => 'uid',
							'handler' => 'views_handler_relationship',
							'label' => t('Teacher Assign Teacher'),
							'title' => t('Teacher Assign Teacher'),
							'help' => t('Teacher Assign Teacher'),
							),
							);
			$data['assign_teacher']['uid_student'] = array(
					'title' => t('Id Student Assign Teacher'),
					'help' => t('Id Student Assign Teacher'),
					'relationship' => array(
							'base' => 'users',
							'base field' => 'uid',
							'handler' => 'views_handler_relationship',
							'label' => t('Student Assign Teacher'),
							'title' => t('Student Assign Teacher'),
							'help' => t('Student Assign Teacher'),
					),
			);

			$data['assign_teacher']['product_id'] = array(
					'title' => t('Product Assign Teacher'),
					'help' => t('Product Assign Teacher'),
					'relationship' => array(
							'base' => 'commerce_product',
							'base field' => 'product_id',
							'handler' => 'views_handler_relationship',
							'label' => t('Product Assign Teacher'),
							'title' => t('Product Assign Teacher'),
							'help' => t('Product Assign Teacher'),
					),
			);
			
			// Example numeric text field.
			$data['assign_teacher']['assign_date'] = array(
					'title' => t('Assign Date'),
					'help' => t('Just a Assign Date field.'),
					'field' => array(
							'handler' => 'views_handler_field_date',
							'click sortable' => TRUE,
					),
					'filter' => array(
							'handler' => 'views_handler_filter_date',
					),
					'sort' => array(
							'handler' => 'views_handler_sort',
					),
			);
			
			$data['assign_teacher']['order_id'] = array(
					'title' => t('Order Assign Teacher'),
					'help' => t('Order Assign Teacher'),
					'relationship' => array(
							'base' => 'commerce_order',
							'base field' => 'order_id',
							'handler' => 'views_handler_relationship',
							'label' => t('Order Assign Teacher'),
							'title' => t('Order Assign Teacher'),
							'help' => t('Order Assign Teacher'),
					),
			);
			
			$data['assign_teacher']['admin_status'] = array(
					'title' => t('Admin Status'),
					'help' => t('Admin Status'),
					'field' => array(
							'handler' => 'views_handler_field',
							'click sortable' => TRUE,
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
			
			$data['assign_teacher']['teacher_status'] = array(
					'title' => t('Teacher Status'),
					'help' => t('Teacher Status'),
					'field' => array(
							'handler' => 'views_handler_field',
							'click sortable' => TRUE,
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