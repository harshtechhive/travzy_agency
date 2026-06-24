@extends('layouts.app')

@section('title', 'Home - ' . config('app.name', 'Travzy'))

@push('styles')
    @vite('resources/scss/homepage.scss')
@endpush

@section('content')
    <div class="homepage">
        <section class="hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="display-4 mb-3">Explore the world with Travzy</h1>
                        <p class="lead mb-4">
                            Plan unforgettable journeys, discover hidden gems, and book your next trip with confidence.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-primary btn-lg">
                                <i class="bi bi-compass me-2"></i>Start Exploring
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="bi bi-play-circle me-2"></i>How It Works
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block text-center">
                        <i class="bi bi-globe-americas text-primary" style="font-size: 10rem; opacity: 0.15;"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Why travel with us</h2>
                    <p class="text-secondary mb-0">Everything you need for a smooth travel experience</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-card card p-4">
                            <span class="feature-icon mb-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </span>
                            <h5 class="fw-semibold">Curated Destinations</h5>
                            <p class="text-secondary mb-0">Hand-picked locations tailored to every type of traveler.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card card p-4">
                            <span class="feature-icon mb-3">
                                <i class="bi bi-shield-check"></i>
                            </span>
                            <h5 class="fw-semibold">Secure Booking</h5>
                            <p class="text-secondary mb-0">Safe payments and reliable support from start to finish.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card card p-4">
                            <span class="feature-icon mb-3">
                                <i class="bi bi-headset"></i>
                            </span>
                            <h5 class="fw-semibold">24/7 Support</h5>
                            <p class="text-secondary mb-0">Our team is here whenever you need help on your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container">
                <div class="cta-section text-center px-4">
                    <h2 class="fw-bold mb-3">Ready for your next adventure?</h2>
                    <p class="text-secondary mb-4">Join thousands of travelers who plan smarter with Travzy.</p>
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="bi bi-suitcase-lg-fill me-2"></i>Plan Your Trip
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
