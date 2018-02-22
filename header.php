  <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kari_Albro_Coaching
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <link href="https://fonts.googleapis.com/css?family=Catamaran|Crimson+Text|Dancing+Script|Josefin+Sans|Open+Sans|Sacramento|Karma|Shrikhand" rel="stylesheet">
  <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> -->
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/Flower 48.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
  <title>Kari Albro Coaching</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Kari Albro Coaching' ); ?></a>
  <!-- <div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">

    <a class="navbar-brand" href="https://karialbro.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Kari Logo.svg" alt="Flower" class="flower"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="">
          <a href="https://karialbro.com/coach" class="home-links-nav bckd-img1">Coaching</a>
        </li>
        <li class="nav-item active">
          <a href="https://karialbro.com/work-with-me/" class="home-links-nav bckd-img5">Work With Me</a>
        </li>
        <li class="nav-item active">
          <a href="https://karialbro.com/start/" class="home-links-nav bckd-img3">Start Here</a>
        </li>
        <li class="nav-item active">
          <a href="https://karialbro.com/testimonials/" class="home-links-nav bckd-img5">Success Stories</a>
        </li>
        <li class="nav-item active">
          <a href="https://karialbro.com/about/" class="home-links-nav bckd-img4">About</a>
        </li>
      </ul>
    </div>



    </div>

    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'navbar-collapse collapse',
      'menu_class' => 'nav navbar-nav navbar-right',

    ) );

    ?>
    <!-- container -->
    </div>
    <!-- navbar -->

    </div>
    <!-- navbar-wrapper -->


    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="navbar-brand" href="https://karialbro.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Kari Logo.svg" alt="Flower" class="flower"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://karialbro.com/coach">Coach<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://karialbro.com/work-with-me/">Work With Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://karialbro.com/start/">Start Here</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://karialbro.com/testimonials/">Success Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://karialbro.com/about/">About Me</a>
          </li>
        </ul>
      </div>
    </nav>


<div id="content" class="site-content">
  <?php ?>
