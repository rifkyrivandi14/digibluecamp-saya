<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>digibluecamp | e-learning system</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo_ico.ico" />
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/swiper.min.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-pro.css" />
  <link rel="stylesheet" href="assets/css/icomoon.css" />
  <link rel="stylesheet" href="assets/css/spacing.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <!-- Bootstrap CSS -->

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }

    .carousel-item img {
      width: 100px;
      height: 100px;
      object-fit: contain;
    }

    .carousel-caption {
      position: static;
    }

    @media (max-width: 480px) {
      .login-nav {
        display: block !important;
      }
      .content-partner {
        margin-left: -30px !important;
      }
    }
  </style>
</head>

<body>
  <!-- preloader start -->
  <div id="preloader">
    <div class="bd-loader-inner">
      <div class="bd-loader">
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
        <span class="bd-loader-item"></span>
      </div>
    </div>
  </div>
  <!-- preloader start -->

  <!-- Back to top start -->
  <div class="backtotop-wrap cursor-pointer">
    <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- Back to top end -->
  <!-- Offcanvas area start -->
  <div class="fix">
    <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a href="dashboard.html">
                <img src="assets/imgs/logo/logo.png" alt="Header Logo" />
              </a>
            </div>
            <div class="offcanvas__close">
              <button>
                <i class="fal fa-times"></i>
              </button>
            </div>
          </div>
          <div class="mobile-menu fix mb-40"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>
  <div class="offcanvas__overlay-white"></div>
  <!-- Offcanvas area start -->
  <!-- Header area start -->
  <header>
    <div id="header-sticky" class="header-area">
      <div class="large-container">
        <div class="mega-menu-wrapper">
          <div class="header-main">
            <div class="header-left">
              <div class="header-logo">
                <a href="index.html">
                  <img src="assets/imgs/logo/logo.png" alt="header logo" />
                </a>
              </div>
            </div>
            <div class="header-right d-flex justify-content-end">
              <div class="mean__menu-wrapper d-none d-lg-block">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li class="active">
                        <a href="#">Home</a>
                      </li>
                      <li>
                        <a href="#about">About</a>
                      </li>
                      <li>
                        <a href="#partnership">Partnership</a>
                        <ul class="submenu"></ul>
                      <li>
                        <a class="login-nav" style="display: none;" href="https://digibluecamp.id/login">
                          Login
                          <span style="top: 147.172px; left: 108.5px"></span>
                        </a>
                      </li>

                    </ul>
                  </nav>
                </div>
              </div>

              <div class="header-action d-none d-xl-inline-flex gap-5">
                <div class="header-link">
                  <a class="primary-btn-1 btn-hover rounded" href="https://digibluecamp.id/login">
                    Login
                    <span style="top: 147.172px; left: 108.5px"></span>
                  </a>
                </div>
              </div>

              <div class="header__hamburger d-xl-none my-auto">
                <div class="sidebar__toggle">
                  <a class="bar-icon" href="javascript:void(0)">
                    <i class="fa-light fa-bars-sort"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header area end -->

  <main>
    <!-- Banner area start -->
    <section class="banner-section p-relative fix">
      <div class="swiper banner-active">
        <div class="swiper-wrapper">
          <!-- block -->
          <div class="swiper-slide">
            <div class="banner-main" data-background="assets/imgs/banner/banner.jpg">
              <div class="large-container">
                <div class="banner-area p-relative z-3 wow img-custom-anim-left animated" data-wow-delay="300ms">
                  <!-- <span class="p-relative banner-sub-title"
                      >TECHNOLOGY CONSULTANCY</span
                    > -->
                  <h1 class="banner-title">digibluecamp</h1>
                  <p class="banner-text">
                    Platform E-Learning Ekonomi Biru Pertama Di Indonesia
                  </p>
                  <div class="banner-btn-area">
                    <a class="primary-btn-1 btn-hover rounded px-5" href="#">
                      Join Us
                      <span style="top: 147.172px; left: 108.5px"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- block -->
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="banner-dot-inner">
        <div class="banner-dot"></div>
      </div>
    </section>
    <!-- Banner area end -->

    <!-- About us area start -->

    <section class="about-us-section section-space p-relative">
      <div class="shape-area">
        <div class="shape-1" data-background="assets/imgs/bg/bg-shape-1.png"></div>
        <div class="shape-2 quote-animation" data-background="assets/imgs/shapes/shape-7.png"></div>
        <div class="shape-3 quote-animation" data-background="assets/imgs/shapes/shape-8.png"></div>
      </div>
      <div class="small-container">
        <div class="row g-4">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <!-- image area start -->
            <div class="about-us-image-area p-relative wow fadeInRight" data-wow-delay=".5s">
              <div class="border-shape" data-background="assets/imgs/shapes/shape-6.png"></div>
              <figure class="image-1">
                <img src="assets/imgs/about/about-1.jpg" alt="" />
              </figure>
              <div class="image-2-area">
                <div class="image-2 p-relative">
                  <img src="assets/imgs/about/about-2.jpg" alt="" />
                  <!-- <div class="play-btn">
                      <div class="video_player_btn">
                        <a
                          href="https://www.youtube.com/watch?v=eEzD-Y97ges"
                          class="popup-video"
                          ><i class="icon-play"></i
                        ></a>
                      </div>
                    </div> -->
                </div>
              </div>
              <!-- <div class="working-area float-bob-y">
                  <div class="inner p-relative">
                    <div class="icon-box">
                      <i class="icon-prize"></i>
                      <h4><span class="counter">25</span> Years</h4>
                      <p>Working Experience</p>
                    </div>
                  </div>
                </div> -->
            </div>
            <!-- image area end -->
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6" id="about">
            <!-- .content start -->
            <div class="about-us-content-area p-relative z-1 pl-30">
              <div class="title-box mb-35 wow fadeInLeft" data-wow-delay=".5s">
                <span class="section-sub-title">About Us</span>
                <h3 class="section-title mt-10">
                  digibluecamp: Gerbang Anda ke Ekonomi Biru Digital!
                </h3>
              </div>
              <p class="mb-35 wow fadeInLeft" style="text-align: justify" data-wow-delay=".5s">
                Sebagai bentuk kontribusi nyata dalam menyiapkan talenta
                digital dan profesional di bidang ekonomi biru berstandar
                internasional, Mahakarya Maritim Group bersama Indonesia Blue Economy Center dan
                Maritim Muda Nusantara mempersembahkan platform Learning
                Management System bernama digibluecamp. Melalui digibluecamp,
                Masyarakat Indonesia dapat mengikuti berbagai kursus pelatihan
                nasional dan internasional di bidang teknologi informasi,
                ekonomi biru, dan kemaritiman secara daring sehingga dapat
                diakses kapan pun dan di mana pun. Digibluecamp menyediakan
                pengalaman belajar yang menarik dan modern dilengkapi berbagai
                modul pelatihan dan bahan ajar lainnya yang:
              </p>
              <div class="icon-box mb-20 wow fadeInLeft" data-wow-delay=".8s">
                <div class="icon">
                  <img src="assets/imgs/about/about-three-icon1.png" alt="img" />
                </div>
                <div class="content">
                  <p style="text-align: justify; font-family: 'Arial', sans-serif;">
                    Sesuai dengan kebutuhan industri digital dan ekonomi biru
                    masa kini dan masa mendatang
                  </p>

                  <!-- <p>
                      Selami dunia Ekonomi Biru Digital dan temukan cara
                      memanfaatkan teknologi terkini untuk mendorong pertumbuhan
                      bisnis.
                    </p> -->
                </div>
              </div>
              <div class="icon-box mb-20 wow fadeInLeft" data-wow-delay=".9s">
                <div class="icon">
                  <img src="assets/imgs/about/about-three-icon2.png" alt="img" />
                </div>
                <div class="content">
                  <p style="text-align: justify; font-family: 'Arial', sans-serif;">
                    Menerapkan metode synchronous dan asynchronous sehingga
                    peserta dapat menemukan cara paling sesuai dan materi yang
                    paling diminati dirinya dalam proses pembelajaran
                  </p>
                  <!-- <p>
                      Dapatkan panduan dari para profesional berpengalaman yang
                      berdedikasi untuk membantu Anda mencapai tujuan karir
                      Anda.
                    </p> -->
                </div>
              </div>
            </div>
            <!-- .content end -->
          </div>
        </div>
      </div>
    </section>

    <!-- About us area end -->

    <!-- Choose area start -->
    <section class="choose-section bg-color-1 section-space-top p-relative">
      <div class="bg-image" data-background="assets/imgs/bg/choose-bg.png"></div>
      <div class="shape-image" data-background="assets/imgs/shapes/shape-15.png"></div>
      <div class="small-container">
        <div class="row g-4">
          <div class="col-xxl-6 col-xl-6 col-lg-6 p-relative section-space-medium-bottom">
            <div class="title-box mb-50 wow fadeInLeft" data-wow-delay=".5s">
              <span class="section-sub-title">why choose us</span>
              <h3 class="section-title mt-10">
                Apa yang Membuat Kami Berbeda
              </h3>
            </div>
            <!-- block -->
            <div class="choose-area-icon-box mb-15 wow fadeInRight" data-wow-delay=".5s">
              <div class="icon-box p-relative">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <div class="content">
                <h5>E-learning ekonomi biru pertama di Indonesia</h5>
                <!-- <p>
                    Kami memahami bahwa setiap bisnis memiliki kebutuhan unik.
                    Oleh karena itu, kami menawarkan layanan komersial yang
                    disesuaikan dengan kebutuhan spesifik Anda. Dengan
                    pendekatan yang fleksibel dan inovatif, kami membantu bisnis
                    Anda mencapai potensi maksimalnya. Kami di sini untuk
                    memastikan Anda mendapatkan solusi terbaik yang dapat
                    mendorong pertumbuhan dan keberhasilan jangka panjang.
                  </p> -->
              </div>
            </div>
            <hr />
            <!-- block -->
            <div class="choose-area-icon-box mb-15 wow fadeInRight" data-wow-delay=".7s">
              <div class="icon-box p-relative">
                <i class="fa-solid fa-chalkboard-user"></i>
              </div>
              <div class="content">
                <h5>Edukatif, up-to-date dan aplikatif</h5>
                <!-- <p>
                    Kami memahami bahwa setiap bisnis memiliki kebutuhan unik.
                    Oleh karena itu, kami menawarkan layanan komersial yang
                    disesuaikan dengan kebutuhan spesifik Anda. Dengan
                    pendekatan yang fleksibel dan inovatif, kami membantu bisnis
                    Anda mencapai potensi maksimalnya. Kami di sini untuk
                    memastikan Anda mendapatkan solusi terbaik yang dapat
                    mendorong pertumbuhan dan keberhasilan jangka panjang.
                  </p> -->
              </div>
            </div>
            <hr />
            <!-- block -->
            <div class="choose-area-icon-box mb-15 wow fadeInRight" data-wow-delay=".9s">
              <div class="icon-box p-relative">
                <i class="fa-solid fa-user-graduate"></i>
              </div>
              <div class="content">
                <h5>Mentor praktisi dan ahli di bidangnya</h5>
                <!-- <p>
                    Keamanan dan keandalan adalah inti dari setiap layanan yang
                    kami tawarkan. Kami menjamin bahwa produk dan layanan kami
                    memenuhi standar tertinggi untuk keselamatan dan kinerja.
                    Tim kami yang berpengalaman bekerja tanpa lelah untuk
                    memastikan bahwa Anda dapat mengandalkan kami dalam setiap
                    situasi. Kepercayaan Anda adalah prioritas kami, dan kami
                    berkomitmen untuk menjaga integritas dan keamanan setiap
                    solusi yang kami berikan.
                  </p> -->
              </div>
            </div>
            <hr />
            <!-- block -->
            <!-- block -->
            <div class="choose-area-icon-box mb-15 wow fadeInRight" data-wow-delay=".9s">
              <div class="icon-box p-relative">
                <i class="fa-solid fa-globe"></i>
              </div>
              <div class="content">
                <h5>Perpaduan ekonomi biru dan teknologi digital</h5>
                <!-- <p>
                    Keamanan dan keandalan adalah inti dari setiap layanan yang
                    kami tawarkan. Kami menjamin bahwa produk dan layanan kami
                    memenuhi standar tertinggi untuk keselamatan dan kinerja.
                    Tim kami yang berpengalaman bekerja tanpa lelah untuk
                    memastikan bahwa Anda dapat mengandalkan kami dalam setiap
                    situasi. Kepercayaan Anda adalah prioritas kami, dan kami
                    berkomitmen untuk menjaga integritas dan keamanan setiap
                    solusi yang kami berikan.
                  </p> -->
              </div>
            </div>
            <hr />
            <!-- block -->
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="1.2s">
            <figure class="image m-img">
              <img src="assets/imgs/resources/choose-1.png" alt="" />
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Choose area end -->

    <!-- Team area start -->
    <!-- <section class="team-section p-relative section-space">
        <div
          class="shape-1"
          data-background="assets/imgs/shapes/shape-13.png"
        ></div>
        <div
          class="shape-2 float-bob-y"
          data-background="assets/imgs/shapes/shape-14.png"
        ></div>
        <div class="small-container">
          <div
            class="title-box text-center mb-50 wow fadeInLeft"
            data-wow-delay=".5s"
          >
            <span class="section-sub-title">OUR team</span>
            <h3 class="section-title mt-10">Our Leadership Team</h3>
          </div>
          <div class="row g-4"> -->
    <!-- block -->
    <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div
                class="team-area-box p-relative mb-60 wow fadeInLeft"
                data-wow-delay=".7s"
              >
                <figure class="image w-img p-relative">
                  <img src="assets/imgs/team/team-1.jpg" alt="" />
                </figure>
                <div class="content">
                  <div class="author-info">
                    <h5 class="mb-5">
                      <a href="team-details.html">Kaisar Akhir</a>
                    </h5>
                    <span>Ketua Umum</span>
                  </div>
                  <div class="social-links p-relative">
                    <span><i class="icon-share"></i></span>
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
    <!-- block -->
    <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div
                class="team-area-box p-relative mb-60 wow fadeInDown"
                data-wow-delay=".9s"
              >
                <figure class="image w-img p-relative">
                  <img src="assets/imgs/team/team-2.jpg" alt="" />
                </figure>
                <div class="content">
                  <div class="author-info">
                    <h5 class="mb-5">
                      <a href="team-details.html">Kaisar Akhir</a>
                    </h5>
                    <span>Ketua Umum</span>
                  </div>
                  <div class="social-links p-relative">
                    <span><i class="icon-share"></i></span>
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
    <!-- block -->
    <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div
                class="team-area-box p-relative mb-60 wow fadeInRight"
                data-wow-delay="1s"
              >
                <figure class="image w-img p-relative">
                  <img src="assets/imgs/team/team-3.jpg" alt="" />
                </figure>
                <div class="content">
                  <div class="author-info">
                    <h5 class="mb-5">
                      <a href="team-details.html">Kaisar Akhir</a>
                    </h5>
                    <span>Ketua Umum</span>
                  </div>
                  <div class="social-links p-relative">
                    <span><i class="icon-share"></i></span>
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
    <!-- </div>
        </div>
      </section> -->
    <!-- Team area end -->
    <!-- Brand area start -->
    <div class="section-space-bottom mt-90" id="partnership">
      <div class="container">
        <h2 class="text-center mb-90">Partnership</h2>
        <div id="brandCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner text-center">
            <!-- Block 1 -->
            <div class="carousel-item active">
              <div class="d-flex justify-content-center content-partner">
                <div class="p-2 ">
                  <img src="assets/imgs/resources/maritim.png" alt="Maritim" style="width: 200px; height: 200px"
                    class="mx-5" />
                </div>
                <div class="p-2 ">
                  <img src="assets/imgs/resources/ibec.png" alt="Ibec" style="width: 200px; height: 200px"
                    class="mx-5" />
                </div>
                <div class="p-2 ">
                  <img src="assets/imgs/resources/tbe.png" alt="The Blue Economy" style="width: 200px; height: 200px"
                    class="mx-5" />
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="carousel-control-prev" href="#brandCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#brandCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Brand area end -->
  </main>

  <!-- Footer area start -->
  <footer>
    <div class="footer-main bg-color-1">
      <div class="footer-top section-space-medium">
        <div class="small-container">
          <div class="row g-4 justify-content-between">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
              <div class="footer-widget-1">
                <figure class="image">
                  <img src="assets/imgs/logo/logo.png" alt="" />
                </figure>
                <p class="mt-40 mb-40">
                  Indonesia Blue Economy Center (IBEC)
                  Kampus C STIE Indonesia
                  Jalan Pratekan No. 9A, Rawamangun
                </p>
                <!-- <div class="footer-socials">
                    <span
                      ><a href="#"><i class="fab fa-facebook-f"></i></a
                    ></span>
                    <span
                      ><a href="#"><i class="fab fa-twitter"></i></a
                    ></span>
                    <span
                      ><a href="#"><i class="fab fa-linkedin-in"></i></a
                    ></span>
                    <span
                      ><a href="#"><i class="fab fa-youtube"></i></a
                    ></span>
                  </div> -->
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
              <div class="footer-widget-2 pl-50">
                <p class="mb-20 footer-title">
                  Email: <b>maritimepreneur@gmail.com</b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer area end -->

  <!-- JS here -->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/meanmenu.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/magnific-popup.min.js"></script>
  <script src="assets/js/counterup.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Custom JS -->
</body>

</html>