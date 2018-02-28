<?php
/* Template Name: Life */

$self_love_image_1 = get_field('self_love_image_1');
$self_love_image_2 = get_field('self_love_image_2');
$title_self_love = get_field('title_self_love');
$self_love_intro_1 = get_field('self_love_intro_1');
$self_love_intro_2 = get_field('self_love_intro_2');
$self_love_intro_3 = get_field('self_love_intro_3');
$self_love_intro_4 = get_field('self_love_intro_4');
$program_title = get_field('program_title');
$point_1 = get_field('point_1');
$point_2 = get_field('point_2');
$point_3 = get_field('point_3');
$point_4 = get_field('point_4');
$congruency_title = get_field('congruency_title');
$congruency_paragraph_1 = get_field('congruency_paragraph_1');
$congruency_paragraph_2 = get_field('congruency_paragraph_2');
$congruency_paragraph_3 = get_field('congruency_paragraph_3');
$congruency_paragraph_4 = get_field('congruency_paragraph_4');

get_header() ?>

<div class="parallax-3"></div>
<div class="title-bar blog-grid">
  <h1 class="page-title title">Self-Love</h1>
</div>

<div class="parallax-3"></div>
<div class="coach-grid-1">
  <div class="coach-space-top"></div>
  <!-- <h1 class="coach-header-1">Are you getting in your way?</h1> -->
  <div class="coach-space-bottom"></div>
</div>

<div class="coach-grid-4">
  <div class="coaches-space-top"></div>
  <h1 class="coach-header"><?php echo $title_self_love; ?></h1>
  <div class="coaches-space-middle"></div>
  <div class="first-p">
    <p><?php echo $self_love_intro_1; ?></p>
  <p><?php echo $self_love_intro_2; ?></p>
    <p><?php echo $self_love_intro_3; ?></p>
    <p><?php echo $self_love_intro_4 ;?></p>
    </br/>
  </div>
  <div class="drown">
    <?php
      if( !empty($self_love_image_1) ) : ?>
      <img  class="drown-pic" src="<?php echo $self_love_image_1['url']; ?>" alt="<?php echo $self_love_image_1['alt']; ?>">
    <?php endif; ?>
    <?php
      if( !empty($self_love_image_2) ) : ?>
      <img  class="somebody4 slide-in1 align-right1" src="<?php echo $self_love_image_2['url']; ?>" alt="<?php echo $self_love_image_2['alt']; ?>">
    <?php endif; ?>
  </div>
  <div class="second-p">
    <?php
      if( !empty($self_love_image_2) ) : ?>
      <img  class="title-icon" src="<?php echo $self_love_image_2['url']; ?>" alt="<?php echo $self_love_image_2['alt']; ?>">
    <?php endif; ?>
  <p class="program-title"> <strong><?php echo $program_title; ?></strong><br/></p>
  <div class="points">
    <p>&nbsp;&#8226;<?php echo $point_1; ?></p>
    <p>&nbsp;&#8226;<?php echo $point_2; ?></p>
    <p>&nbsp;&#8226;<?php echo $point_3 ; ?></p>
    <p>&nbsp;&#8226;<?php echo $point_4; ?></p>
  </div>
  </div>
  <section class="third-p">
    <p class="program-title"><?php echo $congruency_title; ?></p><br/>
<div class="congruency">
  <p><?php echo $congruency_paragraph_1; ?></p>
  <p><?php echo $congruency_paragraph_2; ?>Y</p>
  <p><?php echo $congruency_paragraph_3; ?></p>
  <p><?php echo $congruency_paragraph_4; ?></p>
  </div>
    </section>
  <div class="coaches-space-bottom"></div>
</div>
<div class="well-button">
  <div class="well-space-top"></div>
  <!-- <h1 class="well-cta-text">Want to find out more?</h1> -->
  <div class="well-space-middle"></div>
  <a class="well-cta-coach btn"  href="https://karialbro.com/work-with-me"><button class="" style="text-transform: uppercase;">Start the conversation</button></a>
  <div class="well-space-bottom"></div>
</div>

<div class="parallax-3"></div>


<?php get_footer() ?>
