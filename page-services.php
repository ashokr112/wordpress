
<?php
/* Template Name: Services Page */
get_header();
?>
<section class="panel">
  <h2>Our Services</h2>
  <p>At Renevate Global Foundation, we offer a comprehensive suite of services designed to drive sustainable, community-led development.</p>
  <div class="services-grid">
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/data-research')); ?>">Data & Research</a></h3></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/csr-advisory')); ?>">CSR Advisory & Strategy</a></h3></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/social-development')); ?>">Social Development</a></h3></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/meal')); ?>">MEAL</a></h3></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/training')); ?>">Training</a></h3></div>
  </div>
</section>
<?php get_footer(); ?>
