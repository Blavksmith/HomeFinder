@extends('layouts.Layout')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<main class="container py-5">

    <!-- ================= PROPERTY HEADER ================= -->
    <div class="row g-4 align-items-start mb-5">

        <!-- IMAGE -->
        <div class="col-lg-6">
            <img
                src="{{ $property->photo ?? 'https://via.placeholder.com/800x500' }}"
                class="img-fluid rounded-3 shadow-sm w-100"
                alt="{{ $property->title }}">
        </div>

        <!-- RIGHT INFO -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <!-- PRICE -->
                    <h2 class="text-primary fw-bold mb-1">
                        Rp {{ number_format($property->price, 0, ',', '.') }}
                    </h2>

                    <!-- BED & BATH -->
                    <p class="text-muted mb-2">
                        {{ $property->bed_room }} Bedroom • {{ $property->bath_room }} Bathroom
                    </p>

                    <!-- TITLE & LOCATION -->
                    <p class="fw-semibold mb-4">
                        {{ $property->title }} <br>
                        <span class="text-muted fs-6">
                            {{ $property->city }}, {{ $property->country }}
                        </span>
                    </p>

                    <!-- KEY FEATURES -->
                    <div class="row g-3 mb-4 text-center">
                        <div class="col-4">
                            <div class="border rounded-3 py-3">
                                <div class="fw-semibold">{{ $property->area_total }} m²</div>
                                <small class="text-muted">Total Area</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="border rounded-3 py-3">
                                <div class="fw-semibold">{{ $property->bed_room }}</div>
                                <small class="text-muted">Bedrooms</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="border rounded-3 py-3">
                                <div class="fw-semibold">{{ $property->bath_room }}</div>
                                <small class="text-muted">Bathrooms</small>
                            </div>
                        </div>
                    </div>

                    <!-- IMAGE BUTTONS -->
                    <div class="row g-2 mb-4">
                        @foreach(['Tampak Depan', 'Tampak Belakang', 'Samping Kiri', 'Samping Kanan'] as $btn)
                        <div class="col-6">
                            <button class="btn btn-outline-secondary w-100">
                                {{ $btn }}
                            </button>
                        </div>
                        @endforeach
                    </div>

                    <!-- ACTION BUTTONS -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary fw-semibold">
                            Purchase this Property
                        </button>
                        <button class="btn btn-light fw-semibold">
                            Request Info
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- ================= SUMMARY ================= -->
    <section class="mb-5">
        <h3 class="fw-semibold mb-3">Summary</h3>
        <p class="text-secondary lh-lg">
            {{ $property->summary }}
        </p>
    </section>

    <!-- ================= HIGHLIGHTS ================= -->
    <section class="mb-5">
        <h4 class="fw-semibold mb-3">Property Highlights</h4>
        <div class="row g-3 text-muted">
            <div class="col-md-4">✔ Strategis & akses mudah</div>
            <div class="col-md-4">✔ Lingkungan aman & nyaman</div>
            <div class="col-md-4">✔ Cocok untuk keluarga</div>
            <div class="col-md-4">✔ Dekat pusat kota</div>
            <div class="col-md-4">✔ Nilai investasi tinggi</div>
            <div class="col-md-4">✔ Bebas banjir</div>
        </div>
    </section>

    <!-- ================= PROPERTY INFO ================= -->
    <section class="row g-4 mb-5">

        <div class="col-md-3 col-sm-6">
            <div class="card text-center h-100">
                <div class="card-body">
                    <p class="text-muted mb-1">Dimensi</p>
                    <h5 class="fw-semibold">
                        {{ $property->area_l }}m × {{ $property->area_w }}m
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center h-100">
                <div class="card-body">
                    <p class="text-muted mb-1">Luas Total</p>
                    <h5 class="fw-semibold">
                        {{ $property->area_total }} m²
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center h-100">
                <div class="card-body">
                    <p class="text-muted mb-1">Rating</p>
                    <h5 class="fw-semibold">
                        {{ rand(40,49) / 10 }} ⭐
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center h-100">
                <div class="card-body">
                    <p class="text-muted mb-1">Bedrooms</p>
                    <h5 class="fw-semibold">{{ $property->bed_room }}</h5>
                </div>
            </div>
        </div>

    </section>

    <!-- ================= LOCATION ================= -->
    <section class="mb-5">
        <h4 class="fw-semibold mb-3">Location</h4>

        <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
            <iframe
                src="https://maps.google.com/maps?q={{ urlencode($property->city) }}&z=13&output=embed"
                loading="lazy">
            </iframe>
        </div>
    </section>

</main>

@endsection
