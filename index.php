<?php get_header(); ?>



<aside class="sidebar">
    <?php if (is_active_sidebar('home_sidebar')); ?>
    <?php dynamic_sidebar('home_sidebar'); ?>
</aside>



  <div class="col-lg-3 col-md-3">


      <?php if (is_active_sidebar('default_sidebar')) : ?>
          <?php dynamic_sidebar('default_sidebar'); ?>
      <?php endif; ?>

  </div>
  
  <section class="banner cycle-slideshow">
    <?php if ( is_active_sidebar( 'home_banner_slider' ) ) : ?>  
      <?php dynamic_sidebar( 'home_banner_slider' ); ?>
    <?php endif; ?>
  </section>



<?php get_footer(); ?>