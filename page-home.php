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
$logo = get_field('logo');
$logo2 = get_field('logo2');

get_header();
 ?>
<style>nav {display:none !important}</style>

    <!-- Landing Page with no Header -->
  <div class="start-grid" id="hero" width="100%" height="100%">
    <h1 class="kari-title">Coaching with Kari Albro</h1>
    <h1 class="link-1"><a href="<?php echo $link_1_url; ?>" class="home-links bckd-img1" id="bckd-img1"><?php echo $link_1_title; ?></a></h1>
    <h1 class="link-2"><a href="<?php echo $link_2_url; ?>" class="home-links bckd-img5" id="bckd-img2"><?php echo $link_2_title; ?></a></h1>
    <h1 class="link-3"><a href="<?php echo $link_3_url; ?>" class="home-links bckd-img3" id="bckd-img3"><?php echo $link_3_title; ?></a></h1>
    <h1 class="link-4"><a href="<?php echo $link_4_url; ?>" class="home-links bckd-img5" id="bckd-img7"><?php echo $link_4_title; ?></a></h1>
    <h1 class="link-5"><a href="<?php echo $link_5_url; ?>" class="home-links bckd-img4" id="bckd-img4"><?php echo $link_5_title; ?></a></h1>
  </div>
  <?php
    if( !empty($logo) ) : ?>
    <img class="home-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
  <?php endif; ?>
  <!-- <?php
    if( !empty($logo2) ) : ?>
    <img class="home-logo-2" src="<?php echo $logo2['url']; ?>" alt="<?php echo $logo2['alt']; ?>">
  <?php endif; ?> -->
<!-- </div> -->

<!-- <div class="home-cta">
<a class="cta-home" onclick="popup()"><button>Subscribe to my newsletter!</button></a>
</div>

<script type=”text/javascript” src=”//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js” data-dojo-config=”usePlainJson: true, isDebug: false”></script>

<script> -->
<!-- // var showMailingPopUp;
//
// function showMailingPopUp() {
// require([“mojo/signup-forms/Loader”], function(L) {
//   alert('The Eagle has landed.'); L.start({"baseUrl":"mc.us14.list-manage.com","uuid":"70dabbb8406ea084974221b68","lid":"85f4799f29"}) });
// document.cookie = “MCPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC”;
//
// };
// document.getElementById(“openpopup”).onclick = function() {showMailingPopUp()}; -->

<!-- var popup;

function popup(){
  alert("Well, this works!");
}

</script> -->

<?php
get_footer(); ?>
