  <?php get_header(); ?>
  <main class="main">
    <div class="main__container">
      <h2 class="main__title animate__animated"><?php the_field('main__title'); ?></h2>
      <div class="main__text">
        <?php the_field('main__text'); ?>
      </div>
      <div class="main__img"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt=""></div>
      <div class="project">
        <h2 class="project__title animate__animated"><?php the_field('project__title'); ?></h2>
        <?php
        $featured_posts = get_field('project__item');
        if ($featured_posts) : ?>
          <ul>
            <?php foreach ($featured_posts as $post) :
              setup_postdata($post); ?>
              <li сlass="project__item">
                <div class="project__name animate__animated"><?php the_field('project__name'); ?></div>
                <div class="project__size animate__animated animate__delay-1s"><?php the_field('project__size'); ?></div>
                <div class="project__area animate__animated animate__delay-2s"><?php the_field('project__area'); ?></div>
                <div class="project__price animate__animated animate__delay-3s"><?php the_field('project__price'); ?></div>
                <div class="project__images">
                  <div class="project__images-item"><img src="<?php the_field('project__images-item1'); ?>" alt=""></div>
                  <div class="project__images-item"><img src="<?php the_field('project__images-item2'); ?>" alt=""></div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="download">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/home-download.png" alt="">
      <a href="<?php the_field('download__link'); ?>" download><span>Скачать каталог домов</span></a>
    </div>
    <div class="main__container">
      <div class="gallery" id="gallery">
        <h2 class="gallery__title animate__animated"><?php the_field('gallery__title'); ?></h2>
        <div class="gallery__text"><?php the_field('gallery__text'); ?></div>
        <div class="gallery__inner">
          <?php the_field('gallery__inner'); ?>
        </div>
      </div>
      <div class="main__img"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt=""></div>
    </div>
  </main>
  <?php get_footer(); ?>