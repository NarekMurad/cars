
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.css?v=3.2.0') }}">

</head>
<body class="login-page" style="min-height: 496.781px;">
    <div class="login-box">
        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</body>
</html>
