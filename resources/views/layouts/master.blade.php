<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaravelApp')</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f5f9;
        }

        .navbar {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 24px;
        }

        .nav-link {
            color: #fff !important;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: #dbeafe !important;
        }

        .btn-login {
            background-color: #fff;
            color: #0d6efd;
            font-weight: 500;
            border-radius: 20px;
            padding: 6px 16px;
        }

        .btn-login:hover {
            background-color: #e0e7ff;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">LaravelApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <!-- Left Menu -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pegawai') }}">Pegawai</a>
                    </li>
                </ul>

                <!-- Right Auth Buttons -->
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <span class="nav-link">Hi, admin</span>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-light btn-sm ms-2" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-login" href="#">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
