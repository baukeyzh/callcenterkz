<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Таможенное оформление • Asia Freight — Авиаперевозки по всему Казахстану</title>
    <script src="{{asset('tracking/js/vendor/pace.min.js')}}"></script>
    <link href="{{asset('tracking/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tracking/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('tracking/css/style.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0b264b">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5T3K2HM');
    </script>
    <script src="{{asset('tracking/js/jquery.min.js')}}"></script>
    <script src="{{asset('tracking/js/bootstrap.min.js')}}"></script>
    <!-- End Google Tag Manager -->
</head>
<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #3c4b64;
    }
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid;
        border-top-color: #d8dbe0;
    }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid;
        border-bottom-color: #d8dbe0;
    }
    .table tbody + tbody {
        border-top: 2px solid;
        border-top-color: #d8dbe0;
    }

</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T3K2HM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="page__tracking">
    <div class="section__header">
        <div class="wrap">
            <div class="logo">
                <a title="На главную"><img src="{{asset('images/admin/logo-white.png')}}" alt="Asia Freight"></a>
            </div>
            <div class="menu-toggler" id="MenuToggler">
                <span></span>
            </div>
            <div class="phones">
                <p><a href="tel:+7 7273 93 11 10">+7 7273 93 11 10</a></p>
                <p><a href="tel:+7 7273 93 28 88">+7 7273 93 28 88</a></p>
            </div>
        </div>
    </div>
    <div class="section__menu-popup" id="MenuPopup">
        <div class="wrap">
            <div class="contacts">
                <a href="/logout">Выйти</a>
            </div>
        </div>
    </div>

    <main class="section__main">
        @yield('content')
    </main>

    <footer class="section__footer">
        <div class="wrap">
            <div class="logo">
                <a title="На главную"><img src="{{asset('images/admin/logo-white.png')}}" alt="Asia Freight"></a>
            </div>
        </div>
    </footer>
    <div class="overlay" id="overlay"></div>
    <div class="preloader">
        <div class="logo"></div>
    </div>
</div>
<script src="{{asset('tracking/js/all.js')}}"></script>
</body>
</html>
