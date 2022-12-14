
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.css') }}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/jqvmap/jqvmap.css') }}">

    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/summernote/summernote-bs4.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('admin.layouts.nav')

    @include('admin.layouts.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('admin.layouts.footer')

</div>


<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('/plugins/sparklines/sparkline.js') }}"></script>

<script src="{{ asset('/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<script src="{{ asset('/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<script src="{{ asset('/dist/js/adminlte.js?v=3.2.0') }}"></script>

<script src="{{ asset('/dist/js/demo.js') }}"></script>

<script src="{{ asset('/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
