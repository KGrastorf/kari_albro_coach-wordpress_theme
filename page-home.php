<?php
/*
 Template Name: Home Page
 */

$link_1_title = get_field('link_1_title');
$link_1_url = get_field('link_1_url');
$link_2_title = get_field('link_2_title');
$link_2_url = get_field('link_2_url');
$link_3_title = get_field('link_3_title');
$link_3_url = get_field('link_3_url');
$link_4_title = get_field('link_4_title');
$link_4_url = get_field('link_4_url');
$link_5_title = get_field('link_5_title');
$link_5_url = get_field('link_5_url');

get_header();
 ?>
<style>#page > nav {display:none}</style>
<div class="hero w3-container w3-center w3-animate-opacity">

    <!-- Landing Page with no Header -->
  <div class="start-grid" id="hero">
    <h1 class="kari-title">Coaching with Kari Albro</h1>
    <h1 class="link-1"><a href="<?php echo $link_1_url; ?>" class="home-links bckd-img1" id="bckd-img1"><?php echo $link_1_title; ?></a></h1>
    <h1 class="link-2"><a href="<?php echo $link_2_url; ?>" class="home-links bckd-img5" id="bckd-img2"><?php echo $link_2_title; ?></a></h1>
    <h1 class="link-3"><a href="<?php echo $link_3_url; ?>" class="home-links bckd-img3" id="bckd-img3"><?php echo $link_3_title; ?></a></h1>
    <h1 class="link-4"><a href="<?php echo $link_4_url; ?>" class="home-links bckd-img5" id="bckd-img7"><?php echo $link_4_title; ?></a></h1>
    <h1 class="link-5"><a href="<?php echo $link_5_url; ?>" class="home-links bckd-img4" id="bckd-img4"><?php echo $link_5_title; ?></a></h1>
  </div>
</div>
<!-- 
<div class="home-cta">
<button type="button" name="button" class="front-cta">Subscribe</button>
</div> -->

<?php
get_footer(); ?>
