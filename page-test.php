<?php
/* Template name: Testimonials */

$testimonial_1 = get_field('testimonial_1');
$testimonial_2 = get_field('testimonial_2');
$testimonial_3 = get_field('testimonial_3');
$testimonial_4 = get_field('testimonial_4');

$name_1 = get_field('name_1');
$name_2 = get_field('name_2');
$name_3= get_field('name_3');
$name_4 = get_field('name_4');

$face_1 = get_field('face_1');
$face_2 = get_field('face_2');
$face_3 = get_field('face_3');
$face_4 = get_field('face_4');

get_header() ?>



<div class="grid-test-all flower1">
<div class="full">
  <div class="parallax-3"></div>
  <div class="title-bar-test test-grid">
    <h1 class="page-title-test title">Success Stories</h1>
  </div>
  <div class="vine">
    <!-- <img src=" <?php bloginfo('stylesheet_directory'); ?>/images/VineLong6.svg" alt=""> -->
  </div>
  <div class="">
    <div class="grid-2">
      <div class="test-column-1">
        <?php
          if( !empty($face_1) ) : ?>
          <img src="<?php echo $face_1['url']; ?>" alt="<?php echo $face_1['alt']; ?>" class="test-img1">
        <?php endif; ?>
      </div>
      <div class="test-column-2">
        <blockquote>
          "<?php echo $testimonial_1; ?>"

        </blockquote>
        <cite><?php echo $name_1; ?></cite>
      </div>
    </div>
  </div>

  <div class="vine">
    <!-- <img src=" <?php bloginfo('stylesheet_directory'); ?>/images/VineLong6.svg" alt=""> -->
  </div>

  <div class="">
    <div class="grid-3">
      <div class="test-column-3">
        <blockquote>
          "<?php echo $testimonial_2; ?>"
        </blockquote>
        <cite><?php echo $name_2; ?></cite>

      </div>
      <div class="test-column-4">
        <?php
          if( !empty($face_2) ) : ?>
          <img src="<?php echo $face_2['url']; ?>" alt="<?php echo $face_2['alt']; ?>"

          class="test-img2">
        <?php endif; ?>
      </div>

    </div>
  </div>
  <div class="vine">
    <!-- <img src=" <?php bloginfo('stylesheet_directory'); ?>/images/VineLong6.svg" alt=""> -->
  </div>
  <div class="">
    <div class="grid-4">
      <div class="test-column-5">
        <?php
          if( !empty($face_3) ) : ?>
          <img src="<?php echo $face_3['url']; ?>" alt="<?php echo $face_3['alt']; ?>"  class="test-img1">
        <?php endif; ?>
      </div>
      <div class="test-column-6">
        <blockquote>
          "<?php echo $testimonial_3; ?>"

        </blockquote>
        <cite><?php echo $name_3; ?></cite>
      </div>
    </div>
  </div>
  <div class="vine">
    <!-- <img src=" <?php bloginfo('stylesheet_directory'); ?>/images/VineLong6.svg" alt=""> -->
  </div>

  <div class="">
    <div class="grid-3">
      <div class="test-column-3">
        <blockquote>
          "<?php echo $testimonial_4; ?>"

        </blockquote>
        <cite><?php echo $name_4; ?></cite>

      </div>
      <div class="test-column-4">
        <?php
          if( !empty($face_4) ) : ?>
          <img src="<?php echo $face_4['url']; ?>" alt="<?php echo $face_4['alt']; ?>"  class="test-img2">
        <?php endif; ?>
      </div>

    </div>
  </div>
  <div class="about-cta">
  <div class="spacer-test-1"></div>
  <a class="about-button btn" href="https://karialbro.com/work-with-me"><button>START THE CONVERSATION</button></a>
  <div class="spacer-test-2"></div>
  </div>

  <div class="parallax-3"></div>
</div>
</div>

<?php get_footer() ?>
