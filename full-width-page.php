<?php 

/**
 * Template Name: Full Width 
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="custom-page-header pt-3 pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading small">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
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
<section class="page contents border-top pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <article class="main-content small ">
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </div>

</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
