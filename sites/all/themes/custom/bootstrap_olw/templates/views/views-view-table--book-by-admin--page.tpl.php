<?php

unset( $header['nid'] );

$row_data = array();
//  display( $rows );
foreach ( $rows as $row ) {
	$row_data[$row['nid']]['title'] = $row['title'];
	$row_data[$row['nid']]['field_student_classes_and_subj'] = $row['field_student_classes_and_subj'];
	$row_data[$row['nid']]['field_student_book_availability'] = $row['field_student_book_availability'];
	$row_data[$row['nid']]['field_student_gender_of_teacher'] = $row['field_student_gender_of_teacher'];
	
	
	if( '' != $row['field_student_states']  ) {
		$row_data[$row['nid']]['field_student_states'] = $row['field_student_states'];
	} else {
		if( !array_key_exists( 'field_student_states', $row_data[$row['nid']] ) ) {
			$row_data[$row['nid']]['field_student_states'] = '';
		}
	}
	
	$row_data[$row['nid']]['php'] = $row['php'];
	$row_classes[$row['nid']] = '';
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
    <?php foreach ($row_data as $row_count => $row): ?>
      <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
        <?php foreach ($row as $field => $content): ?>
          <td>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>