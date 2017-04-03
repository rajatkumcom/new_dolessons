<?php
print foo_quantity_available_for_row($row) ? $output : 1; // Hardcoded '1'.
/**
 * Implements hook_views_pre_view().
 */
function foo_views_pre_view(&$view) {
  switch ($view->name) {
    case 'commerce_cart_form': // On cart page
    // case 'commerce_cart_summary': // On summary page
      $view->display['default']->handler->options['fields']['quantity']['field'] = 'edit_quantity'; // Enforce Quantity field from numeric to text field for further changes.
      break;
  }
}

/**
 * Restrict edit of Quantity field based on the product type.
 *
 * Callback from views-view-field--commerce-cart-summary--default--quantity.tpl.php.
 *
 */
function foo_quantity_available_for_row($row) {
  ($line_item = $row->commerce_line_item_field_data_commerce_line_items_line_item_) &&
    ($line_item_wrapper = entity_metadata_wrapper('commerce_line_item', $line_item)) &&
      ($product = $line_item_wrapper->commerce_product->value());

  if ($product) {
    switch ($product->type) {
      case 'laptops':
      //case 'product_type_2':
        return TRUE; // Allow users to edit Quantity field.
        break;
    }
  } 
  return FALSE; // Disallow users to edit Quantity field.
}

?>
