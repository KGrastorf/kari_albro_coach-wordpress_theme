<?php
/* Template Name: About */

$about_title = get_field('about_title');
$paragraph_1 = get_field('paragraph_1');
$paragraph_2 = get_field('paragraph_2');
$paragraph_3 = get_field('paragraph_3');
$paragraph_4 = get_field('paragraph_4');
$paragraph_5 = get_field('paragraph_5');
$about_picture = get_field('about_picture');

get_header() ?>

<div class="parallax-3"></div>
<div class="title-bar blog-grid">
  <h1 class="page-title title">About Me</h1>
</div>
<div class="parallax-3"></div>
<div class="about-grid-1">
  <div class="about-space-1"></div>
  <div class="luscious-title"><?php echo $about_title; ?></div>
  <div class="about-space-2"></div>
  <div class="luscious-pic2 title">
    <?php
      if( !empty($about_picture) ) : ?>
      <img src="<?php echo $about_picture['url']; ?>" alt="<?php echo $about_picture['alt']; ?>" class="eyes-open">
    <?php endif; ?>
  </div>
  <div class="luscious-paragraph-1">
    <p><?php echo $paragraph_1; ?></p>
    <p><?php echo $paragraph_2; ?></p>
    <p><?php echo $paragraph_3; ?></p>
    <p><?php echo $paragraph_4; ?></p>
    <p><?php echo $paragraph_5; ?></p>
  </div>
  <div class="luscious-pic title">
    <?php
      if( !empty($about_picture) ) : ?>
      <img src="<?php echo $about_picture['url']; ?>" alt="<?php echo $about_picture['alt']; ?>" class="eyes-open">
    <?php endif; ?>
  </div>
  <div class="about-space-5"></div>

</div>
</div>
<div class="parallax-3"></div>

<?php get_footer() ?>
