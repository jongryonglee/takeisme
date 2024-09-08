<?php get_header( 'sub' ); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    
<div class="container2">
    <?php if(has_post_thumbnail()): ?>
    <div class="coverContainer">
    <a href="<?php the_permalink(); ?>"><img class="coverImg" src="<?php the_post_thumbnail_url('large'); ?>"></a>
    </div>
    <?php endif; ?>


<?php endwhile; endif; ?>
</div>
    <?php get_footer(); ?>