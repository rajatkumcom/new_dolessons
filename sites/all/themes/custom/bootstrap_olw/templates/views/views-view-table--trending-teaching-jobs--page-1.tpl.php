<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<?php //display($title); ?>

<?php //$new_header = $header; ?>
<?php //display($new_header); ?>
<?php
$new_header[] = 'S.N.';
$new_header[] = '';
$new_header[] = 'Subjects';
$new_header[] = 'Number of Vacancies'; 
$header_classes[] = '';
$header_classes[] = '';
$header_classes[] = '';
$header_classes[] = '';

?>
<?php
/*unset( $header['field_hire_teacher_principal'] );
unset( $header['field_hire_teacher_v_principal_a'] );
unset( $header['field_hire_teacher_v_principal_a'] );
unset( $header['field_hire_teacher_headmaster'] );
unset( $header['field_hire_teacher_headmistress'] );
unset( $header['field_hire_teacher_accounting'] );
unset( $header['field_hire_teacher_agric_science'] );
unset( $header['field_hire_teacher_basic_science'] );
unset( $header['field_hire_teacher_basic_tech'] );
unset( $header['field_hire_teacher_biology'] );
unset( $header['field_hire_teacher_chemistry'] );
unset( $header['field_hire_teacher_civic_edu'] );
unset( $header['field_hire_teacher_comp_studies'] ); 
unset( $header['field_hire_teacher_accounting'] ); 
unset( $header['field_hire_teacher_c_r_k'] );
unset( $header['field_hire_teacher_geography'] );
unset( $header['field_hire_teacher_economics'] );
unset( $header['field_hire_teacher_social_stud'] );
unset( $header['field_hire_teacher_tech_draw'] );
unset( $header['field_hire_teacher_government'] );
unset( $header['field_hire_teacher_music'] );
unset( $header['field_hire_teacher_history'] );
unset( $header['field_hire_teacher_fod_nutrition'] );
unset( $header['field_hire_teacher_business_stud'] );
unset( $header['field_hire_teacher_further_math'] );
unset( $header['field_hire_teacher_english_lnge'] );
unset( $header['field_hire_teacher_mathematics'] );
unset( $header['field_hire_teacher_fine_art'] );
unset( $header['field_hite_teacher_lit_in_eng'] );
unset( $header['field_hire_teacher_other_specify'] );*/

$data_rows = array();


$rows = $rows[0];
foreach( $rows as $key => $value ){
	    
	if( $value == "" ) unset($rows[$key]);
        
	}

?>



<?php global $base_url; ?>
 
<?php  $node_id = arg(1); ?>

<form action='<?php echo $base_url; ?>/selected-trending-job' method='GET'>

<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)) : ?>
     <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>

  <?php if (!empty($new_header)) : ?>
    <thead>
      <tr>
        <?php foreach ($new_header as $field => $label): ?>

          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?> scope="col">
            <?php print $label; ?>
          </th>
        <?php endforeach; ?>
      </tr>
    </thead>
  <?php endif; ?>

  <?php
  $i = 1;
  
  foreach($rows as $val => $vac_val){
	  
	  
      echo "<tr></tr><td>$i</td><td><input type='radio' name='subject[]' value=$val></td><td>$header[$val]</td><td>$vac_val</td></tr>";
	  $i++;
  }
      echo "<input type='hidden' name='nid[]' value=$node_id>";
      
      
   
  ?>
  
  
</table>
<input type="submit" name="submit" value="Apply" />
</form>
