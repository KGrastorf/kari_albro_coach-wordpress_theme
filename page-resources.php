<?php
/* Template Name: Resources */

$resources_title = get_field('resources_title');
$resources_text_1 = get_field('resources_text_1');
$resources_image_1 = get_field('resources_image_1');
$resources_text_2 = get_field('resources_text_2');
$resources_image_2 = get_field('resources_image_2');

get_header(); ?>
<div class="parallax-3"></div>
<div class="title-bar-resources resources-grid">
  <h1 class="page-title title">Resources</h1>
</div>
<div class="parallax-3"></div>

<div class="resources-grid-body">
  <div class="resources-space-top"></div>
  <p class="resources-title"><?php echo $resources_title; ?></p>
  <div class="resources-space-middle"></div>
  <p class="resources-text1"><?php echo $resources_text_1; ?></p>
  <?php
    if( !empty($resources_image_1) ) : ?>
    <img  class="resources-img1 title" src="<?php echo $resources_image_1['url']; ?>" alt="<?php echo $resources_image_1['alt']; ?>">
  <?php endif; ?>
  <div class="resources-space-bottom"></div>
  <p class="resources-text2"><?php echo $resources_text_2 ; ?></php></p>
  <?php
    if( !empty($resources_image_2) ) : ?>
    <img  class="resources-img2 title" src="<?php echo $resources_image_2['url']; ?>" alt="<?php echo $resources_image_2['alt']; ?>">
  <?php endif; ?>
</div>
<div class="space">

</div>


<div class="parallax-3"></div>
<?php get_footer(); ?>
