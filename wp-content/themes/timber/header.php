<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('description'); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#FFF8DC">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header" style="background-image: url(<?php the_field('top__bg'); ?>);">
    <div class="header__inner">
      <div class="header__decor">
        <svg viewBox="0 0 20 20" height="20" fill="#fff">
          <polygon points="0, 18, 10, 5, 20, 18, 18, 20, 10, 0, 2, 20" fill="#1fad26" />
          <polygon points="5, 20, 10, 10, 15, 20" fill="#1fad26" />
        </svg>
      </div>
      <div class="header__name"><?php the_field('header__name'); ?></div>
      <a href="tel:<?php the_field('phone'); ?>" class="phone"><?php the_field('phone'); ?></a>
      <h1 class="header__title animate__animated"><?php the_field('header__title'); ?></h1>
      <div class="header__sale animate__animated animate__delay-1s"><a href="#" target="_blank" rel="noopener" title="Get yout discount!"><img src="<?php the_field('header__sale'); ?>" alt=""></a></div>
    </div>
  </header>