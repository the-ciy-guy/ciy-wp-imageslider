<?php 

/*
    @package imageslider

    Index.php Template
*/
get_header();
?>
<div class="wrap">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
      <div class="slide slide1" style="background-image: url(<?php echo get_theme_mod('slider_one', get_template_directory_uri() . '/img/coffee1.jpeg'); ?>";>
        <div class="slide-content">
          <span><?php echo get_theme_mod('slider_one_header', 'Image One'); ?></span>
        </div>
      </div>
      <div class="slide slide2" style="background-image: url(<?php echo get_theme_mod('slider_two', get_template_directory_uri() . '/img/coffee2.jpeg'); ?>";>
        <div class="slide-content">
          <span><?php echo get_theme_mod('slider_two_header', 'Image Two'); ?></span>
        </div>
      </div>
      <div class="slide slide3" style="background-image: url(<?php echo get_theme_mod('slider_three', get_template_directory_uri() . '/img/coffee3.jpeg'); ?>";>
        <div class="slide-content">
          <span><?php echo get_theme_mod('slider_three_header', 'Image Three'); ?></span>
        </div>
      </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
  </div>
  <?php get_footer(); ?>