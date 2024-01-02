<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>E-KTG - Ketapang Travel Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        <link rel="shortcut icon" href="{{ url('public/admin') }}/assets/images/user.png">


        <link href="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">


        <link href="{{ url('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ url('public/admin') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">

       <x-layout.mitra.sidebar />



        <div class="page-wrapper">

            <x-layout.mitra.header />



            <div class="page-content">
                <div class="container-fluid mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <x-utils.notif />
                        </div>
                    </div>
                    <br>
                    {{ $slot }}
                </div>

                <x-layout.mitra.footer />

            </div>

        </div>

        <script src="{{ url('public/admin') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/metismenu.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/waves.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/feather.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/simplebar.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/jquery-ui.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/moment.js"></script>
        <script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="{{ url('public/admin') }}/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="{{ url('public/admin') }}/assets/pages/jquery.analytics_dashboard.init.js"></script>


        <script src="{{ url('public/admin') }}/assets/js/app.js"></script>

        <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/jszip.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.colVis.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/pages/jquery.datatable.init.js"></script>

        <script src="{{ url('public/admin') }}/plugins/leaflet/leaflet.js"></script>
        <script src="{{ url('public/admin') }}/plugins/lightpick/lightpick.js"></script>
        <script src="{{ url('public/admin') }}/assets/pages/jquery.profile.init.js"></script>


    </body>

</html>
