<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Medical HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/logofix.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-NhD9Ccv/En+X9FywZMiFX+o2H72+oh3vW07SKbxowcGpNRgPst5nMhJIdmg9XfSjJS3vRGkHZqL7J/v4n9FFoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/slick.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
</head>
<style>
    /* Custom Media Queries */
@media (max-width: 768px) {
    .header-right-btn {
        margin-left: 0;
    }

    .doctor__item__text {
        text-align: center;
    }

    .doctor__item__pic img {
        width: 100%;
        height: auto;
    }

    .hero-cap h2 {
        font-size: 24px;
    }

    .button-group-area a {
        display: block;
        margin-bottom: 10px;
        width: 100%;
        text-align: center;
    }
}

</style>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <main>
    <!-- Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                        <img src="{{asset('assets/img/logo/logofix.png') }}" alt="Logo" class="overlay-logo">
                            <h2>Daftar Pasien</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

   <!-- Doctor Section Begin -->
    <section class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <span>Next Step</span>
                        <h2>Pilih Waktu Pemeriksaan kamu</h2>
                    </div>
                </div>
            </div>
            <div class="doctor__item" style="padding-top:20px;">
                <div class="row">
                    <div class="col-lg-6 order-lg-1">
                        <div class="doctor__item__pic">
                            <img src="{{asset($dokter->foto) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="doctor__item__text">
                            <span>{{$dokter->layanan}}</span>
                            <h2>{{$dokter->nama}}</h2>
                            <p>{{$dokter->deskripsi}}</p>

                            <div class="container box_1170 border-top-generic">
                                @foreach ($sesi_tersedia as $sesi)
                                    <a href="#" class="genric-btn primary-border circle arrow">{{ $sesi['mulai'] }}-{{ $sesi['selesai'] }}<span class="lnr lnr-arrow-right"></span></a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor Section Begin -->
    </main>

    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{asset('assets/img/gallery/footer_bg.jpg') }}">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="{{asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Lorem igpsum doldfor sit amet, adipiscing elit, sed do eiusmod tempor cergelit rgh. </p>
                                        <p class="info1">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>+564 </span>7885 3222</h4>
                                    <p>youremail@gmail.com</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                        <!-- Sosial Media Footer -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('./assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('./assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('./assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('./assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('./assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('./assets/js/animated.headline.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('./assets/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.sticky.js')}}"></script>

    <!-- counter , waypoint -->
    <script src="{{ asset('./assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('./assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.countdown.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{ asset('./assets/js/contact.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.form.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('./assets/js/mail-script.js')}}"></script>
    <script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('./assets/js/plugins.js')}}"></script>
    <script src="{{ asset('./assets/js/main.js')}}"></script>

    </body>
</html>
