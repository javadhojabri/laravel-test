<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mystyle.css">
    <title>Soccer managment</title>
</head>
<body>
@include('admin.partials.nav')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-11 m-auto">
            <div class="card">
                <div class="card-header text-right">
                    <b>{{$panel_title}}</b>
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>