<section class="l-kv">
  <figure class="p-kv">
    <video src="<?php echo esc_url(get_theme_file_uri('/kv.mp4')); ?>" loop autoplay muted>
    </video>
  </figure>
  <h1 class="p-kv__text">
    <span class="p-kv__sub-title">ホームページのデザイン・制作</span>
    <span class="p-kv__title">つむぎCODE</span>
    <!-- <span class="p-kv__sub-desc">Web担当者のフタンをへらします</span> -->
  </h1>
</section>
<section class="l-top-news">
  <div class="p-top-news">
    <ul class="p-top-news__items p-post-lists">
      <!-- ループの開始 -->
      <?php
              $paged = get_query_var('paged')? get_query_var('page') : 1;
              $args = array(
                'post_type' => 'post',
                'orderby' => 'post_date',
                'posts_per_page' => 3,
              ); 
              $the_query = new WP_Query($args); ?>

      <?php if ( $the_query->have_posts() ): ?>
      <?php while($the_query->have_posts()):$the_query->the_post(); ?>
      <li class="p-top-news__item"><a class="p-top-news__item-link" href="<?php the_permalink(); ?>">
          <time class="p-top-news__item-time" datetime="<?php the_time('Y.n.j'); ?>">
            <?php echo get_the_time('Y.m.d'); ?>
          </time>
          <p class="p-top-news__item-title"><?php echo mb_substr($post-> post_title, 0, 16).'…'; ?></p>
        </a></li>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif;?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </div>
</section>