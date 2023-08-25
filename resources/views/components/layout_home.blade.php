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

    <meta property="og:image"
          content="http://tailwindcomponents.com/storage/9593/conversions/temp68543-ogimage.jpg?v=2023-06-28 12:35:54"/>
    <meta property="og:image:width" content="1280"/>
    <meta property="og:image:height" content="640"/>
    <meta property="og:image:type" content="image/png"/>

    <meta property="og:url"
          content="https://tailwindcomponents.com/component/creating-a-simple-profile-card-with-tailwind-css/landing"/>
    <meta property="og:title" content="Creating a Simple Profile Card with Tailwind CSS by Coding4Ethiopia"/>
    <meta property="og:description"
          content="This code creates a simple profile card using Tailwind CSS. The card features a profile picture, name, job title, and links to social media accounts. It also includes a short bio section."/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@TwComponents"/>
    <meta name="twitter:title" content="Creating a Simple Profile Card with Tailwind CSS by Coding4Ethiopia"/>
    <meta name="twitter:description"
          content="This code creates a simple profile card using Tailwind CSS. The card features a profile picture, name, job title, and links to social media accounts. It also includes a short bio section."/>
    <meta name="twitter:image"
          content="http://tailwindcomponents.com/storage/9593/conversions/temp68543-ogimage.jpg?v=2023-06-28 12:35:54"/>


    <!-- Favicons -->
    {{--    <link href="assets/img/favicon.png" rel="icon">--}}
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

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
<body>
<x-navbar/>
{{ $slot }}
</body>

<x-footer :socialMedia="$socialMedia" :enderecos="$enderecos" />

</html>



