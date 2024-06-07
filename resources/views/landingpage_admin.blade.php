<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>klinik Mastrip</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landingpage/public/assets/img/favicons/logofix.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landingpage/public/assets/img/favicons/logofix.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landingpage/public/assets/img/favicons/logofix.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logofix.png') }}">
    <link rel="manifest" href="{{ asset('landingpage/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('landingpage/public/assets/img/favicons/logofix.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('landingpage/public/assets/css/theme.css') }}" rel="stylesheet" />

  </head>
  <style>
  .custom-navbar {
    top: -10px; /* Adjust this value as needed */
  }

  @media (max-width: 991.98px) {
    .custom-navbar {
      top: 0; /* Ensures the navbar is correctly positioned on smaller screens */
    }
  }
</style>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top d-block custom-navbar" data-navbar-on-scroll="data-navbar-on-scroll" >
      <div class="container">
        <a class="navbar-brand" href="landingpage.php">
          <img src="landingpage/public/assets/img/gallery/logofix.png" style="height: 300px; margin-top: -30%; margin-bottom: -30%;"  alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#home">Home</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#about">About Us</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#departments">Layanan</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="/logins">Sing In</a>
        </div>
      </div>
    </nav>

      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/hero-bg.png') }}');background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row min-vh-xl-100 min-vh-xxl-25">
              <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end d-flex justify-content-center align-items-start pt-3">
                <img class="pt-7 pt-md-0 rounded-circle" src="{{ asset('landingpage/public/assets/img/favicons/gambar_aboutus.jpg') }}" alt="hero-header" style="width: 300px; height: 300px; object-fit: cover;" />
              </div>
              <div class="col-md-7 col-xl-6 col-xxl-5 text-md-start text-center py-3 d-flex align-items-start" style="padding-top: 1rem;">
                <div>
                  <h1 class="fw-light font-base fs-6 fs-xxl-7">Kami <strong>berkomitmen </strong>untuk<br />meningkatkan kualitas&nbsp;<strong>hidup anda</strong></h1>
                  <p class="fs-1 mb-5">Kesejahteraan Anda adalah prioritas kami, dan kami siap melayani anda dengan ramah dan penuh perhatian<br /> dari para dokter spesialis kami.</p>
                </div>
              </div>
            </div>
          </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="departments">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/bg-departments.png') }}');background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->
              <h1 class="text-center">Layanan Kami</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('landingpage/public/assets/img/icons/neurology.png') }}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('landingpage/public/assets/img/icons/neurology.svg') }}" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Poli Umum</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('landingpage/public/assets/img/icons/eye-care.png') }}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('landingpage/public/assets/img/icons/eye-care.svg') }}" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Poli Anak</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('landingpage/public/assets/img/icons/osteoporosis.png') }}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('landingpage/public/assets/img/icons/osteoporosis.svg') }}" alt="..." />
                    <p class="fs-1 fs-xxl-2 text-center">Poli Interna</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/bg-eye-care.png') }}');background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center">
              <div class="col-md-5 col-xxl-6">
                <img class="img-fluid" src="{{ asset('landingpage/public/assets/img/favicons/gambar_visimisi.jpg') }}" alt="..." />
              </div>
              <div class="col-md-7 col-xxl-6 text-center text-md-start">
                <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Visi & Misi</h2>
                <h4 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Visi :</h4>
                <p class="text-light">Menjadikan Klinik Mastrip sebagai pelayanan kesehatan umum yang terkemuka di wilayah Sumbersari dan mampu bersaing di era globalisasi.</p>
                <h4 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Misi :</h4>
                <ul class="text-light">
                  <li>Pelayanan yang ramah dan profesional</li>
                  <li>Meningkatkan mutu pelayanan</li>
                  <li>Konsisten kepada pelayanan yang professional</li>
                </ul>
              </div>
            </div>
          </div>

      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="about">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/about-us.png') }}');background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">ABOUT US</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/about-bg.png') }}');background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{{ asset('landingpage/public/assets/img/favicons/gambar_aboutus.jpg') }}" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Tentang Klinik Mastrip</h2>
              <p>Klinik Mastrip saat ini berkedudukan di Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur. Klinik ini didirikan dengan tujuan memberikan pelayanan kesehatan bagi masyarakat sekitar. Pelayanan kesehatan diberikan, berkaitan dengan mutu dan berorientasi pada kepuasan pasien yang berdasarkan standart kualitas pasien, sehingga pasien dapat memperoleh kepuasan yang akhirnya dapat meningkatkan mutu dan kepercayaan terhadap Klinik. </p>

            </div>
          </div>
        </div>
      </section>


      <section class="py-0 bg-secondary"id="contact">
        <div class="bg-holder opacity-25" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/dot-bg.png') }}');background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row py-8">
              <div class="col-12 mb-4">
                <h2 class="text-light text-center">Contact Us</h2>
              </div>
              <div class="col-2 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0 d-flex align-items-start flex-column">
                <div class="container mb-4" style="width: 500px; height: 300px; overflow: hidden; position: relative;">
                  <a class="text-decoration-none" href="#">
                    <img src="{{ asset('landingpage/public/assets/img/gallery/logofix.png') }}" style="width: auto; height: 500px; position: absolute; top: 80%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;" alt="" />
                  </a>
                </div>
                <div class="d-flex align-items-start" style="margin-bottom: 20px;">
                  <div class="container me-3" style="width: 150px; height: 150px; overflow: hidden; position: relative;">
                    <a class="text-decoration-none" href="#">
                      <img src="{{ asset('landingpage/public/assets/img/favicons/kemenkes.png') }}" style="width: 150px; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;" alt="small-image-1" />
                    </a>
                  </div>
                  <div class="container me-3" style="width: 150px; height: 150px; overflow: hidden; position: relative;">
                    <a class="text-decoration-none" href="#">
                      <img src="{{ asset('landingpage/public/assets/img/favicons/bpjs.png') }}" style="width: 150px; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;" alt="small-image-2" />
                    </a>
                  </div>
                  <div class="container" style="width: 150px; height: 150px; overflow: hidden; position: relative;">
                    <a class="text-decoration-none" href="#">
                      <img src="{{ asset('landingpage/public/assets/img/favicons/germas.png') }}" style="width: 150px; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;" alt="small-image-3" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-10 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0 d-flex align-items-start">
                <div class="text-light ms-3 align-self-start" style="margin-top: 160px;">
                  <p class="my-4" style="margin-top: 50px; margin-bottom: 0;">
                    E-Klinik Mastrip adalah website booking layanan klinik andalan kita<br>
                    Contact Us +62 822 2433 2222<br>
                    E-Klinik.Mastrip.id<br>
                    Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur
                  </p>
                </div>
              </div>
            </div>
          </div>
      </section>




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('https://scripts.sirv.com/sirvjs/v3/sirv.js') }}"></script>
    <script src="{{ asset('https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('landingpage/public/assets/js/theme.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>

