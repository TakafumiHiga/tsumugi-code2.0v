<?php get_header(); ?>
<div class="inner c-container">

  <article class="p-single-post p-single-post__inner">
    <!-- ループの開始 -->
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    <div class="p-single-post__body">
      <!-- カテゴリーを全部表示(リンクなし) -->
      <div class="p-single-post__meta-wrap"><time
          class="p-sing-post__time c-time"><?php echo get_the_time('Y.m.j'); ?></time>
        <?php
              $categories = get_the_category();
              foreach( $categories as $category ){
                echo '<span class="p-single-post__cat c-cat">'.$category->name.'</span>';
              }
          ?></div>
      <h3 class="p-single-post__title"><?php the_title(); ?></h3>
      <div class="p-single-post__content"><?php the_content();?></div>
    </div>
  </article>
  <?php endwhile;?>
  <?php else: ?>
  <h3 class="p-single-post__title">現在記事は準備中でございます。</h3>
  <?php endif;?>
  <!-- ページネーション -->
  <div class="prev-next">
    <div class="previous"><?php previous_post_link('%link', '< 前へ'); ?></div>
    <a class="top-link c-btn c-btn-small" href="<?php bloginfo('url'); ?>/news">一覧へ戻る</a>
    <div class="next"><?php next_post_link('%link', '次へ >'); ?></div>
  </div>
</div>

<?php get_footer(); ?>