<x-navbar/>
    <x-header_hero/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Amigurumi da Vovó'}}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="http://tailwindcomponents.com/storage/9593/conversions/temp68543-ogimage.jpg?v=2023-06-28 12:35:54" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/creating-a-simple-profile-card-with-tailwind-css/landing" />
    <meta property="og:title" content="Creating a Simple Profile Card with Tailwind CSS by Coding4Ethiopia" />
    <meta property="og:description" content="This code creates a simple profile card using Tailwind CSS. The card features a profile picture, name, job title, and links to social media accounts. It also includes a short bio section." />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Creating a Simple Profile Card with Tailwind CSS by Coding4Ethiopia" />
    <meta name="twitter:description" content="This code creates a simple profile card using Tailwind CSS. The card features a profile picture, name, job title, and links to social media accounts. It also includes a short bio section." />
    <meta name="twitter:image" content="http://tailwindcomponents.com/storage/9593/conversions/temp68543-ogimage.jpg?v=2023-06-28 12:35:54" />


    <script src="https://cdn.tailwindcss.com/"></script>


    <!-- Favicons -->
    {{--    <link href="assets/img/favicon.png" rel="icon">--}}
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
    <!-- Start #main -->
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Meu trabalho</h2>
                    <p>Alguns dos meus amigurumis</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-1.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Jojo Dodynho</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-2.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Grecthe</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-3.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Joaquin Junior</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-1.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Jojo Dodynho</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-2.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Grecthe</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/amigurumis/amig-3.png')}}" class="img-fluid img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/amigurumis/amig-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Joaquin Junior</h4>
                                <p>Alguma descrição</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            <div class="row" data-aos="fade-up" data-aos-delay="100">--}}
                {{--                <div class="col-lg-12">--}}
                {{--                    <ul id="portfolio-flters">--}}
                {{--                        <li data-filter="*" class="filter-active">All</li>--}}
                {{--                        <li data-filter=".filter-app">App</li>--}}
                {{--                        <li data-filter=".filter-card">Card</li>--}}
                {{--                        <li data-filter=".filter-web">Web</li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--            </div>--}}

            </div>
        </section><!-- End Portfolio Section -->

    </main>
    <!-- End #main -->

<x-footer/>
