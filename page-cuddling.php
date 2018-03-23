<?php
/* Template Name: Cuddling */

$cuddling_title = get_field('cuddling_title');
$cuddling_text = get_field('cuddling_text');
$cuddling_text_2 = get_field('cuddling_text_2');
$cuddling_text_3= get_field('cuddling_text_3');
$cuddling_image = get_field('cuddling_image');

get_header(); ?>

<div class="parallax-3"></div>
<div class="title-bar-cuddling cuddling-grid">
  <h1 class="page-title-cuddling title">Cuddling Therapy</h1>
</div>
<div class="parallax-3"></div>


<div class="cuddling-grid-body">
  <div class="cuddling-space-top"></div>
  <p class="cuddling-title"><?php echo $cuddling_title; ?></p>
  <p class="cuddling-text"><?php echo $cuddling_text; ?></p>
  <p class="cuddling-text2"><?php echo $cuddling_text_2; ?></p>
  <p class="cuddling-text3"><?php echo $cuddling_text_3; ?></p>
  <?php
    if( !empty($cuddling_image) ) : ?>
    <img  class="cuddling-img title" src="<?php echo $cuddling_image['url']; ?>" alt="<?php echo $cuddling_image['alt']; ?>">
  <?php endif; ?>

</div>


<div class="cuddle-button">
  <div class="cuddle-space-top"></div>
  <div class="cuddle-space-middle"></div>
  <a class="cuddle-cta-coach btn" href="#"><button style="text-transform: uppercase;">Book A Session</button></a>
  <div class="cuddle-space-bottom"></div>
</div>

<div class="parallax-3"></div>
<?php get_footer(); ?>
