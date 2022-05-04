<?php
/**
 * Template Name: Front Page
 */
get_header(); ?>
<header class="main-header pt-5 pb-5 border-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <?php if (is_active_sidebar('front_page_banner_text')) : ?>
          <?php dynamic_sidebar('front_page_banner_text') ?>
        <?php endif; ?>
        <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
          </svg> Sign Up to hear Meowt</a>
      </div>
      <div class="col-lg-6 col-md-6">
        <?php if (is_active_sidebar('front_page_banner_image')) : ?>
          <?php dynamic_sidebar('front_page_banner_image'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
<section class="features pt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="d-flex align-items-center feature_holder small border rounded mb-3">
          <div class="flex-shrink-0">
            <img class="img-fluid" src="<?php echo the_field('feature_one_image'); ?>" alt="Featured Text">
          </div>
          <div class="flex-grow-1 ms-3">
            <?php echo the_field('feature_one_text'); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="d-flex align-items-center feature_holder small border rounded mb-3">
          <div class="flex-shrink-0">
            <img class="img-fluid" src="<?php echo the_field('feature_two_image'); ?>" alt="Featured Text">
          </div>
          <div class="flex-grow-1 ms-3">
          <?php echo the_field('feature_two_text'); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="d-flex align-items-center feature_holder small border rounded mb-3">
          <div class="flex-shrink-0">
            <img class="img-fluid" src="<?php echo the_field('feature_three_image'); ?>" alt="Featured Text">
          </div>
          <div class="flex-grow-1 ms-3">
          <?php echo the_field('feature_three_text'); ?>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="course-cat border-top pt-3 pb-3">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-md-6">
        <div class="course_cat_text text-center small">
          <?php if (is_active_sidebar('course_cat_text')) : ?>
            <?php dynamic_sidebar('course_cat_text'); ?>
          <?php endif; ?>
          <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
            </svg> Sign Up to hear Meowt</a>
        </div>
      </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-3">
            <a href="#" class="card text-decoration-none text-center mb-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-one.jpg" alt="Job Oriented Courses">
                <div class="card-body">
                    <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="#" class="card text-decoration-none text-center mb-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-two.jpg" alt="Job Oriented Courses">
                <div class="card-body">
                    <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="#" class="card text-decoration-none text-center mb-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-three.jpg" alt="Job Oriented Courses">
                <div class="card-body">
                    <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="#" class="card text-decoration-none text-center mb-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-four.jpg" alt="Job Oriented Courses">
                <div class="card-body">
                    <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                </div>
          </a>
        </div>
    </div>
  </div>
</section>

<section class="services border-top pt-4 pb-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if (is_active_sidebar('services_text')) : ?>
                        <?php dynamic_sidebar('services_text'); ?>
                    <?php endif; ?>
                    <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> Sign Up to hear Meowt</a>
                </div>
            </div>    

        </div>
    </div>
</section>

<section class="main-content border-top pb-4 pt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="content-area">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <?php

            if (has_post_thumbnail()) { ?>
                <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            <?php } else { ?>
                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo get_the_title(); ?>">
            <?php }

            ?>
            </div>
        </div>
    </div>    
</section>                             

<?php get_footer(); ?>