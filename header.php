
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header" role="banner">
  <div class="wrap navbar">
    <div class="site-branding">
      <div class="mark">RG</div>
      <div>
        <div class="site-title"><?php bloginfo('name'); ?></div>
        <div style="font-size:12px;color:#6b7280">Catalysing Innovation • Creating Impact</div>
      </div>
    </div>

    <nav class="nav-primary" role="navigation">
      <?php
        wp_nav_menu(array(
          'theme_location'=>'primary',
          'container' => false,
          'menu_class' => '',
          'items_wrap' => '%3$s'
        ));
      ?>
      <a class="btn btn-primary" href="<?php echo esc_url(home_url('/services')); ?>">Explore</a>
      <a class="donate" href="<?php echo esc_url(home_url('/contact')); ?>">Donate</a>
    </nav>
  </div>
</header>
<main id="site-content">
