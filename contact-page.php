<?php

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="map-holder pb-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <iframe class="border rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.450851270134!2d-119.78045408536873!3d36.73574787996185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80945fb2c7d60e87%3A0x9b82a7350ac60ce0!2sBitwise%20%7C%2041!5e0!3m2!1sen!2sus!4v1651268363477!5m2!1sen!2sus" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<section class="contact-main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <?php if (is_active_sidebar('contact_form')) : ?>
          <?php dynamic_sidebar('contact_form'); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-8 col-md-8">

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>