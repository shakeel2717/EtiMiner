<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ASAN Webs Development">
    <meta name="DC.title" content="{{ env('APP_DESC') }}">
    <link rel="shortcut icon" href="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/qompac-ui.minf700.css?v=1.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.minf700.css?v=1.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.minf700.css?v=1.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.minf700.css?v=1.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.minf700.css?v=1.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1.0.1') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>

<body class=" ">
    <div class="wrapper">
        <section class="login-content overflow-hidden">
            <div class="row no-gutters align-items-center bg-white">
                <div class="col-md-12 col-lg-6 align-self-center">
                    <a href="../index.html" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                        <div class="logo-normal">
                            <svg class="" viewBox="0 0 32 32" width="80px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor" />
                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                            </svg>
                        </div>
                        <h2 class="logo-title ms-3 mb-0" data-setting="app_name">Qompac UI</h2>
                    </a>
                    @yield('form')
                </div>
                <div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
                    <img src="{{ asset('') }}assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy">
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slider-tabs.js') }}"></script>
    <script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('assets/js/iqonic-script/utility.min.js') }}"></script>
    <script src="{{ asset('assets/js/iqonic-script/setting.min.js') }}"></script>
    <script src="{{ asset('assets/js/setting-init.js') }}"></script>
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
    <script src="{{ asset('assets/js/charts/widgetchartsf700.js?v=1.0.1') }}" defer></script>
    <script src="{{ asset('assets/js/charts/dashboardf700.js?v=1.0.1') }}" defer></script>
    <script src="{{ asset('assets/js/qompac-uif700.js?v=1.0.1') }}" defer></script>
    <script src="{{ asset('assets/js/sidebarf700.js?v=1.0.1') }}" defer></script>
</body>

</html>