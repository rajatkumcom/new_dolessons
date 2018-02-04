<?php
global $user;
$uid = $user->uid;
$rows_data = array();
foreach( $rows as $row ) {

	$results = db_select('assign_teacher', 'at')
	->fields('at')
	->condition( 'id', $row['id'] )
	->execute()
	->fetchAssoc();
	if( $uid == $results['uid_teacher'])
	{
		$rows_data[] = $row;
	}
}

// display( $rows_data );
// die;

$arr_rows_data = array();
foreach( $rows_data as $row_data ) {
	$arr_rows_data[$row_data['id']]['assign_date'] = $row_data['assign_date'];
	$arr_rows_data[$row_data['id']]['name'] = $row_data['name'];
	$arr_rows_data[$row_data['id']]['title'] = $row_data['title'];
	
	if( '' != $row_data['nothing'] ) {
		$arr_rows_data[$row_data['id']]['nothing'] = $row_data['nothing'];
	}
}
// display( $arr_rows_data );
// die;
unset( $header['id'] );

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
      <tr>
        <?php foreach ($row as $field => $content): ?>
          <td>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>