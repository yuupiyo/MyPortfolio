<?php get_header(); ?>

  <main class="l-main p-single" ontouchstart="">
    <div class="p-single__title">
      <h2 class="p-single__h2 c-font-family__en c-color__brown c-circle"><?php the_title(); ?></h2>
      <p class="c-text c-font-family__en c-color__brown"><?php the_field('sub_title'); ?></p>
    </div>
    <div class="p-single__inner">
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
    </div>
  </main>

  <ul class="p-pagenation c-inner c-font-family__en c-color__brown">
    <li class="p-pagenation__li">Prev</li>
    <li class="p-pagenation__li">Next</li>
  </ul>

<?php get_footer(); ?>