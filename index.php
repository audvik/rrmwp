<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coble - HR Template Landing Page</title>

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
    <script type="module" crossorigin src="<?php echo get_template_directory_uri();?>/assets/index.596ab601.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/index.469dc5c5.css">
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
          href="#"
          class="header__logo text-[20px] text-black font-title font-bold"
          >Coble.</a
        >

        <div class="header__menu" id="header-menu">
          <ul class="header__list">
            <li class="header__item">
              <a href="#" class="header__link">Home</a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Platform</a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Company</a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Pricing</a>
            </li>
            <li class="header__item">
              <a href="#" class="header__link">Our Market</a>
            </li>
          </ul>

          <a href="#" class="header__button button mt-6">Get Started</a>
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
      <!-- ===== HOME SECTION ===== -->
      <section class="home section">
        <div class="home__container container grid gap-12">
          <div class="home__data text-center justify-self-center">
            <h1 class="home__title section-title">
              Work With The Best Marketers For Your Business
            </h1>
            <p class="home__text section-text mb-8">
              World-class marketing freelancers and micro agencies, vetted based
              on proven results, not sales pitches. The challenge of assessing
              marketers.
            </p>
            <div class="home__buttons flex flex-col gap-4 mb-4">
              <a href="#" class="home__buttons-started button">Get Started</a>
              <a
                href="#"
                class="home__buttons-talk button bg-white border-2 border-solid border-[#00aaff] text-black"
                >Let's Talk</a
              >
            </div>
            <p class="home__tag text-sm text-grey">
              A platform for hiring on-demand marketing talent
            </p>
          </div>

          <img
            src="<?php echo get_template_directory_uri();?>/assets/home-img.e96b0118.svg"
            alt=""
            class="home__img drop-shadow-xl text-center justify-self-center"
          />
        </div>
      </section>
      <!-- ===== HOME SECTION ===== -->

      <!-- ===== PARTNER SECTION ===== -->
      <section class="partner py-16">
        <div class="partner__container container grid gap-12">
          <div class="partner__data text-center justify-self-center">
            <p
              class="partner__text text-[18px] text-black font-semibold leading-text"
            >
              Trusted by forward-thinking companies who value ease of use over
              complexity:
            </p>
          </div>

          <div
            class="partner__group grid grid-cols-[repeat(2,max-content)] justify-center gap-y-14 gap-x-10"
          >
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(1).808b8e92.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(2).0293bb77.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(3).494f1808.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(4).f7ac08c7.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(5).a7722f1e.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/partner-logo-(6).813a8dc6.png"
              alt=""
              class="partner__img w-[120px] invert-[0.7]"
            />
          </div>
        </div>
      </section>
      <!-- ===== PARTNER SECTION ===== -->

      <!-- ===== CHALLENGE SECTION ===== -->
      <section class="challenge section">
        <div class="challenge__bg py-16 bg-[#010510]">
          <div class="challenge__container container grid gap-12">
            <div class="challenge__data text-center justify-self-center">
              <p class="challenge__subtitle section-subtitle text-white">
                The Challenge
              </p>
              <h1 class="challenge__title section-title text-white">
                Skip the big promises Hire marketing experts based on data
              </h1>
              <p class="challenge__text section-text text-white mb-8">
                The challenge of assessing marketers skills is real. With Coble
                you don't need to rely on reviews and fancy sales pitches. Lorem
                ipsum dolor sit amet consectetur adipisicing.
              </p>
              <a href="#" class="challenge__button button bg-white text-black"
                >Get Started</a
              >
            </div>

            <img
              src="<?php echo get_template_directory_uri();?>/assets/challenge-img.ae76b451.svg"
              alt=""
              class="challenge__img drop-shadow-xl text-center justify-self-center"
            />
          </div>
        </div>
      </section>
      <!-- ===== CHALLENGE SECTION ===== -->

      <!-- ===== SERVICES SECTION ===== -->
      <section class="services section">
        <div class="services__container container">
          <div class="services__group grid gap-28">
            <div class="services__content">
              <div class="services__content-data">
                <h1 class="services__content-title section-title">
                  Leading businesses expand their marketing teams with Coble
                </h1>
                <p class="services__content-text section-text mb-8">
                  Our AI will tap into our 600+ global network of exhaustively
                  vetted experts to identify the perfect match to seamlessly
                  integrate ipsum dolor consectetur adipisicing.
                </p>
                <a href="#" class="services__content-button button gap-2">
                  Learn More
                  <i class="bx bx-right-arrow-alt inline-flex text-base"></i>
                </a>
              </div>

              <img
                src="<?php echo get_template_directory_uri();?>/assets/services-img-(1).ece9517a.svg"
                alt=""
                class="services__content-img"
              />
            </div>

            <div class="services__content">
              <div class="services__content-data">
                <h1 class="services__content-title section-title">
                  Only the marketers who have achieved above-benchmark results
                </h1>
                <p class="services__content-text section-text mb-8">
                  We actually look into our experts accounts with view-only
                  access or screen-sharing, to see with our own eyes that they
                  are as good as they say they are.
                </p>
                <a href="#" class="services__content-button button gap-2">
                  Learn More
                  <i class="bx bx-right-arrow-alt inline-flex text-base"></i>
                </a>
              </div>

              <img
                src="<?php echo get_template_directory_uri();?>/assets/services-img-(2).07be5639.svg"
                alt=""
                class="services__content-img"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- ===== SERVICES SECTION ===== -->

      <!-- ===== TESTIMONIAL SECTION ===== -->
      <section class="testimonial section">
        <div
          class="testimonial__data container text-center justify-self-center"
        >
          <h1 class="testimonial__title section-title">
            How Do We Vet The Top
          </h1>
          <p class="testimonial__text section-text">
            Is creating contracts in Word and exchanging PDFs via email the best
            way sit amet consectetur adipisicing elit.
          </p>
        </div>

        <div class="testimonial__container container">
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper py-12">
              <div class="testimonial__content swiper-slide">
                <p class="testimonial__content-comment">
                  “Coble's matching process takes into account so many variables
                  that I wouldn't even have thought of when trying to hire a
                  marketing agency. Lorem ipsum dolor sit amet consectetur
                  adipisicing elit."
                </p>

                <div class="testimonial__content-profile">
                  <img
                    src="<?php echo get_template_directory_uri();?>/assets/testimonial-profile-(1).e32a1bb1.svg"
                    alt=""
                    class="testimonial__content-img"
                  />

                  <div>
                    <h3 class="testimonial__content-name">Fajar Fadillah A</h3>
                    <p class="testimonial__content-profession">
                      Frontend Developer
                    </p>
                  </div>
                </div>
              </div>

              <div class="testimonial__content swiper-slide">
                <p class="testimonial__content-comment">
                  “Coble's matching process takes into account so many variables
                  that I wouldn't even have thought of when trying to hire a
                  marketing agency. Lorem ipsum dolor sit amet consectetur
                  adipisicing elit."
                </p>

                <div class="testimonial__content-profile">
                  <img
                    src="<?php echo get_template_directory_uri();?>/assets/testimonial-profile-(2).a8d91abd.svg"
                    alt=""
                    class="testimonial__content-img"
                  />

                  <div>
                    <h3 class="testimonial__content-name">Khabib Van Dijk</h3>
                    <p class="testimonial__content-profession">
                      Software Engineer
                    </p>
                  </div>
                </div>
              </div>

              <div class="testimonial__content swiper-slide">
                <p class="testimonial__content-comment">
                  “Coble's matching process takes into account so many variables
                  that I wouldn't even have thought of when trying to hire a
                  marketing agency. Lorem ipsum dolor sit amet consectetur
                  adipisicing elit."
                </p>

                <div class="testimonial__content-profile">
                  <img
                    src="<?php echo get_template_directory_uri();?>/assets/testimonial-profile-(3).04223241.svg"
                    alt=""
                    class="testimonial__content-img"
                  />

                  <div>
                    <h3 class="testimonial__content-name">Sonia Verhoeven</h3>
                    <p class="testimonial__content-profession">
                      UI/UX Designer
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- swiper-pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- ===== TESTIMONIAL SECTION ===== -->

      <!-- ===== CONTACT SECTION ===== -->
      <section class="contact section">
        <div class="contact__bg py-16 bg-[#155aff]">
          <div class="contact__container container grid">
            <div class="contact__data text-center justify-self-center">
              <h1 class="contact__title section-title text-white">
                Grow Your Business with Coble
              </h1>
              <p class="contact__text section-text text-white mb-8">
                No payment required until you approve your expert Lorem ipsum
                dolor sit amet consectetur adipisicing elit possimus aperiam.
              </p>
              <div class="contact__buttons flex flex-col gap-4 mb-4">
                <a href="#" class="contact__buttons-started button"
                  >Get Started</a
                >
                <a
                  href="#"
                  class="contact__buttons-talk button bg-transparent border-2 border-solid border-white text-white"
                  >Let's Talk</a
                >
              </div>
              <ul class="contact__list">
                <li class="contact__item">
                  <i class="bx bx-check contact__item-check"></i>
                  No credit card required
                </li>
                <li class="contact__item">
                  <i class="bx bx-check contact__item-check"></i>
                  No credit card required
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== CONTACT SECTION ===== -->
    </main>

    <!-- ===== FOOTER SECTION ===== -->
    <footer class="footer pt-32 pb-8">
      <div class="footer__container container grid gap-24">
        <div
          class="footer__group grid grid-cols-[repeat(auto-fit,minmax(150px,1fr))] gap-12"
        >
          <div class="footer__data">
            <a
              href="#"
              class="footer__data-logo text-[20px] text-black font-title font-bold"
              >Coble.</a
            >
            <p
              class="footer__data-text text-[15px] text-grey leading-text mt-4"
            >
              15 West 38 Street MB <br />
              New York, NY, US. <br />
              Giv'atayim, Israel.
            </p>
          </div>

          <div class="footer__content">
            <h3 class="footer__content-title">Product</h3>

            <ul class="footer__content-list">
              <li><a href="#" class="footer__content-link">Platform</a></li>
              <li><a href="#" class="footer__content-link">Overview</a></li>
              <li><a href="#" class="footer__content-link">Database</a></li>
            </ul>
          </div>

          <div class="footer__content">
            <h3 class="footer__content-title">Company</h3>

            <ul class="footer__content-list">
              <li><a href="#" class="footer__content-link">vs Agencies</a></li>
              <li><a href="#" class="footer__content-link">vs In-house</a></li>
              <li>
                <a href="#" class="footer__content-link">vs Freelancers</a>
              </li>
            </ul>
          </div>

          <div class="footer__content">
            <h3 class="footer__content-title">Pricing</h3>

            <ul class="footer__content-list">
              <li>
                <a href="#" class="footer__content-link">Paid advertising</a>
              </li>
              <li>
                <a href="#" class="footer__content-link">Email marketing</a>
              </li>
              <li><a href="#" class="footer__content-link">SEO</a></li>
            </ul>
          </div>

          <div class="footer__content">
            <h3 class="footer__content-title">Legal</h3>

            <ul class="footer__content-list">
              <li><a href="#" class="footer__content-link">Privacy</a></li>
              <li><a href="#" class="footer__content-link">Legal notice</a></li>
              <li><a href="#" class="footer__content-link">Terms of use</a></li>
            </ul>
          </div>
        </div>

        <p
          class="footer__copy pt-8 border-t-2 border-solid border-grey border-opacity-20 text-[15px] text-grey text-center leading-text"
        >
          &copy; Copyrights 2022, all rights reserved - Develop by Fajar
          Fadillah A 😎
        </p>
      </div>
    </footer>
    <!-- ===== FOOTER SECTION ===== -->

    <!-- ===== SCROLLUP SECTION ===== -->
    <a
      href="#"
      class="scrollup fixed right-6 -bottom-full w-11 h-11 inline-flex justify-center items-center p-4 bg-[#155aff] rounded-lg text-[1.5rem] text-white transition-all duration-400 z-10 hover:bg-black"
      id="scroll-up"
    >
      <i class="bx bx-up-arrow-alt"></i>
    </a>
    <!-- ===== SCROLLUP SECTION ===== -->

    <!-- ===== SWIPER JS ===== -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- ===== MAIN JS ===== -->
    
  </body>
</html>
