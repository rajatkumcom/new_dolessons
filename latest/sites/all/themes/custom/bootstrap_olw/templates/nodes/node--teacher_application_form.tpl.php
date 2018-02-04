<?php
//echo'<pre>';
//print_r($node);
//$teacher_name = isset($node->field_teacher_name['und'][0]['value']) ? $node->field_teacher_name['und'][0]['value'] : "" ; //teacher's name
$teacher_bio = isset($node->field_teacher_biography['und'][0]['value']) ? $node->field_teacher_biography['und'][0]['value'] : "" ; //teacher's bio
print_r($teacher_bio);


?>
