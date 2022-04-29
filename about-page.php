<?php

/**
 * Template Name: About Page 
 */


get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="custom-page-header pt-3 pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading small">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php 

                    if ( has_post_thumbnail() ) { ?>
                        <img class="img-fluid rounded" src=" <?php echo get_the_post_thumbnail_url(); ?>">
                    <?php } else { ?>
                        <img class="img-fluid rounded" src="<?php echo get_template_directory_uri();?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                    <?php }

                ?>
            </div>
        </div>
    </div>
</header>

<section class="section-three pt-4 pb-4 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="who-we-are-image">
                    <img class="img-fluid rounded" src="<?php echo the_field('who_we_are_image'); ?>" alt="Who we are">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="who-we-are-text small">
                   <?php echo the_field('who_we_are'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-three pt-4 pb-4 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="what-we-do-text small">
                   <?php echo the_field('what_we_do'); ?>
                </div>
            </div>
             <div class="col-lg-6 col-md-6">
                <div class="what-we-do-image">
                    <img class="img-fluid rounded" src="<?php echo the_field('what_we_do_image'); ?>" alt="Who we are">
                </div>
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

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
