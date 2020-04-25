<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 09:59:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/jpg" sizes="16x16" href="/assets/images/skasc.jpg">
    <title>Time Chart</title>
    <!-- <link href="/dist/css/style.min.css" rel="stylesheet"> -->
    <!-- This Basic Data table CSS -->
    
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/> -->
    
    <!-- Custom CSS -->
    <link href="/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

     <!-- Custom CSS -->
    <!-- <link href="/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="/assets/extra-libs/calendar/calendar.css" rel="stylesheet" /> -->
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        @include('Admin.layouts.header')
        @include('Admin.layouts.sidebar')
        @yield('content')
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->






</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 10:02:10 GMT -->
</html>