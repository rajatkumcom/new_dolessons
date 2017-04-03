<?php
global $user;
$uid = $user->uid;
$rows_data = array();
$arr_rows_data = array();
foreach( $rows as $row ) {
	
	$results = db_select('assign_teacher', 'at')
			->fields('at')
			->condition( 'id', $row['id'] )
			->execute()
			->fetchAssoc();
	
	if( $uid == $results['uid_student'])
	{

		$profile = profile2_by_uid_load($results['uid_teacher'], 'teacher_profile');
		
		$teacher_first_name = isset($profile->field_teacher_first_name[LANGUAGE_NONE][0]['value']) ? $profile->field_teacher_first_name[LANGUAGE_NONE][0]['value'] : 'empty';
		$teacher_last_name = isset($profile->field_teacher_last_name[LANGUAGE_NONE][0]['value']) ? $profile->field_teacher_last_name[LANGUAGE_NONE][0]['value'] : 'empty';

		unset( $row['id'] );
		$rows_data['assign_date'] = $row['assign_date'];
		$rows_data['name'] = $teacher_first_name .' '. $teacher_last_name;
		$rows_data['title'] = $row['title'];
		$arr_rows_data[] = $rows_data;
	}
	
}

unset( $header['id'] )

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
    <?php foreach ($arr_rows_data as $row_count => $row): ?>
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