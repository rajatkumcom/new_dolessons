<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  
<?php if($_SERVER['REQUEST_URI']=="/sat-test" || $_SERVER['REQUEST_URI']=="/sat-test/"){ ?>
   
  <title>Entrance Tests Preparation, Competitive Entrance Tests</title>
  <meta name="description" content="If you want the professional educational assistance for the College Admission Test, then you can rely upon us. At DoLessons, you can easily find the experienced tutors.">
  <meta name="keywords" content="Entrance Tests Preparation, Competitive Entrance Tests, College Admission Test">

   <?php } else if($_SERVER['REQUEST_URI']=="/careers" || $_SERVER['REQUEST_URI']=="/careers/"){ ?>
    
   <title>Find Professional Coaching Services - DoLessons</title>
   <meta name="description" content="Our teachers also provide Professional Coaching Services and home tutoring services as well as in Nigeria. If you require such services, then you can search online.">
   <meta name="keywords" content="Professional Coaching Services">

   <?php } else if($_SERVER['REQUEST_URI']=="/book-lessons" || $_SERVER['REQUEST_URI']=="/book-lessons/"){ ?>
    
   <title>Private Lessons Teachers, Online Courses Teaching - DoLessons</title>
   <meta name="description" content="We provide experienced and best Private Home Teachers that surely enhance your learning experience and improve your weak subjects. Contact with us.">
   <meta name="keywords" content="Private Home Teachers, Private Lessons Teachers, Online Courses Teaching">
  
   <?php } else if($_SERVER['REQUEST_URI']=="/about-us" || $_SERVER['REQUEST_URI']=="/about-us/"){ ?>
    
   <title>Tutoring Marketplace, Expert Tutoring Services - DoLessons </title>
   <meta name="description" content="Our Company has a team of the Verified Expert Tutors that can come to your home and give you the best fit lessons for Full and Part Time Tutoring Services.">
   <meta name="keywords" content="Tutoring Marketplace, Expert Tutoring Services, Part Time Tutoring Services, Full Time Tutoring Services, Verified Expert Tutors">

<?php } else if($_SERVER['REQUEST_URI']=="/hire-teacher- listing" || $_SERVER['REQUEST_URI']=="/hire-teacher- listing/"){ ?>
    
   <title>Hire Best Tutors, Best Tutors, Find Best Tutors - DoLessons </title>
   <meta name="description" content="You can Hire Teachers to prepare yourself for the Competitive Entrance Test. By having such assistance, you can surely qualify the competitive entrance tests.">
   <meta name="keywords" content="Hire Teachers, Hire Best Tutors, Best Tutors, Find Best Tutors">

  <?php } else if($_SERVER['REQUEST_URI']=="/contact-us" || $_SERVER['REQUEST_URI']=="/contact-us/"){ ?>
    
   <title>Welcome to DoLessons– Contact us</title>
   <meta name="description" content="Thank you for your interest in our services! We are always interested in hearing from you. For all of your queries, please contact us at admin@dolessons.com or call us on +234 8067 08 2203, 090 297 20222.">
   <meta name="keywords" content="Full Time Tutoring Services, Verified Expert Tutors">


  <?php } else if($_SERVER['REQUEST_URI']=="/" || $_SERVER['REQUEST_URI']==" "){ ?>
    
   <title>Best Home Tutoring Services, Affordable Tutoring Services</title>
   <meta name="description" content="To improve your academic knowledge, we have come up with the Home Tutoring Service. We have a team of skilled and proficient tutors. You can get in touch with us Today.">
   <meta name="keywords" content="Home Tutoring Service, Home Tutoring Services, Affordable Tutoring Services, Best Tutoring Services">

   <?php } else { ?> 

  <title><?php print $head_title; ?></title>

  <?php } ?>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88625618-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="author" content="DoLessons" />
<meta name="msvalidate.01" content="E830B9E86F26F425F9F7800DA21086EC" />
<meta name="DC.title" content="Best Tutors , Hire Best Tutors, Tutoring Marketplace, Competitive Entrance Tests" />
<meta name="geo.region" content="NG" />
<meta name="geo.placename" content="Port Harcourt" />
<meta name="geo.position" content="4.816168;7.010162" />
<meta name="ICBM" content="4.816168, 7.010162" />
<meta name="robots" content="noodp,noydir"/>

<meta name="google-site-verification" content="1ffkwVv5hVcup3MCXBF67hG8MLqMKH38IpVe6yLF1aQ" />
</head>
<body<?php print $body_attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
