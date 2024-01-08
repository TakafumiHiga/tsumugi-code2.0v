<?php get_header(); ?>
<div class="inner c-container">
  <div class="l-flex">
    <div class="l-flex__main">
      <!-- カテゴリソートタグここまで -->
      <?php get_template_part('includes/works-items'); ?>
      <!-- ページナビ -->
      <div class="c-pager">
        <?php 
     $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
            $args = array(
            'mid_size' => 2, 
            'prev_text' => '<', 
            'next_text' => '>'
          ); 
          the_posts_pagination( $args );
          ?>
      </div>
    </div>

    <div class="l-flex__aside p-aside">
      <?php get_template_part('sidebar-case'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>