
<div>
<?php
$path = current_path();
global $base_path;
?>
<?php
if($path == 'student/register'){?>
<!--<ul class="breadcrumb">
<li><a href="">Home</a></li><li>career</li><li>sign up</li>
</ul>-->
<h3 class="sign_up">Sign Up</h3>
<?php } 
if($path == 'teacher/register'){?>
<!--<ul class="breadcrumb">
<li><a href="">Home</a></li><li>career</li><li>teacher application form</li>
</ul>-->
<div class="teacher_register">
<?php } ?>
<?php print drupal_render_children($form) ?>
</div>
</div>

