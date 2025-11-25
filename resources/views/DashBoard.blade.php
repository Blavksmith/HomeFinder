<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomeFinder</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/DashBoard.css') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Inter', sans-serif;">

    <!-- {{-- Navbar --}} -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                Home<span class="text-dark">Finder</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/properties') }}">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="{{ url('/login') }}" class="btn btn-outline-primary me-2">Sign In</a>
                    <a href="{{ url('/get-started') }}" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- {{-- Hero Section --}} -->
    <section class="text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-4">The easiest way to find<br><span class="text-primary">your perfect property</span></h1>

            <div class="d-flex justify-content-center gap-2">
                <input type="text" class="form-control w-auto" placeholder="📍 Batam, Pekanbaru, etc.">
                <input type="text" class="form-control w-auto" placeholder="🏠 Rent / Buy">
                <button class="btn btn-primary">🔍</button>
            </div>
        </div>
    </section>

    <!--Categories  -->
    <section class="container py-5 text-center">
        <div class="row g-3">
            @foreach (['Perumahan', 'Apartemen', 'Ruko', 'Gedung'] as $category)
                <div class="col-6 col-md-3">
                    <div class="border rounded-3 py-4 bg-primary-subtle fw-semibold">
                        {{ $category }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- { Recently Added }} -->
    <section class="container py-5">
        <h2 class="fw-bold mb-4">Recently Added</h2>

        <div class="row g-4">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="ratio ratio-4x3 bg-secondary-subtle rounded-top"></div>
                        <div class="card-body">
                            <h5 class="card-title">Jalan 1234, Jakarta Selatan</h5>
                            <p class="card-text text-muted">5 Kamar • 200 m²</p>
                            <div class="d-flex justify-content-between">
                                <span>👤 Agen</span>
                                <span class="fw-semibold text-primary">Rp. 3,25 M</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
