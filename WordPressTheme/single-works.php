<?php get_header(); ?>
<div class="p-single-post p-single-works c-container">
  <div class="p-single-works__inner">

    <article class="p-single-post__content">
      <!-- ループの開始 -->
      <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
      <div class="p-single-post__body">
        <!-- カテゴリーを全部表示(リンクなし) -->
        <div class="p-single-post__meta-wrap"><time
            class="p-sing-post__time c-time"><?php echo get_the_time('Y.m.j'); ?></time><span
            class="p-single-post__cat c-cat"><?php
        $terms = get_the_terms($post->ID, 'recruit_cat');
        if (is_array($terms) && !empty($terms)) {
            echo esc_html($terms[0]->name);
        }
    ?></span>
        </div>
        <h2 class="p-single-post__title p-single-works__title"><?php the_title(); ?></h2>
        <div class="p-single-works__imgs c-container">
          <?php 
            $pc_img_id = get_post_meta($post->ID , 'work_img_pc' ,true);
            $sp_img_id = get_post_meta($post->ID , 'work_img_sp' ,true);

            if ($pc_img_id) {
              $pc_img = wp_get_attachment_image_src($pc_img_id, 'full');
              ?>

          <figure class="p-single-works__pc-img">
            <h3 class="p-single-works__img-text">パソコン</h3>
            <div class="p-single-works__pc-img-wrap">
              <img src="<?php echo esc_url($pc_img[0]); ?>" alt="PCの画像">
            </div>
          </figure>
          <?php } ?>

          <?php if ($sp_img_id) {
            $sp_img = wp_get_attachment_image_src($sp_img_id, 'full');
            ?>
          <figure class="p-single-works__sp-img">
            <h3 class="p-single-works__img-text">モバイル</h3>
            <div class="p-single-works__sp-img-wrap">
              <img src="<?php echo esc_url($sp_img[0]); ?>" alt="SPの画像">
            </div>
          </figure>
          <?php } ?>
        </div>
        <div class="p-single-works__content"><?php the_content();?></div>
      </div>
    </article>
    <?php endwhile;?>
    <?php else: ?>
    <h3 class="p-single-post__title">現在記事は準備中でございます。</h3>
    <?php endif;?>
  </div>
  <!-- ページネーション -->
  <div class="prev-next">
    <div class="previous"><?php previous_post_link('%link', '< 前へ'); ?></div>
    <a class="top-link c-btn c-btn-small" href="<?php echo esc_url( home_url( '/works' ) ); ?>">一覧へ戻る</a>
    <div class="next"><?php next_post_link('%link', '次へ >'); ?></div>
  </div>
</div>

<?php get_footer(); ?>