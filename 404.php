<?php get_header(); ?>

<main class="l-main p-single" ontouchstart="">
  <div class="p-single__title">
    <h2 class="p-single__h2 c-font-family__en c-color__brown c-circle">NOT FOUND</h2>
    <p class="c-text c-font-family__en c-color__brown">ページが見つかりません</p>
  </div>

  <div class="c-inner">
    <div class="p-page__form c-background__white c-shadow c-border-radius u-p__page">
      <div class="p-page__text c-text c-font-family__ja c-color__brown">
        <p>お探しのページは、削除されたか、名前が変更された可能性があります。</p>
        <p class="u-mb__24">直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認ください。</p>
        <p>ブラウザの再読み込みを行ってもこのページが表示される場合は、<a class="c-font-family__en c-text__span c-background__span" href="<?php echo esc_url(home_url( '/' )); ?>">トップページ</a>から目的のページをお探しください。</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>