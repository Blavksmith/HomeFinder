@extends('layouts.Layout')

@section('navbar')
    @include('components.Navbar')
@endsection

@section('content')
    {{-- HERO SECTION --}}
    <section class="py-5 bg-light border-bottom">
        <div class="container text-center">

            <h1 class="fw-bold display-5 mb-3">
                The easiest way to find <br>
                <span class="text-primary">your perfect property</span>
            </h1>

            <p class="text-muted mb-5">
                Discover trusted properties and make confident decisions with ease.
            </p>

            <div class="row justify-content-center mt-5 text-muted">
                <div class="col-md-3">✔ Verified Listings</div>
                <div class="col-md-3">✔ Secure Transactions</div>
                <div class="col-md-3">✔ Professional Support</div>
            </div>


        </div>
    </section>




    {{-- CATEGORIES --}}
    <section class="container py-5">
        <h2 class="fw-bold text-center mb-4">Browse Categories</h2>

        <div class="row g-4 text-center">
            @foreach (['Housing', 'Apartment', 'Shop House', 'Building'] as $category)
                <div class="col-6 col-md-3">
                    <div class="p-4 rounded-4 border bg-white shadow-sm hover-shadow transition" style="cursor:pointer;">
                        <div class="fs-4 fw-bold text-primary mb-2">
                            {{ $category }}
                        </div>
                        <small class="text-muted">Find your property</small>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    {{-- RECENTLY ADDED --}}
    <section class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Recently Added</h2>
            <div class="d-flex justify-content-center align-items-center gap-2">
                <a href="{{ route('properties.list') }}" class="text-decoration-none fw-semibold">See all →</a>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($property as $prop)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <a href="{{ route('property.show', $prop) }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">

                            {{-- Photo --}}
                            <div class="ratio ratio-4x3">
                                <img src="{{ $prop->photo }}" class="w-100 h-100 object-fit-cover"
                                    alt="Property {{ $prop->city }}">
                            </div>

                            {{-- Card Body --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-dark mb-1">{{ $prop->city }}, {{ $prop->country }}</h5>

                                <p class="text-muted small mb-2">
                                    🛏 {{ number_format($prop->bed_room, 0) }} Beds ·
                                    🛁 {{ number_format($prop->bath_room, 0) }} Baths ·
                                    📐 {{ number_format($prop->area_l * $prop->area_w, 0, ',', '.') }} m²
                                </p>

                                <div class="d-flex justify-content-between align-items-center pt-2">
                                    <span class="small text-secondary">👤 Agent</span>
                                    <span class="fw-bold text-primary">
                                        Rp {{ number_format($prop->price / 1000000, 0, ',', '.') }} Juta
                                    </span>
                                </div>
                            </div>

                        </div>
                    </a>

                </div>
            @endforeach
        </div>

    </section>
@endsection
