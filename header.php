<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <?php if (is_front_page()) : ?>
      <div class="head">
        <div class="head_text">
          <p class="head_text_title">セカイを変えるチーズを作ろう</p>
          <p class="head_text_description">チーズ職人養成学校<span class="txt-rotate" data-period="2000" data-rotate='["「チーズアカデミーTOKYO」","「チーズアカデミーFUKUOKA」","「チーズアカデミーSAPPORO」"]'></span></p>
        </div>
      </div>
      <nav class="nav">
        <h1 class="nav_img">
          <img class="nav_img_h1" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="">
        </h1>
        <ul class="nav_list index" id="indexList">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#course">COURSE</a></li>
          <li><a href="#news">NEWS</a></li>
          <li><a href="#access">ACCESS</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>

    <?php else : ?>
      <div class="page">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about-image.jpg" alt="">
        <h2 class="page_title"><?php echo get_main_title(); ?></h2>
      </div>
      <nav class="nav">
        <h1 class="nav_img">
          <img class="nav_img_h1" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="">
        </h1>
        <ul class="nav_list index" id="indexList">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#course">COURSE</a></li>
          <li><a href="#news">NEWS</a></li>
          <li><a href="#access">ACCESS</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>
    <?php endif; ?>
  </header>