<?php
global $base_url;

foreach( $rows as $key => $row ) {
	$rows[$key]['commerce_price_1'] = commerce_currency_format( $row['commerce_price_1'] * 0.67 , 'NGN' );
	if( '0' == $row['admin_status'] ){
		$id = $row['id'];
		$rows[$key]['admin_status'] = "<a href='$base_url/earnings-all-admin?id=$id'>Approve</a>";
	} else {
		$rows[$key]['admin_status'] = "Approved";
	}
	
	if( '0' == $row['teacher_status'] ){
		$id = $row['id'];
		$rows[$key]['teacher_status'] = "Not Received";
	} else {
		$rows[$key]['teacher_status'] = "Received";
	}
}

?>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)) : ?>
     <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
      <tr>
        <?php foreach ($header as $field => $label): ?>
          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?> scope="col">
            <?php print $label; ?>
          </th>
        <?php endforeach; ?>
      </tr>
    </thead>
  <?php endif; ?>
  <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
        <?php foreach ($row as $field => $content): ?>
          <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" '; } ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>