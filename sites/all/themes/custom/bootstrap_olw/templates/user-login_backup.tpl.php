<?php 
global $base_url;
$form['actions']['sub_markup']['#markup'] = "New to Dolessons ? <a href='$base_url/student/register'>Sign up Student</a> <a href='$base_url/teacher/register'>Sign up as Teacher</a>";
?>

<div class="bootstrap-olw-user-login-form-wrapper">
  <?php print drupal_render_children($form) ?>
</div>