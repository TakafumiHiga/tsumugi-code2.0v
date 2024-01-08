<?php get_header(); ?>

<div class="inner">
  <?php the_content(); ?>
  <?php get_template_part('includes/kv-slider'); ?>
  <?php get_template_part('includes/works-swiper'); ?>
</div>
<?php get_footer(); ?>