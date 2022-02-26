<!doctype html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>Dashboard | Admin | e-Santunan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('')}}asset/images/favicon.ico"> --}}

        <!-- Bootstrap Css -->
        <link href="{{asset('')}}asset/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('')}}asset/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('')}}asset/css/app.min.css"  rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('layouts.admin.header')

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    @include('layouts.admin.sidebar')
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('container')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('')}}asset/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('')}}asset/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('')}}asset/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('')}}asset/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('')}}asset/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('')}}asset/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="{{asset('')}}asset/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{asset('')}}asset/js/app.js"></script>
    </body>

</html>
