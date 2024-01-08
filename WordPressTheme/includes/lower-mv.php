<?php 
    $lower_mv_title =  get_post_meta($post->ID , 'lower_mv_title' ,true);
    $lower_sub_title = get_post_meta($post->ID , 'lower_mv_sub_title' ,true);
    $lower_mv_img = get_post_meta($post->ID , 'lower_mv_img' ,true);
    $lower_mv = wp_get_attachment_image_src(get_post_meta($post->ID, 'lower_mv_img', true), 'full');
$lower_mv_url = !empty($lower_mv[0]) ? esc_url($lower_mv[0]) : ''; // 画像URLを取得
?>
<!-- PCサイズ -->
<div class="c-lower-header">
  <div class="c-lower-header__flex">
    <h1 class="c-lower-header-title"><span class="c-lower-header-title__en"><?php echo $lower_sub_title; ?></span>
      <span class="c-lower-header-title__jp"><?php echo $lower_mv_title; ?></span>
    </h1>
    <div class="c-lower-header__img"><img src="<?php echo $lower_mv_url; ?>" alt="ページイメージ画像"></div>
  </div>
</div>