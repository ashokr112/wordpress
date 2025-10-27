
<?php
get_header();
if(have_posts()){
  while(have_posts()){ the_post(); ?>
    <section class="panel">
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </section>
  <?php }
}
get_footer();
