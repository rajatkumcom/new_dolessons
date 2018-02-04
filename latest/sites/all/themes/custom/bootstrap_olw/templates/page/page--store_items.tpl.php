<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>
    <div role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </div> <!-- /#page-header -->
  </div>
</header>

<div class="main-container <?php print $container_class; ?>">
  
<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <div class="container">
            <?php if (!empty($primary_nav)): ?>
              <?php //print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php //print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </div>
        </nav>
      </div>
    <?php endif; ?>
  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>
<div class="container">
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <?php global $user; global $base_url;
	      	$roles = $user->roles;
	      	if( in_array( 'student', $roles ) ) {
	      	//	echo "<div class='back-to-dashboard'><a href='$base_url/student-dashboard'>Dashboard</a></div>";
	      	} else if( in_array( 'teacher', $roles ) ) {
	      	//	echo "<div class='back-to-dashboard'><a href='$base_url/teacher-dashboard'>Dashboard</a></div>";
	      	} else if( in_array( 'seller', $roles ) ) {
	      	//	echo "<div class='back-to-dashboard'><a href='$base_url/seller-dashboard'>Dashboard</a></div>";
	      	}
      ?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
</div>    

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <?php if (!empty($page['full_content'])): ?>
    <?php print render($page['full_content']); ?>
  <?php endif; ?>

  <?php if (!empty($page['teachers'])): ?>
    <?php print render($page['teachers']); ?>
  <?php endif; ?>

  <?php if (!empty($page['schools'])): ?>
    <?php print render($page['schools']); ?>
  <?php endif; ?>

  <?php if (!empty($page['testimonials'])): ?>
    <?php print render($page['testimonials']); ?>
   <?php endif; ?>

</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <div class="footer_top">
      <div class="container">
        <?php print render($page['footer']); ?>
      </div> 
    </div>  
    <div class="footer_bottom">
      <div class="container">
        <?php print render($page['footer_bottom']); ?>
      </div>  
    </div>  
  </footer>
<?php endif; ?>
