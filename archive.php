<?php get_header(); ?>

<header class="cat-header pt-3 pb-3">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-md-6">
        <div class="cat-header-text small text-center">
          <h1 class="fs-4 fw-600 text-center"><?php echo the_archive_title(); ?></h1>
          <?php echo category_description(); ?>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="default-holder mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <div class="list-group mb-3">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action small">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-4">
                    <?php
                    if (has_post_thumbnail()) { ?>
                      <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <?php } else { ?>
                      <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo get_the_title(); ?>">
                    <?php }
                    ?>

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
      <div class="col-lg-3 col-md-3 default_sidebar">

      <?php get_sidebar(); ?>
        
      </div>
    </div>
  </div>
</section>




<aside class="sidebar">
  <?php if (is_active_sidebar('home_sidebar')); ?>
  <?php dynamic_sidebar('home_sidebar'); ?>
</aside>



<?php get_footer(); ?>