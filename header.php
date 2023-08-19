<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Janakpur IT Club</title>

    <!-- ===== FAVICON ===== -->
    <link
      rel="shortcut icon"
      href="<?php echo get_template_directory_uri();?>/assets/favicon.f698f2fd.svg"
      type="image/x-icon"
    />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/assets/favicon.f698f2fd.svg" />

    <!-- ===== BOXICONS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ===== SWIPER CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    
    <script type="module" crossorigin src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    
  </head>
  <body class="font-text font-reguler">
    <!-- ===== HEADER SECTION ===== -->
    <header
      class="header fixed w-full top-0 left-0 bg-white z-50 transition-all duration-400"
      id="header"
    >
      <div
        class="header__container container h-24 flex justify-between items-center"
      >
        <a
          href="/"
          class="header__logo text-[20px] bg-coral font-title font-bold"
          >IT.Club</a
        >

        <div class="header__menu" id="header-menu">
          <ul class="header__list">
            <li class="header__item">
              <a href="/" class="header__link">Home</a>
            </li>
            <li class="header__item">
              <a href="/events" class="header__link">Events</a>
            </li>
            <li class="header__item">
              <a href="/assignment" class="header__link">Assignment</a>
            </li>
            <li class="header__item">
              <a href="/placement" class="header__link">Placement</a>
            </li>
            <li class="header__item">
              <a href="research" class="header__link">Research</a>
            </li>
          </ul>

          <a href="/start" class="header__button button mt-6">Get Started</a>
        </div>

        <div
          class="header__toggle inline-flex text-[1.5rem] text-black cursor-pointer"
          id="header-toggle"
        >
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </header>
    <!-- ===== HEADER SECTION ===== -->

    <main class="main overflow-hidden">