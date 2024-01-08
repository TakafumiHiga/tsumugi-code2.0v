<div class="p-case">

  <div class="swiper-pagination p-case__swiper-pagination"></div>
  <div class="swiper clientsSwiper p-case__swiper">
    <div class="swiper-wrapper">

      <!-- ループの開始 -->
      <?php
      $paged = get_query_var('paged')? get_query_var('page') : 1;
      $args = [
        'post_type' => 'works',
        'orderby' => 'post_date',
        'posts_per_page' => -1,
        // 'paged' => $paged,
      ]; 
      $the_query = new WP_Query($args); ?>

      <?php if ( $the_query->have_posts() ): ?>
      <?php while($the_query->have_posts()):$the_query->the_post(); ?>

      <div class="swiper-slide"><a class="p-case__img" href="<?php the_permalink(); ?>">
          <?php
          if(has_post_thumbnail()):
            the_post_thumbnail('medium_thumbnail');
          else:
            ?>
          <?php 
              endif;
              ?>
        </a>
        <?php $client = get_post_meta($post->ID , 'client' ,true); ?>
        <div class="p-case__client-name"><?php echo esc_html($client); ?></div>
      </div>

      <?php endwhile;?>
      <?php else: ?>
      <?php endif;?>
      <?php wp_reset_postdata(); ?>
    </div>

  </div>
  <div class="swiper-button-next p-case__swiper-next"></div>
  <div class="swiper-button-prev p-case__swiper-prev"></div>

</div>