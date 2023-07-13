<!doctype html>
<html lang="pt_BR">
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
    <link href="{assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="{{route('home.index')}}"><span>Amigurumi Da Vovó 👵🏼</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{--            <a href="index.html"><img src="{{asset('assets/img/hero-img.svg')}}" alt="" class="img-fluid"></a>--}}
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{route('home.index')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('product.index')}}">Amigurumis</a></li>
                <li><a class="nav-link scrollto" href="{{route('home.about')}}">Sobre Mim</a></li>
                <li><a class="nav-link scrollto" href="{{route('contact.index')}}">Contato</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<!-- End Header -->

</body>
<script>
    // Obtém o URL atual
    var currentUrl = window.location.href;

    // Obtém todos os links de navegação
    var navLinks = document.querySelectorAll('#navbar ul li a');

    // Percorre cada link de navegação
    navLinks.forEach(function(link) {
        // Verifica se o link corresponde ao URL atual
        if (link.href === currentUrl) {
            // Adiciona a classe .active ao link correspondente
            link.classList.add('active');
        }
    });
</script>
</html>
