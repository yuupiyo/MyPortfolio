<?php get_header(); ?>

  <main class="l-main p-page">
    <div class="c-inner__page">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
          <div class="p-page__title" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="c-title__page c-font-family__en c-color__brown c-circle"><?php the_title(); ?></h1>
            <p class="c-text c-font-family__en c-color__brown"><?php the_field('sub_title'); ?></p>
          </div>
          <ul class="c-flex__section u-mb__120">
            <li class="p-page__li c-background__white c-shadow c-border-radius">
              <h2 class="p-page__h2 c-title__single c-font-family__en c-color__brown c-border-bottom">PC</h2>
              <figure>
                <?php $pc_img = get_field('pc_img'); ?>
                <img class="c-border__image" src="<?php echo $pc_img['url']; ?>"  width="<?php echo $pc_img['width']; ?>" height="<?php echo $pc_img['height']; ?>" alt="<?php echo $pc_img['alt']; ?>" loading="lazy">
              </figure>
            </li>
            <li class="p-page__li c-background__white c-shadow c-border-radius">
              <h2 class="p-page__h2 c-title__single c-font-family__en c-color__brown c-border-bottom">SP</h2>
              <figure>
                <?php $sp_img = get_field('sp_img'); ?>
                <img class="p-page__sp-image c-border__image" src="<?php echo $sp_img['url']; ?>" width="<?php echo $sp_img['width']; ?>" height="<?php echo $sp_img['height']; ?>" alt="<?php echo $sp_img['alt']; ?>" loading="lazy">
              </figure>
            </li>
          </ul>

          <ol class="p-page__ol">
            <dt class="p-page__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">制作期間</dt>
            <dd class="p-page__dd c-text c-color__brown c-font-family__ja"><?php the_field('production_period'); ?></dd>
            <dt class="p-page__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">使用ツール・言語</dt>
            <dd class="p-page__dd c-text c-color__brown c-font-family__ja"><?php the_field('tools'); ?></dd>
            <dt class="p-page__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">Link</dt>
            <dd class="p-page__dd c-text c-color__brown c-font-family__en"><a href=<?php the_field('link'); ?> target="_blank"><?php the_field('link'); ?></a></dd>
            <dt class="p-page__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">コメント</dt>
            <dd class="p-page__dd c-text c-color__brown c-font-family__ja"><?php the_content(); ?></dd>
          </ol> 

          <!-- // 次の記事/前の記事のナビゲーション生成 -->
          <?php
            $paginationhtml = get_the_post_navigation( array(
              'prev_text' => '&lt;&lt; Prev', // 次の記事のリンクテキスト変更
              'next_text' => 'Next &gt;&gt;', // 前の記事のリンクテキスト変更
              'class' => 'p-pagenation' // お好きなクラス名をココに
            ) );
            echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
          ?>    
        
          <?php wp_link_pages(); ?>
        <?php endwhile; else: ?>
          <p>記事はありません。</p>
      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>