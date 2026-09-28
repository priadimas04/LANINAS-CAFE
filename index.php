<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>LaNinas Coffee</title>
  <meta name="title" content="LaNinas Coffee">
  <meta name="description" content="this is the cafe laninas website made by pria dimas">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./User/assets/images/logoLaNinas.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./User/assets/css/style.css">

    <!-- 
    - AOS
  -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="'./User/assets/images/hero-slider-1.jpg'">
  <link rel="preload" as="image" href="./User/assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./User/assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOARDER MULAI
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">LaNinas Coffee</p>
  </div>



  <!-- 
    - #PRELOADER SELESAI
  -->




  <!-- 
    - #TOP BAR MULAI
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          LaNinas Coffee & Kitchen
          Jl. Sei Ular Baru, Kota Medan, Sumatera Utara 20154
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Setiap hari: 10.00 - 22.00 WIB</span>
      </div>

      <a href="tel:+6281360696825" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+62 813-6069-6825</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:laninasresto@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">laninasresto@gmail.com</span>
      </a>

    </div>
  </div>


  <!-- 
    - #TOP BAR SELESAI
  -->


  <!-- 
    - #HEADER MULAI
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./User/assets/images/logoLaNinas.png" width="160" height="50" alt="LaNinas-Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./User/assets/images/logoLaNinas.png" width="160" height="50" alt="LaNinas-Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#event" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Event</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#reservation" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Mampir Yuk!</p>

          <address class="body-4">
            LaNinas Coffee & Kitchen <br>Jl. Sei Ular Baru No.70, RW.72, Babura Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20154, Medan 20154
          </address>

          <p class="body-4 navbar-text">Open: 10.00 - 23.00 WIB</p>

          <a href="mailto:laninasresto@gmail.com" class="body-4 sidebar-link">laninasresto@gmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Amankan Meja!</p>

          <a href="tel:+6281360696825" class="body-1 contact-number hover-underline">
            +62 813-6069-6825
          </a>
        </div>

      </nav>

      <a href="#reservation" class="btn btn-secondary">
        <span class="text text-1">Booking Meja</span>

        <span class="text text-2" aria-hidden="true">Booking Meja</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


  <!-- 
    - #HEADER SELESAI
  -->



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./User/assets/images/Laninas1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Cita Rasa Otentik Western, Asia, & Nusantara</p>

            <h1 class="display-1 hero-title slider-reveal">
              Selamat Datang di <br>
              LaNinas Coffee & Kitchen
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Nikmati suasana hangat, aroma kopi yang memikat, dan
              hidangan lezat yang membuat setiap momen berarti.
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Lihat Menu</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./User/assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Lezat di setiap menu</p>

            <h1 class="display-1 hero-title slider-reveal">
              Kombinasi Sempurna <br> 
              Rasa & Kualitas
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Datang bersama keluarga & nikmati hidangan<br>
              lezat penuh kebahagiaan
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Lihat Menu</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./User/assets/images/Laninas2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Luas, Nyaman & Estetik</p>

            <h1 class="display-1 hero-title slider-reveal">
              Tempat Nyaman untuk <br>
              Setiap Momen
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Ciptakan kenangan indah bersama orang tersayang <br>
              di LaNinas Coffee
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Lihat Menu</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="mailto:laninasresto@gmail.com" class="hero-btn has-after">
          <img src="./User/assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Pesan Meja</span>
        </a>

      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Rasa istimewa untuk semua</p>

          <h2 class="headline-1 section-title">Kualitas Terbaik, Hanya yang Terbaik!</h2>

          <p class="section-text">
            Nikmati suasana nyaman, pelayanan ramah, dan hidangan berkualitas. Dari kopi terbaik hingga makanan lezat,
            semuanya kami sajikan dengan sepenuh hati. Karena di sini,
            kepuasan Anda adalah prioritas utama!
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card"
              data-aos="fade-up"
              data-aos-duration="500">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./User/assets/images/Spaghetti Bolognese.webp" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Western</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card"
              data-aos="fade-up"
              data-aos-duration="500">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./User/assets/images/Crhispy Thai chicken.webp" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content"
                data-aos="fade-up"
                data-aos-duration="500">

                  <h3 class="title-4 card-title">
                    <a href="#">Asia & Nusantara</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card"
              data-aos="fade-up"
              data-aos-duration="500">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./User/assets/images/LaMinuman.webp" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Drinks</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./User/assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./User/assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Kisah Kami</p>

            <h2 class="headline-1 section-title">Setiap rasa memiliki cerita</h2>

            <p class="section-text">
              Laninas Coffee bukan sekadar tempat menikmati kopi dan hidangan lezat. Kami hadir dengan cita rasa otentik Western, Asia, & Nusantara,
              menciptakan momen kebersamaan yang penuh cerita. Setiap sajian dibuat dengan kualitas terbaik, karena di sini, lebih dari rasa—ada kenangan yang tercipta.
            </p>

            <div class="contact-label">Hubungi & Pesan Sekarang</div>

            <a href="tel:+6281360696825" class="body-1 contact-number hover-underline">+62 813-6069-6825</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Selengkapnya</span>

              <span class="text text-2" aria-hidden="true">Selengkapnya</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./User/assets/images/test2.webp" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./User/assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./User/assets/images/logoLaNinas.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./User/assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>





      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="./User/assets/images/best.jpg" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="./User/assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Best Seller</p>

            <h2 class="headline-1 section-title">Nasi Goreng Laninas</h2>

            <p class="section-text">
              Nasi goreng dengan ayam goreng, telur mata sapi, dan irisan bakso ikan. dihias timun, tomat, selada, dan taburan bawang goreng. 
              Gurih, nikmat, dan pastinya terbaik! 
            </p>

            <div class="wrapper">
              <del class="del body-3">Rp.58.000</del>

              <span class="span body-1">Rp.38.000</span>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Lihat Menu</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu</span>
            </a>

          </div>
        </div>

        <img src="./User/assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="./User/assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

      </section>





      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Pilihan Spesial</p>

          <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

          <ul class="grid-list">

          <!-- Menu 1 -->
         <li>
  <div class="menu-card hover:card" data-aos="fade-right" data-aos-duration="500">
    <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
      <img src="./User/assets/images/ft.png" width="100" height="100" loading="lazy" alt="Caesar Salad" class="img-cover">
    </figure>
    <div>
      <div class="title-wrapper">
        <h3 class="title-3"><a href="#" class="card-title">Caesar Salad</a></h3>
        <span class="badge label-1">HANYA</span>
        <span class="span title-2">Rp.37.000</span>
      </div>
      <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
        <p class="card-text label-1" style="margin: 0; flex: 1;">
          Salad Caesar lezat dengan ayam panggang, telur, tomat ceri, keju Parmesan, dan saus creamy buatan sendiri!
        </p>
        <a href="./User/tambah-keranjang.php?menu=Caesar Salad" 
          class="btn btn-secondary"
          style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
          + Keranjang
        </a>
      </div>
    </div>
  </div>
</li>


          <!-- Menu 2 -->
          <li>
            <div class="menu-card hover:card" data-aos="fade-left" data-aos-duration="500">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./User/assets/images/menu-2.png" width="100" height="100" loading="lazy" alt="Spaghetti Bolognese" class="img-cover">
              </figure>
              <div>
                <div class="title-wrapper">
                  <h3 class="title-3"><a href="#" class="card-title">Spaghetti Bolognese</a></h3>
                  <span class="span title-2">Rp.30.000</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="card-text label-1" style="margin: 0; flex: 1;">
                    Nikmati hidangan klasik Italia yang lezat—dijamin bikin ketagihan!
                  </p>
                  <a href="./User/tambah-keranjang.php?menu=Spaghetti Bolognese" class="btn btn-secondary"
                  style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
                  + Keranjang</a>
                </div>
              </div>
            </div>
          </li>

          <!-- Menu 3 -->
          <li>
            <div class="menu-card hover:card" data-aos="fade-right" data-aos-duration="500">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./User/assets/images/menu-3.png" width="100" height="100" loading="lazy" alt="Crispy Thai Chicken" class="img-cover">
              </figure>
              <div>
                <div class="title-wrapper">
                  <h3 class="title-3"><a href="#" class="card-title">Crispy Thai Chicken</a></h3>
                  <span class="span title-2">Rp.38.000</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="card-text label-1" style="margin: 0; flex: 1;">
                    Menu favorit segala usia! Gurih, renyah, dan penuh cita rasa. Kamu sudah coba belum?
                  </p>
                  <a href="./User/tambah-keranjang.php?menu=Crispy Thai Chicken" class="btn btn-secondary"
          style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
          + Keranjang</a>
                </div>
              </div>
            </div>
          </li>

          <!-- Menu 4 -->
          <li>
            <div class="menu-card hover:card" data-aos="fade-left" data-aos-duration="500">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./User/assets/images/menu-4.png" width="100" height="100" loading="lazy" alt="CUMI WOKU" class="img-cover">
              </figure>
              <div>
                <div class="title-wrapper">
                  <h3 class="title-3"><a href="#" class="card-title">CUMI WOKU</a></h3>
                  <span class="span title-2">Rp.30.000</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="card-text label-1" style="margin: 0; flex: 1;">
                    Pencinta seafood, merapat! Cobain CUMI WOKU, hidangan khas Minahasa yang langka di Medan!
                  </p>
                  <a href="./User/tambah-keranjang.php?menu=CUMI WOKU" class="btn btn-secondary"
          style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
          + Keranjang</a>
                </div>
              </div>
            </div>
          </li>

          <!-- Menu 5 -->
          <li>
            <div class="menu-card hover:card" data-aos="fade-right" data-aos-duration="500">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./User/assets/images/menu-5.png" width="100" height="100" loading="lazy" alt="Klappertaart" class="img-cover">
              </figure>
              <div>
                <div class="title-wrapper">
                  <h3 class="title-3"><a href="#" class="card-title">Klappertaart</a></h3>
                  <span class="span title-2">Rp.11.000</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="card-text label-1" style="margin: 0; flex: 1;">
                    Hidangan khas Manado dengan cita rasa manis dan gurih, terbuat dari kelapa dan susu. Lezat, lembut, dan tentunya HALAL!
                  </p>
                  <a href="./User/tambah-keranjang.php?menu=Klappertaart" class="btn btn-secondary"
          style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
          + Keranjang</a>
                </div>
              </div>
            </div>
          </li>

          <!-- Menu 6 -->
          <li>
            <div class="menu-card hover:card" data-aos="fade-left" data-aos-duration="500">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./User/assets/images/menu-6.png" width="100" height="100" loading="lazy" alt="Fries Poutine" class="img-cover">
              </figure>
              <div>
                <div class="title-wrapper">
                  <h3 class="title-3"><a href="#" class="card-title">Fries Poutine</a></h3>
                  <span class="span title-2">Rp.20.000</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                  <p class="card-text label-1" style="margin: 0; flex: 1;">
                    Nikmati sensasi gurih dan creamy-nya Fries Poutine bersama LaNinas Coffee and Kitchen!
                  </p>
                  <a href="./User/tambah-keranjang.php?menu=Fries Poutine" class="btn btn-secondary"
          style="font-size: 13px; padding: 6px 14px; margin-top: 10px; display: inline-block; transition: 0.3s ease;">
          + Keranjang</a>
                </div>
              </div>
            </div>
          </li>

          </ul>


          <p class="menu-text text-center">
            Nikmati menu lezat kami! Pemesanan dibuka setiap hari dari pukul <span class="span">10.00</span> - <span class="span">22:00 WIB</span>
          </p>

          <a href="User/menu.php" class="btn btn-primary">
            <span class="text text-1">Lihat Semua Menu</span>

            <span class="text text-2" aria-hidden="true">Lihat Semua Menu</span>
          </a>

          <img src="./User/assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src=".?User/assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./User/assets/images/Outdor.webp')"  aria-label="testimonials">
        <div class="container">
          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Pesan Meja Sekarang & Nikmati Momen Spesial di Laninas Coffee!
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./User/assets/images/logoLaNinas.png" width="200" height="200" loading="lazy" alt="Laninas Coffe & Kitchen"
              class="img">

            <p class="label-2 profile-name">LaNinas Coffee and Kitchen</p>
          </div>

        </div>
      </section>





      <!-- 
        - #RESERVATION
      -->

    <section class="reservation" id="reservation">
    <div class="container">
        <div class="form reservation-form bg-black-10">
            <form id="reservation-form" class="form-left">
                <h2 class="headline-1 text-center">Reservasi Online</h2>
                <p class="form-text text-center">
                    Booking sekarang! <a href="tel:+6281360696825" class="link">+62 813-6069-6825</a>
                    atau isi formulir pemesanan!
                </p>
                <div class="input-wrapper">
                    <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
                </div>
                <div class="input-wrapper">
                    <div class="icon-wrapper">
                        <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                        <select id="person" name="person" class="input-field" required>
                            <option value="1 Person">1 Person</option>
                            <option value="2 Person">2 Person</option>
                            <option value="3 Person">3 Person</option>
                            <option value="4 Person">4 Person</option>
                            <option value="5 Person">5 Person</option>
                            <option value="6 Person">6 Person</option>
                            <option value="7 Person">7 Person</option>
                            <option value="8 Person">8 Person</option>
                            <option value="9 Person">9 Person</option>
                            <option value="10 Person">10 Person</option>
                            <option value="11 Person">11 Person</option>
                            <option value="12 Person">12 Person</option>
                            <option value="13 Person">13 Person</option>
                            <option value="14 Person">14 Person</option>
                            <option value="15 Person">15 Person</option>
                            <option value="16 Person">16 Person</option>
                            <option value="17 Person">17 Person</option>
                            <option value="18 Person">18 Person</option>
                            <option value="19 Person">19 Person</option>
                            <option value="20 Person">20 Person</option>
                        </select>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                    <div class="icon-wrapper">
                        <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                        <input type="date" id="reservation-date" name="reservation-date" class="input-field" required>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                    <div class="icon-wrapper">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                        <select id="time" name="time" class="input-field" required>
                            <option value="08:00 WIB">08 : 00 WIB</option>
                            <option value="09:00 WIB">09 : 00 WIB</option>
                            <option value="10:00 WIB">10 : 00 WIB</option>
                            <option value="11:00 WIB">11 : 00 WIB</option>
                            <option value="12:00 WIB">12 : 00 WIB</option>
                            <option value="13:00 WIB">13 : 00 WIB</option>
                            <option value="14:00 WIB">14 : 00 WIB</option>
                            <option value="15:00 WIB">15 : 00 WIB</option>
                            <option value="16:00 WIB">16 : 00 WIB</option>
                            <option value="17:00 WIB">17 : 00 WIB</option>
                            <option value="18:00 WIB">18 : 00 WIB</option>
                            <option value="19:00 WIB">19 : 00 WIB</option>
                            <option value="20:00 WIB">20 : 00 WIB</option>
                            <option value="21:00 WIB">21 : 00 WIB</option>
                            <option value="22:00 WIB">22 : 00 WIB</option>
                        </select>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                </div>
                <textarea id="message" name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>
                <button type="button" class="btn btn-secondary" onclick="sendToWhatsApp()">
                    <span class="text text-1">Booking Meja</span>
                    <span class="text text-2" aria-hidden="true">Booking Meja</span>
                </button>
            </form>

          <script>
              function sendToWhatsApp() {
                  let name = document.getElementById("name").value;
                  let phone = document.getElementById("phone").value;
                  let person = document.getElementById("person").value;
                  let date = document.getElementById("reservation-date").value;
                  let time = document.getElementById("time").value;
                  let message = document.getElementById("message").value;
                  
                  let whatsappMessage = `Halo, saya ingin reservasi:
          Nama: ${name}
          Nomor HP: ${phone}
          Jumlah Orang: ${person}
          Tanggal: ${date}
          Jam: ${time}
          Pesan Tambahan: ${message}`;
                  
                  let whatsappURL = `https://api.whatsapp.com/send?phone=6281360696825&text=${encodeURIComponent(whatsappMessage)}`;
                  
                  window.open(whatsappURL, "_blank");
              }
          </script>


            <div class="form-right text-center" style="background-image: url('./User/assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Klik & Pesan Sekarang</p>

              <a href="tel:+6281360696825" class="body-1 contact-number hover-underline">+62 81360696825</a>

              <div class="separator"></div>

              <p class="contact-label">Lokasi</p>

              <address class="body-4">
               LaNinas Coffee and Kitchen <br>
               Jl. Sei Ular Baru No.70, Medan Sunggal, Kota Medan
              </address>

              <p class="contact-label">Waktu Operasional</p>

              <p class="body-4">
                Weekday <br>
                10.00 - 22.00 WIB
              </p>

  

              <p class="body-4">
                Weekend <br>
                10.00 - 23.00 WIB
              </p>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features" id="features">
        <div class="container">

          <p class="section-subtitle label-2">Kenapa Memilih Kami?</p>

          <h2 class="headline-1 section-title">Kelebihan Kami</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./User/assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Makanan Higienis</h3>

                <p class="label-1 card-text">Makanan lezat, bersih, dan terjaga kebersihannya—karena kualitas adalah prioritas!</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./User/assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Suasana Nyaman</h3>

                <p class="label-1 card-text">Nikmati suasana segar dan nyaman untuk pengalaman bersantap yang lebih menyenangkan!</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./User/assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Chef Ahli</h3>

                <p class="label-1 card-text">Setiap hidangan dibuat dengan keahlian, menghadirkan rasa yang istimewa!</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./User/assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Acara & Pesta</h3>

                <p class="label-1 card-text">Buat setiap acara & pesta jadi lebih berkesan bersama kami!</p>

              </div>
            </li>

          </ul>

          <img src="./User/assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./User/assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event" id="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Update Terbaru</p>

          <h2 class="section-title headline-1 text-center">Event Mendatang</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine"
              data-aos="fade-right"
              data-aos-duration="500">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./User/assets/images/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">15/03/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Makanan & Cita Rasa</p>

                  <h3 class="card-title title-2 text-center">
                    Nikmati perpaduan sempurna makanan lezat dan cita rasa otentik di event spesial kami!
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine"
              data-aos="fade-up"
              data-aos-duration="500">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./User/assets/images/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">08/04/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Makanan Sehat</p>

                  <h3 class="card-title title-2 text-center">
                    Makanan sehat, lezat, dan penuh nutrisi untuk gaya hidup lebih baik!
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine"
              data-aos="fade-left"
              data-aos-duration="500">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./User/assets/images/event-3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/05/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Resep Lezat</p>

                  <h3 class="card-title title-2 text-center">
                    Temukan resep istimewa dengan cita rasa tak terlupakan!
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="https://makanmana.net/2018/11/14/la-ninas/" class="btn btn-primary">
            <span class="text text-1">Lihat Blog Kami</span>

            <span class="text text-2" aria-hidden="true">Lihat Blog Kami</span>
          </a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./User/assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./User/assets/images/logoLaNinas.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            LaNinas Coffee and Kitchen <br>
            Jl. Sei Ular Baru No.70, Medan Sunggal, Kota Medan
          </address>

          <a href="mailto:laninasresto@gmail.com" class="body-4 contact-link">laninasresto@gmail.com</a>

          <a href="tel:+6281360696825" class="body-4 contact-link">Booking Request :+62 813-6069-6825</a>

          <p class="body-4">
            Buka : 10:00 - 23:00 WIB
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Ada masukan untuk kami?</p>

          <p class="label-1">
            Bagikan pengalaman Anda di sini!
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <a href="https://g.co/kgs/kVBKKEB" button type="submit" class="btn btn-secondary">
              <span class="text text-1">Ulasan</span>

              <span class="text text-2" aria-hidden="true">Ulasan</span>
            </a>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#home" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#menu" class="label-2 footer-link hover-underline">Menu</a>
          </li>

          <li>
            <a href="#about" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#features" class="label-2 footer-link hover-underline">features</a>
          </li>

          <li>
            <a href="#contact" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="https://web.facebook.com/p/Laninas-Kitchen-100078771700073/?_rdc=1&_rdr#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="https://www.instagram.com/laninascoffee/" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="https://www.google.com/maps/dir/LaNinas+Coffee+%26+Kitchen,+Jalan+Sei+Ular+Baru,+Babura+Sunggal,+Medan+City,+North+Sumatra/Jl.+Sei+Ular+Baru+No.70,+RW.72,+Babura+Sunggal,+Kec.+Medan+Sunggal,+Kota+Medan,+Sumatera+Utara+20154/@3.5785222,98.6060539,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x303131d376e67f09:0x859a4603f258a5db!2m2!1d98.6472525!2d3.5784376!1m5!1m1!1s0x303131d376e67f09:0x859a4603f258a5db!2m2!1d98.6472525!2d3.5784376?entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D"
             class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2025 LaNinas Cofffe & Kitchen. All Rights Reserved | Crafted by <a href="https://www.instagram.com/etherealpriaa/"
            target="_blank" class="link">Pria Dimas</a>
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./User/assets/js/script.js"></script>


   <!-- 
    - AOS
  -->

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <script>
  AOS.init();
 </script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 

</body>

</html>