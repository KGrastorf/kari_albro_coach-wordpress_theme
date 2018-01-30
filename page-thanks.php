<?php
/* Template Name: Thanks */
get_header() ?>

<div class="title-bar-wellness">
  <h1 class="page-title-wellness">Thanks!</h1>
  <p class="words-paragraph">You will be redirected to the home page in 5 seconds.</p>
</div>

<script type="text/javascript">
    function Redirect() {
        window.location = "http://localhost/KariCoach/";
    }
    setTimeout('Redirect()', 5000);

    $(document).ready(function(){
    $(this).scrollTop(0);
});
</script>

<?php get_footer() ?>
