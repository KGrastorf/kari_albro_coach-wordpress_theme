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
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Crimson+Text|Dancing+Script|Josefin+Sans|Open+Sans|Sacramento|Karma|Shrikhand" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/Flower 48.ico" type="image/x-icon">
  <title>Kari Albro Coaching</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Kari Albro Coaching' ); ?></a>

  <nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg navbar-light bg-light col-md-12 col-lg-12">
    <a class="navbar-brand" href="http://localhost/KariCoach/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Kari Logo.svg" alt="Flower" class="flower"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="">
          <a href="http://localhost/KariCoach/coach" class="home-links-nav bckd-img1">Coaching</a>
        </li>
        <li class="nav-item active">
          <a href="http://localhost/KariCoach/work" class="home-links-nav bckd-img5">Work With Me</a>
        </li>
        <li class="nav-item active">
          <a href="http://localhost/KariCoach/start" class="home-links-nav bckd-img3">Start Here</a>
        </li>
        <li class="nav-item active">
          <a href="http://localhost/KariCoach/test" class="home-links-nav bckd-img5">Success Stories</a>
        </li>
        <!-- <li class="nav-item active">
          <a href="http://localhost/KariCoach/blog" class="home-links-nav bckd-img4">Blog</a>
        </li> -->
        <li class="nav-item active">
          <a href="http://localhost/KariCoach/about" class="home-links-nav bckd-img4">About</a>
        </li>
      </ul>
    </div>
      </nav>



<div id="content" class="site-content">
  <?php ?>
