<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Smart Consultants</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{asset('templates/img/SMART2kecil.png')}}" rel="icon" />
    <link href="{{asset('templates/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('templates/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('templates/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('templates/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('templates/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('templates/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{asset('templates/css/main.css')}}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center accent-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="img/logo.png" alt=""> -->
                    <img src="img/SMART2.png" alt="" />
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Education and Consultants</span>
                                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">
                                        <span>Quality Management</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">ISO 9001</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">
                                        <span>Health, Safety, Sustainability</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">ISO 14001</a></li>
                                        <li><a href="#">ISO 22000</a></li>
                                        <li><a href="#">ISO 45001</a></li>
                                        <li><a href="#">OHSAS 18001</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">
                                        <span>Information Security</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">ISO/IEC 27001</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">
                                        <span>Other</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">SMK3</a></li>
                                        <li class="dropdown">
                                            <a href="#">
                                                <span>AK3</span>
                                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                                            </a>
                                            <ul>
                                                <li><a href="#">AK3 Umum</a></li>
                                                <li><a href="#">AK3 Konstruksi</a></li>
                                                <li><a href="#">AK3 Listrik</a></li>
                                                <li><a href="#">AK3 Kimia</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">HACCP</a></li>
                                        <li><a href="#">CSMS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Training Event</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <div class="main">
        @yield('content')
    </div>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename"><img src="img/SMART2.png" alt="" /></span>
                    </a>
                    <p>
                        CV. SMART FORTUNA KONSULTAMA is a service company engaged in
                        innovative, applicable and productive training and consulting.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-13 footer-contact text-center text-md-start">
                    <h4>Opening Hours</h4>
                    <p>Monday-Friday: 8:00-17.00 Wib</p>
                    <p>Saturday: Situasional</p>
                    <p>Sunday: closed</p>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">smartconsultants.co.id</strong>
                <br /><span>All Rights Reserved</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('templates/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('templates/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('templates/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('templates/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('templates/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('templates/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('templates/js/main.js')}}"></script>
</body>

</html>