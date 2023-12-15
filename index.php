<?php get_header(); ?>

  <div class="l-container">
    <div class="p-mainvisual js-mainvisual">
      <div class="p-mainvisual__center">
        <h1 class="p-mainvisual__title c-font-family__en c-color__brown js-title">
          <?php $user_id = get_the_author_meta('ID', $post->post_author); echo nl2br(get_field('maintitle', 'user_'.$user_id)); ?>
        </h1>
      </div>
      <figure>
        <picture>
          <source srcset="<?php echo esc_url (get_theme_file_uri('/images/leaf-left.webp')); ?>" type="image/webp">
          <img class="p-mainvisual__left js-mainvisualLeft" src="<?php echo esc_url (get_theme_file_uri('/images/leaf-left.png')); ?>" srcset="<?php echo esc_url (get_theme_file_uri('/images/leaf-left.png')); ?> 2x" width="1119" height="802" alt="メインビジュアルの左側に配置されている葉っぱの画像">
        </picture>
      </figure>
      <figure>
        <picture>
          <source srcset="<?php echo esc_url (get_theme_file_uri('/images/leaf-right.webp')); ?>" type="image/webp">
          <img class="p-mainvisual__right js-mainvisualRight" src="<?php echo esc_url (get_theme_file_uri('/images/leaf-right.png')); ?>" srcset="<?php echo esc_url (get_theme_file_uri('/images/leaf-right.png')); ?> 2x" width="1825" height="802" alt="メインビジュアルの右側に配置されている葉っぱの画像">
        </picture>
      </figure>
    </div>
  </div>

  <main class="l-main" ontouchstart="">
    <div class="c-inner">
      <section id="about" class="p-about">
        <h2 class="p-about__title c-font-family__en c-color__brown c-title__h2 js-fadein">About</h2>
        <ul class="c-flex__about">
          <li class="p-about__photo js-fadein">
            <figure class="u-animation">
              <img src="<?php $user_id = get_the_author_meta('ID', $post->post_author); the_field('myphoto', 'user_'.$user_id); ?>" width="285" height="453" alt="自分の写真" loading="lazy">
            </figure>
          </li>
          <li class="p-about__info c-background__white c-shadow c-border-radius js-fadein">
            <h3 class="p-about__h3 c-title__h3 c-font-family__en c-color__brown c-title__h3 c-border-bottom">
            <?php
              $author_nicename = get_the_author_meta('display_name', $post->post_author);
              echo $author_nicename;
            ?>
            </h3>
            <div class="c-font-family__ja c-color__brown c-text u-mb__24">
            <?php
              $author_description = get_the_author_meta('description', $post->post_author);
              echo wpautop($author_description);
            ?>
            </div>
            <?php if(get_the_author_meta('buildup', $post->post_author) != ""): ?>
              <p class="c-font-family__ja c-color__brown c-text">日々の学習記録は、<a class="p-about__span c-font-family__en c-text__buildup" href="<?php echo get_the_author_meta('buildup', $post->post_author); ?>" target="_blank">「BuildUp」</a>にて更新しております。</p>
            <?php endif; ?>
            <?php if(get_the_author_meta('codepen', $post->post_author) != ""): ?>
              <ul class="p-about__list c-flex__about-icon">
                <li class="c-icon u-hover__popup">
                  <p class="c-icon__name c-font-family__en c-color__white c-background__white">CodePen</p>
                  <a href="<?php echo get_the_author_meta('codepen', $post->post_author); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="p-about__icon c-icon__codepen icon icon-tabler icon-tabler-brand-codepen" width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M3 15l9 6l9 -6l-9 -6l-9 6"></path>
                      <path d="M3 9l9 6l9 -6l-9 -6l-9 6"></path>
                      <path d="M3 9l0 6"></path>
                      <path d="M21 9l0 6"></path>
                      <path d="M12 3l0 6"></path>
                      <path d="M12 15l0 6"></path>
                    </svg>
                  </a>
                </li>
              <?php endif; ?>
              <?php if(get_the_author_meta('github', $post->post_author) != ""): ?>
                <li class="c-icon u-hover__popup">
                  <p class="c-icon__name c-font-family__en c-color__white c-background__white">GitHub</p>
                  <a href="<?php echo get_the_author_meta('github', $post->post_author); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="p-about__icon icon icon-tabler icon-tabler-brand-github-filled" width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path class="c-icon__github" d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" stroke-width="0" fill="currentColor"></path>
                    </svg>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </li>
        </ul>
      </section>

      <section id="skill" class="p-skill">
        <h2 class="p-skill__title c-font-family__en c-color__brown c-title__h2 js-fadein">Skill</h2>
        <ul class="c-flex__section">
        <?php
            $args = array(
              'post_type' => 'skill',
              'posts_per_page' => 4,
              'order' => 'DESC',
              'cat' => 'works',
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if ( $the_query->have_posts() ): ?>
            <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
              <li class="p-skill__card c-border js-fadein">
                <ul class="c-flex__skill-icon">
                  <?php $icon01 = get_field('icon01'); if( !empty($icon01) ): ?>
                    <li class="p-skill__icon"><img src="<?php echo $icon01['url']; ?>" width="<?php echo $icon01['width']; ?>" height="<?php echo $icon01['height']; ?>" alt="<?php echo $icon01['alt']; ?>" loading="lazy"></li>
                  <?php endif; ?>
                  <?php $icon02 = get_field('icon02'); if( !empty($icon02) ): ?>
                    <li class="p-skill__icon"><img src="<?php echo $icon02['url']; ?>" width="<?php echo $icon02['width']; ?>" height="<?php echo $icon02['height']; ?>" alt="<?php echo $icon02['alt']; ?>" loading="lazy"></li>
                  <?php endif; ?>
                  <?php $icon03 = get_field('icon03'); if( !empty($icon03) ): ?>
                    <li class="p-skill__icon"><img src="<?php echo $icon03['url']; ?>" width="<?php echo $icon03['width']; ?>" height="<?php echo $icon03['height']; ?>" alt="<?php echo $icon03['alt']; ?>" loading="lazy"></li>
                  <?php endif; ?>
                </ul>
                <div class="p-skill__text c-text c-font-family__ja c-color__brown">
                  <?php the_content(); ?> 
                </div>
              </li>
          <?php endwhile; ?>
          <?php endif; wp_reset_postdata(); ?>
        </ul>
      </section>

      <section id="works" class="p-works">
        <h2 class="p-works__title c-font-family__en c-color__brown c-title__h2 js-fadein">Works</h2>
        <ul class="c-flex__section">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'order' => 'DESC',
              'cat' => 'works',
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if ( $the_query->have_posts() ): ?>
            <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>  
              <li class="p-works__card u-hover__works js-fadein">
                <a href="<?php the_permalink(); ?>" class="p-works__card-inner c-border c-border-radius">
                  <div class="p-works__card-front c-border-radius">
                    <h3 class="p-works__h3 c-title__h3 c-font-family__en c-color__brown"><?php the_title(); ?></h3>
                    <figure>
                      <?php the_post_thumbnail('full'); ?>
                    </figure>
                    <button class="p-works__button c-button__works c-font-family__en" type="button">Read More</button>
                  </div>
                  <div class="p-works__card-back c-border__back c-border-radius c-background__white">
                    <div class="c-font-family__ja c-color__brown c-text"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; wp_reset_postdata(); ?>
        </ul>
      </section>

      <section id="contact" class="p-contact js-fadein">
        <h2 class="p-contact__title c-font-family__en c-color__brown c-title__h2">Contact</h2>
        <div class="p-contact__drop-right c-drop__right"></div>
        <section class="p-contact__drop-center c-drop__center u-hover__drop">
          <h3 class="p-contact__h3 c-font-family__ja--bold c-color__brown c-title__h3--contact">お問い合わせはこちらから</h3>
          <button class="c-button c-font-family__ja--bold" type="button"><a href="<?php echo home_url('/contact'); ?>">お問い合わせフォームへ</a></button>
        </section>
        <div class="p-contact__drop-left c-drop__left"></div>
      </section>
    </div>
  </main>

<?php get_footer(); ?>