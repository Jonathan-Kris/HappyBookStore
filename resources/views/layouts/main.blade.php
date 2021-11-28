<!DOCTYPE html>
<html lang="en">

<head>
    <title>Happy Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

    <header class="container-fluid p-5 bg-primary text-white text-center">
        <h1>HAPPY BOOK STORE</h1>
    </header>

    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
                <ul class="dropdown-menu">
                    {{-- Category Dropdown Menu Dynamically Generated --}}
                    @foreach ($categories as $ct)
                        <li><a class="dropdown-item" href="{{ route('view.categories', $ct->id) }}">{{ $ct->category }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                {{-- Contact Link --}}
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>


    <footer class="page-footer fixed-bottom text-center py-3 mt-5 bg-primary text-white text-center">
        <small>&copy Jonathan Kristanto November 2021</small>
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
