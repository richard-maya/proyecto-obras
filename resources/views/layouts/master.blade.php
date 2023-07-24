<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('shared.navbar')

<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</main>

@include('shared.footer')

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://kit.fontawesome.com/30bfca23e2.js" crossorigin="anonymous"></script>
</body>
</html>