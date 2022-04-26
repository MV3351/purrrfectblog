<?php get_header(); ?>


<section class="default-holder mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <div class="list-group">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action small">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-4">
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo get_the_title(); ?>">
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                  </div>
                </div>
              </a>
            <?php endwhile;
          else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3"></div>
    </div>
  </div>
</section>




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
  <?php if (is_active_sidebar('home_banner_slider')) : ?>
    <?php dynamic_sidebar('home_banner_slider'); ?>
  <?php endif; ?>
</section>



<?php get_footer(); ?>
