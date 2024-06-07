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
            <li class="nav-item px-2"><a class="nav-link" href="#dokter">Dokter</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#review">Review</a></li>
          </ul>
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="/daftar_pasien">Daftar</a>
        </div>
      </div>
    </nav>

      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/hero-bg.png') }}');background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{ asset('landingpage/public/assets/img/gallery/hero.png') }}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Kami <strong>berkomitmen </strong>untuk<br />meningkatkan kualitas&nbsp;<strong>hidup anda</strong></h1>
              <p class="fs-1 mb-5">Kesejahteraan Anda adalah prioritas kami, dan kami siap melayani anda dengan ramah dan penuh perhatian<br /> dari para dokter spesialis kami.</p><a class="btn btn-lg btn-primary rounded-pill" href="/daftar_pasien" role="button">Make an Appointment</a>
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
                <img class="img-fluid" src="{{ asset('landingpage/public/assets/img/gallery/eye-care.png') }}" alt="..." />
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
                <div class="py-3">
                  <a class="btn btn-lg btn-light rounded-pill" href="/" role="button">Learn more</a>
                </div>
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
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{{ asset('landingpage/public/assets/img/gallery/health-care.png') }}" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Tentang Klinik Mastrip</h2>
              <p>Klinik Mastrip saat ini berkedudukan di Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur. Klinik ini didirikan dengan tujuan memberikan pelayanan kesehatan bagi masyarakat sekitar. Pelayanan kesehatan diberikan, berkaitan dengan mutu dan berorientasi pada kepuasan pasien yang berdasarkan standart kualitas pasien, sehingga pasien dapat memperoleh kepuasan yang akhirnya dapat meningkatkan mutu dan kepercayaan terhadap Klinik. </p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="dokter">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/doctors-us.png') }}');background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Dokter Kami</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/doctors-bg.png') }}');background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/anita.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/jane.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/leo-mario.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/anita.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/jane.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/leo-mario.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/anita.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/jane.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ asset('landingpage/public/assets/img/gallery/leo-mario.png') }}" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="review">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/people.png') }}');background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Review Client</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/people-bg-1.png') }}');background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{ asset('landingpage/public/assets/img/gallery/people-who-loves.png') }}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                      <p class="fw-normal mb-0">Founder Circle</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{ asset('landingpage/public/assets/img/gallery/people-who-loves.png') }}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                      <p class="fw-normal mb-0">UI/UX Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{ asset('landingpage/public/assets/img/gallery/people-who-loves.png') }}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                      <p class="fw-normal mb-0">Web Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-primary">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/cta-bg.png') }}');background-position:center right;margin-top:-8.125rem;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-light">Get an update every week</h2>
              <p class="text-soft-primary">Livedoc was created in order to improve the patient experience. <br />Providing world-class tests, and a wide range of other services.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="mb-3 text-soft-primary">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control form-livedoc-control form-cta-control text-soft-primary" id="inputEmailCta" type="email" placeholder="Email" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url('{{ asset('landingpage/public/assets/img/gallery/dot-bg.png') }}');background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="{{ asset('landingpage/public/assets/img/gallery/footer-logo.png') }}" height="51" alt="" /></a>
              <p class="text-light my-4">The world's most trusted <br />telehealth company.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Departments</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Eye care</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Cardiac are</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Heart care</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Membership</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Free trial</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Silver</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Premium</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Get Update</a></li>
              </ul>
            </div>
          </div>
        </div>


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

