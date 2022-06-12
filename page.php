<?php

get_header();
?>

<main id="primary" class="site-main">
  <div class="site-main-heroview">
    <div class="heroview-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroview.png">
    </div>
    <div class="heroview-scroll">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroscroll.png">
    </div>
  </div>

  <div class="site-main-news">
    <?php
    $args = [
      'post_type' => 'news', // カスタム投稿名が「gourmet」の場合
      'posts_per_page' => 4, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

    <?php if ($my_query->have_posts()) : // 投稿がある場合 
    ?>

      <ul>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <!-- ▽ ループ開始 ▽ -->

          <li>
            <h3><?php the_title(); ?></h3>
            <p><?php the_time(get_option('date_format')); ?></p>
          </li>

          <!-- △ ループ終了 △ -->

        <?php endwhile; ?>

      </ul>

    <?php else : // 投稿がない場合
    ?>

      <p>まだ投稿がありません。</p>

    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</main><!-- #main -->

<?php
get_footer();
