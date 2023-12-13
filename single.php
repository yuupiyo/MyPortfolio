<?php get_header(); ?>

  <main class="l-main p-single" ontouchstart="">
    <div class="p-single__inner">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
          <div class="p-single__title">
            <h2 class="p-single__h2 c-font-family__en c-color__brown c-circle"><?php the_title(); ?></h2>
            <p class="c-text c-font-family__en c-color__brown"><?php the_field('sub_title'); ?></p>
          </div>
          <ul class="p-single__ul c-flex__section">
            <li class="p-single__li c-background__white c-shadow c-border-radius">
              <h3 class="p-single__h3 c-font-family__en c-color__brown c-border-bottom">PC</h3>
              <figure>
                <img src="<?php the_field('pc_img'); ?>"  width="391" height="507" alt="オンラインスクールRaiseTechのWordPress副業コースの最終課題で作成したWebサイトのPCサイズの写真" loading="lazy">
              </figure>
            </li>
            <li class="p-single__li c-background__white c-shadow c-border-radius">
              <h3 class="p-single__h3 c-font-family__en c-color__brown c-border-bottom">SP</h3>
              <figure>
                <img class="p-single__sp-image" src="<?php the_field('sp_img'); ?>" width="93" height="502" alt="オンラインスクールRaiseTechのWordPress副業コースの最終課題で作成したWebサイトのSPサイズの写真" loading="lazy">
              </figure>
            </li>
          </ul>

          <ol class="p-single__ol">
            <dt class="p-single__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">制作期間</dt>
            <dd class="p-single__dd c-text c-color__brown c-font-family__ja"><?php the_field('production_period'); ?></dd>
            <dt class="p-single__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">使用ツール・言語</dt>
            <dd class="p-single__dd c-text c-color__brown c-font-family__ja"><?php the_field('tools'); ?></dd>
            <dt class="p-single__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">Link</dt>
            <dd class="p-single__dd c-text c-color__brown c-font-family__en"><a href=<?php the_field('link'); ?> target="_blank"><?php the_field('link'); ?></a></dd>
            <dt class="p-single__dt c-font-family__ja--bold c-color__brown c-border__narrow c-border-radius__narrow">コメント</dt>
            <dd class="p-single__dd c-text c-color__brown c-font-family__ja"><?php the_content(); ?></dd>
          </ol> 

          <!-- // 次の記事/前の記事のナビゲーション生成 -->
          <?php
            the_post_navigation( array(
              'prev_text' => '&lt;&lt; Prev', // 次の記事のリンクテキスト変更
              'next_text' => 'Next &gt;&gt;', // 前の記事のリンクテキスト変更
              'class' => 'p-pagenation' // お好きなクラス名をココに
            ) );
          ?>    
        <?php endwhile; else: ?>
          <p>記事はありません。</p>
      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>