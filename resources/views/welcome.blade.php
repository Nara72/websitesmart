@extends('layouts.admin')

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{asset ('templates/img/hero-carousel/hero-carousel-1.jpg') }}" alt="" />
                <div class="carousel-container">
                    <h2>What is ISO 9001?</h2>
                    <p>
                        ISO 9001 specifies the requirements for organizations that want
                        to ensure continual improvement and meet customers’ needs. ISO
                        9001 was specifically designed to serve as a guiding framework
                        for organizations of all sizes and industries as it provides a
                        firm customer focus, namely delivering qualitative goods and
                        services, which subsequently leads to customer satisfaction
                    </p>
                    <a href="/9001" class="btn-get-started">Learn More</a>
                </div>
            </div>
            <!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{asset ('templates/img/hero-carousel/hero-carousel-2.jpg') }}" alt="" />
                <div class="carousel-container">
                    <h2>What is ISO/IEC 27001 ?</h2>
                    <p>
                        ISO / IEC 27001 is one of the ISO management given about the
                        Information security Management System. In today’s highly
                        competitive business environment, this information continues to
                        get protection from many sources such as internal or external,
                        which are caused by accident or is a deliberate challenge. The
                        use of technology that gives organizations the ability to grow
                        and sustain growth, also supports new problems concerning
                        information security.
                    </p>
                    <a href="/27001" class="btn-get-started">Learn More</a>
                </div>
            </div>
            <!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{asset ('templates/img/hero-carousel/hero-carousel-3.jpg') }}" alt="" />
                <div class="carousel-container">
                    <h2>What is ISO/IEC 27001</h2>
                    <p>
                        ISO / IEC 27001 is one of the ISO management given about the
                        Information security Management System. In today’s highly
                        competitive business environment, this information continues to
                        get protection from many sources such as internal or external,
                        which are caused by accident or is a deliberate challenge. The
                        use of technology that gives organizations the ability to grow
                        and sustain growth, also supports new problems concerning
                        information security.
                    </p>
                    <a href="/27001" class="btn-get-started">Learn More</a>
                </div>
            </div>
            <!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="/14001" class="stretched-link">ISO 14001</a></h4>
                        <p>
                            ISO 14001 is a widely recognized international standard which
                            specifies the requirements for organizations that want to
                            enhance their environmental performance and increase their
                            operational efficiency.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles icon"></i>
                        </div>
                        <h4><a href="/22000" class="stretched-link">ISO 22000</a></h4>
                        <p>
                            ISO 22000 is a globally accepted international standard, which
                            specifies the requirements for food safety management systems.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week icon"></i>
                        </div>
                        <h4><a href="/45001" class="stretched-link">ISO 45001</a></h4>
                        <p>
                            ISO 45001 is a newly developed international standard, which
                            outlines the requirements for occupational health and safety.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="/18001" class="stretched-link">OHSAS 18001</a></h4>
                        <p>
                            OHSAS 18001 is an international standard on occupational
                            health and safety which was designed to help organizations
                            identify, control and minimize their health and safety risks.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>

        <form action="{{ route('dataser') }}" method="GET">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Masukkan Nomor Sertifikat">
            <button type="submit"><i class="fas fa-search fa-fw"></i></button>
        </form>
        <!-- End Section Title -->


    </section>

    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <img src="{{asset ('templates/img/img9001.webp') }}" alt="" />
                        <h3>
                            <a href="/9001" class="read-more stretched-link">ISO 9001</a>
                        </h3>
                        <p>
                            ISO 9001 adalah suatu standar tentang sistem manajemen mutu yang penerapannya di organisasi

                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <img src="{{asset ('templates/img/img21001.webp') }}" alt="" />
                        <h3>
                            <a href="/21001" class="read-more stretched-link">ISO 21001</a>
                        </h3>
                        <p>
                            ISO 21001 adalah standar sistem manajemen international pertama di dunia untuk organisasi
                            Pendidikan.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <img src="{{asset ('templates/img/img37001.webp') }}" alt="" />
                        <h3>
                            <a href="/37001" class="read-more stretched-link">ISO 37001</a>
                        </h3>
                        <p>
                            ISO 37001 adalah suatu standar tentang sistem manajemen anti-penyuapan yang penerapannya di
                            organisasi
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <i class="bi bi-bounding-box-circles icon"></i>
                        <h3>
                            <a href="/27001" class="read-more stretched-link">ISO 27001</a>
                        </h3>
                        <p>
                            ISO 27001 adalah suatu standar sistem manajemen keamanan informasi yang penerapannya
                            diorganisasi.

                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <i class="bi bi-calendar4-week icon"></i>
                        <h3>
                            <a href="/22000" class="read-more stretched-link">ISO 22000</a>
                        </h3>
                        <p>
                            ISO 22000 adalah suatu standar tentang sistem manajemen keamanan pangan yang penerapannya di
                            organisasi
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-chat-square-text icon"></i>
                        <h3>
                            <a href="haccp" class="read-more stretched-link">HACCP</a>
                        </h3>
                        <p>HACCP (Hazard Analysis Critical Control Point) adalah suatu sistem jaminan mutu yang
                            mendasarkan kepada kesadaran atau penghayatan
                        </p>
                    </div>
                </div>

                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-chat-square-text icon"></i>
                        <h3>
                            <a href="14001" class="read-more stretched-link">ISO 14001</a>
                        </h3>
                        <p>
                            ISO 14001 adalah suatu standar tentang sistem manajemen lingkungan yang penerapannya di
                            organisasi
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-chat-square-text icon"></i>
                        <h3>
                            <a href="45001" class="read-more stretched-link">ISO 45001</a>
                        </h3>
                        <p>
                            ISO 45001 adalah suatu standar tentang sistem manajemen kesehatan dan keselamatan kerja yang
                            penerapannya di organisasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->

    <!-- Call To Action Section -->

    <!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>

        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>
                                    Jl. Raya Padjajaran No.02, Baranang Siang, Bogor 16143,
                                    Indonesia
                                </p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>
                                    Phone : +62 (812) 19022189 <br />Fax : +62 (251) 7561016
                                </p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>smartconsultants2002@gmail.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3133216376013!2d106.80725227430432!3d-6.607933764594232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e76faf7f87%3A0x10f9d8584599f77e!2sJl.%20Raya%20Pajajaran%20No.2%2C%20RT.04%2FRW.03%2C%20Baranangsiang%2C%20Kec.%20Bogor%20Tim.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016143!5e0!3m2!1sen!2sid!4v1726194648977!5m2!1sen!2sid"
                            style="border: 0; width: 100%; height: 270px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="{{asset ('templates/forms/contact.php') }}" method="post" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Your Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="" />
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="" />
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required="" />
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>

                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
</main>
@endsection