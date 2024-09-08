<?php get_header(); ?>
  <main>
    <div class="container">
      <div class="imageContainer">
        <div class="image2">
          <a href="<?php echo esc_url(home_url()); ?>/about">
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
          </a>
        </div>
        <div class="image1">
        <img class="title" src="<?php bloginfo('template_directory'); ?>/images/textlogo2.png">
        </div>
        <div class="image3">
        <img class="title" src="<?php bloginfo('template_directory'); ?>/images/textlogo.png">
        </div>
      </div>
      <div class="menuContainer">
        <ul class="list">
          <li class="item">
            <p class="p"><a href="<?php echo esc_url(home_url()); ?>/about">Profile</a></p>
          </li>
          <li class="item">
            <p class="p"><a href="<?php echo esc_url(home_url()); ?>/works">Works</a></p>
          </li>
          <li class="item">
            <p class="p"><a href="<?php echo esc_url(home_url()); ?>/rapper">Rapper</a></p>
          </li>
        </ul>
      </div>
    </div>
    <main>
    <?php get_footer(); ?>
