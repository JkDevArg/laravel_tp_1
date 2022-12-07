<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>{{ __('Dashboard') }} # {{ config('app.name', 'Laravel') }} </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('backend/colors/color1.css')}}" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('backend/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('backend.layouts.navbar')

            <!--APP-SIDEBAR-->
            @include('backend.layouts.sidebar')

            <!--app-content open-->
            @yield('content')
            <!--app-content close-->

        </div>

        @include('backend.layouts.rigthSidebar')

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/us_flag.jpg')}}"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/italy_flag.jpg')}}"
                                        class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/spain_flag.jpg')}}"
                                        class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/india_flag.jpg')}}"
                                        class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/french_flag.jpg')}}"
                                        class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/russia_flag.jpg')}}"
                                        class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/germany_flag.jpg')}}"
                                        class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/argentina.jpg')}}"
                                        class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/malaysia.jpg')}}"
                                        class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/turkey.jpg')}}"
                                        class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2022 <a href="javascript:void(0)">Sash</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('backend/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('backend/js/sticky.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('backend/js/circle-progress.min.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('backend/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('backend/plugins/sidebar/sidebar.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('backend/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('backend/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('backend/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('backend/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('backend/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('backend/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('backend/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('backend/js/apexcharts.js')}}"></script>
    <script src="{{asset('backend/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('backend/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('backend/js/charts.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('backend/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('backend/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('backend/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('backend/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('backend/js/custom.js')}}"></script>

</body>

</html>