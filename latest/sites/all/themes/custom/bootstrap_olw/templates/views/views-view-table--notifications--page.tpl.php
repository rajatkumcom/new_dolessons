<?php

$rows_data = array();
// var_dump('<br/>');
// var_dump( $rows );
foreach( $rows as $row ) {
	$rows_data[$row['uid']]['uid'] = $row['uid'];
	$rows_data[$row['uid']]['name'] = $row['name'];
	$rows_data[$row['uid']]['mail'] = $row['mail'];
	
	if( !array_key_exists( 'nothing', $rows_data[$row['uid']] ) ) {
		$rows_data[$row['uid']]['nothing'] = '';
	}
	if( '' != $row['nothing'] ) {
		$rows_data[$row['uid']]['nothing'] = $row['nothing'];
	}
	
	if( !array_key_exists( 'nothing_1', $rows_data[$row['uid']] ) ) {
		$rows_data[$row['uid']]['nothing_1'] = '';
	}
	if( '' != $row['nothing_1'] ) {
		$rows_data[$row['uid']]['nothing_1'] = $row['nothing_1'];
	}
	
	if( !array_key_exists( 'nothing_2', $rows_data[$row['uid']] ) ) {
		$rows_data[$row['uid']]['nothing_2'] = '';
	}
	if( '' != $row['nothing_2'] ) {
		$rows_data[$row['uid']]['nothing_2'] = $row['nothing_2'];
	}
	$rows_data[$row['uid']]['php'] = $row['php'];
	$row_classes[$row['uid']] = '';
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
    <?php foreach ($rows_data as $row_count => $row): ?>
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