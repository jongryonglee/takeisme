
<?php get_header( 'sub' ); ?>
<main>
    <div class="container2">
    <?php 
    while( have_posts()):
      the_post();
      ?>
      <?php
      $cats = get_the_category(); 
      $catId = $cats[0]->cat_ID; 
      $catName = $cats[0]->name; 
      $catSlug = $cats[0]->category_nicename;
      $link = get_category_link($catId); 
      ?>
      <div class="coverContainer">
      <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>"><img class="coverImg" src="<?php the_post_thumbnail_url('large'); ?>"></a>
    <?php endif ; ?>
      </div>
      <div class="textContainer2">
        <h1 class="name2"><?php the_title(); ?></h1>
        
        
        <?php the_content(); ?>
        
        
      </div>
      <?php 
    endwhile;
    ?>
    <main>
    <?php get_footer(); ?>
  
