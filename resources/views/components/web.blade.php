<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Designs Ninja">
    <meta name="description"
        content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
    <meta name="keywords"
        content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
    <title>KETAPANG TRAVEL GUIDE</title>
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/images/logo.png">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/revolution/css/navigation.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/assets/css/leaflet.defaultextent.css">
    <script src="{{ url('public/web') }}/assets/js/leaflet.defaultextent.js"></script>

    <link rel="stylesheet"
        href="{{ url('public/web') }}/assets/js/leaflet-panel-layers/dist/leaflet-panel-layers.min.css" />
    <script src="{{ url('public/web') }}/assets/js/leaflet-panel-layers/dist/leaflet-panel-layers.src.js"></script>


   
</head>

<body>

    <!--== Loader Start ==-->
    <div id="loader-overlay">
        <div class="loader">
            <div class="spinner-double-dot-in"></div>
        </div>
    </div>
    <!--== Loader End ==-->

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Header Start ==-->
        <x-layout.web.header />
        <!--== Header End ==-->
        {{ $slot }}
        <!--== Footer Start ==-->
        <x-layout.web.footer />
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!--== Wrapper End ==-->

    <!--== Javascript Plugins ==-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/smoothscroll.js"></script>
    <script src="{{ url('public/web') }}/assets/js/plugins.js"></script>
    <script src="{{ url('public/web') }}/assets/js/master.js"></script>

    <!-- Revolution js Files -->
    <script src="{{ url('public/web') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.actions.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.migration.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="{{ url('public/web') }}/revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

    @stack('script')
</body>

</html>
