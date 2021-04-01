<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    {{-- Icon AWESOME --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .navbar {
            padding-top: 0;
            padding-bottom: 0;
        }

        .c-nav-item a:hover {
            color: #FFC107 !important;
        }

        .nav-link {
            color: white !important;
        }

        .navbar-brand {
            color: black !important;
        }

        .active {
            font-weight: bold;
        }

    </style>

    <title>@yield('title')</title>
</head>

<body style="background-color: #CCD9E2">
    @include('layout.header')
    <div style="margin-top: 130px; padding: 1%">
        @yield('content')
    </div>
    @include('layout.footer')
</body>

</html>
