<?php get_header(); ?>
<div class="l-inner c-container">
  <div class="c-post-wrap">
    <ul class="p-post-list-items">
      <!-- ループの開始 -->
      <!-- 記事のループ処理開始 -->
      <?php
			  $cat_info = get_category( get_query_var( 'cat' ) );
			  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			  $args = array(
			    'post_type' => 'post',
			    'paged' => $paged, // ページネーションがある場合に必要
			    'posts_per_page' => 3,
			    'category_name' => $cat_info->slug,
			    );
			  $wp_query = new WP_Query($args);
			  if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :
			    $wp_query->the_post();
			?>
      <li class="p-post-list-item"><a class="p-archive-post p-post-list-item__link" href="<?php the_permalink(); ?>">
          <time class="p-post-list-item__time"><?php echo get_the_time('Y.m.j'); ?></time>
          <h2 class="p-post-list-item__title"><?php the_title(); ?></h2>
        </a></li>
      <?php endwhile;?>
      <?php else: ?>
      <h3 class="p-post-list-item__title">只今準備中でございます。</h3>
      <?php endif;?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </div>
  <!-- ページナビ -->
  <div class="c-pager">
    <?php 
            $args = array(
            'mid_size' => 2, 
            'prev_text' => '<', 
            'next_text' => '>'
          ); 
          the_posts_pagination( $args );
          ?>
  </div>

</div>
<?php get_footer(); ?>