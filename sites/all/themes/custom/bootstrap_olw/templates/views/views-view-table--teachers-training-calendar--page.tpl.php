<?php
$header[1] = 'Jan';
$header[2] = 'Feb';
$header[3] = 'Mar';
$header[4] = 'Apr';
$header[5] = 'May';
$header[6] = 'Jun';
$header[7] = 'Jul';
$header[8] = 'Aug';
$header[9] = 'Sep';
$header[10] = 'Oct';
$header[11] = 'Nov';
$header[12] = 'Dec';

$header_classes[1] = '';
$header_classes[2] = '';
$header_classes[3] = '';
$header_classes[4] = '';
$header_classes[5] = '';
$header_classes[6] = '';
$header_classes[7] = '';
$header_classes[8] = '';
$header_classes[9] = '';
$header_classes[10] = '';
$header_classes[11] = '';
$header_classes[12] = '';

//unset( $header['nid'] );
unset( $header['field_ttc_training_type'] );
unset( $header['field_ttc_date'] );
unset( $header['field_ttc_venue'] );

?>
<div class="teacher-training-calendar-table">
  <div class="table-responsive">
    <table class="table table-bordered">
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
      	<?php 
      			$rows_data = array();
      			$tds = '';
      			$i = 1;
      			foreach( $rows as $row ) {
      				
      				$rows_data[$row['nid']]['title'] = $row['title'];
      				$rows_data[$row['nid']]['field_ttc_days'] = $row['field_ttc_days'];
      				$rows_data[$row['nid']]['commerce_price'] = $row['commerce_price'];
      				$rows_data[$row['nid']]['field_ttc_training_type'] = $row['field_ttc_training_type'];
      				if( $row['field_ttc_training_type'] == 'Individual' ) {
      					
      					$arr_date = explode( '/', $row['field_ttc_date'] );
      					$month = explode( '>', $arr_date[0] );
      					$int_month = (int)$month[2];
      					if( !array_key_exists( 'i', $rows_data[$row['nid']]) ) {
      						$rows_data[$row['nid']]['i'] =  1;
      						$i = $rows_data[$row['nid']]['i'];
      					}
      					
      					$tds = '';
      					for( ; $i < $int_month; $i++ ) {
      						$tds .= '<td></td>';
      					}
      					$i++;
    					if( array_key_exists( 'field_ttc_date', $rows_data[$row['nid']]) ) {
      						$rows_data[$row['nid']]['field_ttc_date'] .=  $tds . '<td>' . $arr_date[1] . ' - ' . $arr_date[4];
      					} else {
      						$rows_data[$row['nid']]['field_ttc_date'] =  $tds . '<td>' . $arr_date[1] . ' - ' . $arr_date[4];
      					}
      					
      					$rows_data[$row['nid']]['field_ttc_date'] .= ' ' . $row['field_ttc_venue'] . '</td>';
      					
      				}
      			}
      			$counter = 1;
            	foreach( $rows_data as $row ) {
    	        	echo '<tr>';
    			        
    			        $table_title = $row['title'];
    			        $field_ttc_days = $row['field_ttc_days'];
    			        $commerce_price = $row['commerce_price'];
    	        		if( $row['field_ttc_training_type'] == 'Corporate Training' ) {
    	        			print "<td>$counter</td><td>$table_title</td><td>$field_ttc_days</td><td>$commerce_price</td><td colspan='12'> Corporate Training only (On- Demand) </td>";
    	        		} else {
    	        			$field_ttc_date = $row['field_ttc_date'];
    	        			$output_td = "<td>$counter</td><td>$table_title</td><td>$field_ttc_days</td><td>$commerce_price</td>$field_ttc_date";
    	        			$count_td = substr_count( $output_td, '<td>');
    	        			for( $k = $count_td; $k< 16; $k++ ) {
    	        				$output_td .= '<td></td>';
    	        			}
    	        			print $output_td;
    	        		}
    	        		$counter++;
    	        	echo '</tr>';
            	}
        ?>
      </tbody>
    </table>
  </div>
</div>

