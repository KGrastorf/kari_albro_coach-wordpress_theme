<?php
/* Template Name: Coaches */

$coaches_image = get_field('coaches_image');
$title_coaches = get_field('title_coaches');
$coaches_intro_1 = get_field('coaches_intro_1');
$coaches_intro_2 = get_field('coaches_intro_2');
$coaches_intro_3 = get_field('coaches_intro_3');
$coaches_intro_4 = get_field('coaches_intro_4');
$coaches_intro_5 = get_field('coaches_intro_5');

$program_title = get_field('program_title');
$point__1 = get_field('point__1');
$point__2 = get_field('point__2');
$point__3 = get_field('point__3');
$point__4 = get_field('point__4');

$coaches_curriculm = get_field('coaches_curriculm');
$cur_1 = get_field('cur_1');
$cur_2 = get_field('cur_2');
$cur_3 = get_field('cur_3');
$cur_4 = get_field('cur_4');
$cur_5 = get_field('cur_5');
$included = get_field('included');

$congruency_title = get_field('congruency_title');
$congruency_paragraph_1 = get_field('congruency_paragraph_1');
$congruency_paragraph_2 = get_field('congruency_paragraph_2');
$congruency_paragraph_3 = get_field('congruency_paragraph_3');
$congruency_paragraph_4 = get_field('congruency_paragraph_4');

get_header() ?>

<div class="parallax-3"></div>
<div class="title-bar blog-grid">
  <h1 class="page-title title">Coaches</h1>
</div>

<div class="parallax-3"></div>
<div class="coach-grid-1">
  <div class="coach-space-top"></div>
  <div class="coach-space-bottom"></div>
</div>

<div class="coach-grid-4">
  <div class="coaches-space-top"></div>
  <h1 class="coach-header"><?php echo $title_coaches; ?></h1>
  <div class="coaches-space-middle"></div>
  <div class="first-p">
    <p><?php echo $coaches_intro_1; ?></p>
  <p><?php echo $coaches_intro_2; ?></p>
    <p><?php echo $coaches_intro_3; ?></p>
    <p><?php echo $coaches_intro_4; ?></p>
    <p><?php echo $coaches_intro_5; ?></p>
  </div>
  <div class="drown">

    <?php
      if( !empty($coaches_image) ) : ?>
      <img  class="drown-pic" src="<?php echo $coaches_image['url']; ?>" alt="<?php echo $coaches_image['alt']; ?>">
    <?php endif; ?>
  </div>
  <div class="second-p2">
    <p class="program-title"><?php echo $program_title; ?></p>

<br/>
<!-- <img class="title-icon2" src="<?php bloginfo('stylesheet_directory'); ?>/images/Kari Circles Logo 2.png" alt=""> -->
<div class="points">

  <p>&nbsp;&#8226;<?php echo $point__1; ?></p>
  <p>&nbsp;&#8226;<?php echo $point__2; ?></p>
  <p><p>&nbsp;&#8226;<?php echo $point__3; ?></p></p>
  <p>&nbsp;&#8226;<?php echo $point__4; ?></p>

</div>
<p class="program-curriculum"><?php echo $coaches_curriculm; ?></p>
<section class="program">



<div>

  <p>&nbsp;&#8226;<?php echo $cur_1; ?></p>
  <p>&nbsp;&#8226;<?php echo $cur_2; ?></p>
  <p>&nbsp;&#8226;<?php echo $cur_3; ?></p>
<p>&nbsp;&#8226;<?php echo $cur_4; ?></p>
<p>&nbsp;&#8226;<?php echo $cur_5; ?> </p>
</div>
<p><?php echo $included; ?>
</p>
</section>

</div>
  <section class="third-p">





    <p class="program-title"><?php echo $congruency_title; ?></p><br/>
<div class="congruency">
  <p><?php echo $congruency_paragraph_1; ?></p>
    <p><?php echo $congruency_paragraph_2; ?></p>
    <p><?php echo $congruency_paragraph_3; ?></p>
  <p><?php echo $congruency_paragraph_4; ?></p>
</div>
    </section>
  <div class="coaches-space-bottom"></div>
</div>


<div class="well-button">
  <div class="well-space-top"></div>
  <div class="well-space-middle"></div>
  <a class="well-cta-coach btn" href="https://karialbro.com/work-with-me"><button style="text-transform: uppercase;">Start the conversation</button></a>
  <div class="well-space-bottom"></div>
</div>

<div class="parallax-3"></div>

<?php get_footer() ?>
