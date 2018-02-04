<?php 
global $base_url;
$form['actions']['sub_markup']['#markup'] = "New to Dolessons ? <a href='$base_url/register'>Sign up</a>";
?>

<div class="bootstrap-olw-user-login-form-wrapper">
  <?php print drupal_render_children($form) ?>
</div>