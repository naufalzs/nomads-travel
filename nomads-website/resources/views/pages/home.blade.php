@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
    <!-- HEADER -->
    <header class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 mx-4">
                        Explore the Beautiful World as Easy One Click
                    </h1>
                    <p class="lead">
                        You will see beautiful <br />
                        moment that you never see before
                    </p>
                    <a href="{{ route('detail') }}" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <!-- Stats Panel -->
        <div class="container">
            <section class="row justify-content-center stats-panel" id="stats">
                <div class="col-6 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Section Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>
                            Something that you never try <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center d-flex flex-column card-travel card-1">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="mt-auto travel-button">
                                <a href="{{ route('detail') }}" class="btn btn-primary px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center d-flex flex-column card-travel card-2">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO</div>
                            <div class="mt-auto travel-button">
                                <a href="{{ route('detail') }}" class="btn btn-primary px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center d-flex flex-column card-travel card-3">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="mt-auto travel-button">
                                <a href="{{ route('detail') }}" class="btn btn-primary px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center d-flex flex-column card-travel card-4">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="mt-auto travel-button">
                                <a href="{{ route('detail') }}" class="btn btn-primary px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Networks -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-sm-left">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <img src="{{ asset('./frontend/images/logo_partners.png') }}" alt="Logo Partners"
                            class="img-partners img-fluid" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ asset('/frontend/images/testimonial-1.jpg') }}" alt="pic-testi-1"
                                    class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Christian Wozki</h3>
                                <p class="testimonial mb-4">
                                    "It was glorious and I could not stop to say wohoo for every
                                    single moment Dankeeeeee"
                                </p>
                                <hr />
                                <p class="trip-to mt-2">Trip to Ubud</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ asset('/frontend/images/testimonial-2.jpg') }}" alt="pic-testi-2"
                                    class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Natalia</h3>
                                <p class="testimonial mb-4">
                                    " The trip was amazing and I saw something beautiful in that
                                    Island that makes me want to learn more "
                                </p>
                                <hr />
                                <p class="trip-to mt-2">Trip Nusa Penida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ asset('/frontend/images/testimonial-3.jpg') }}" alt="pic-testi-3"
                                    class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Susan</h3>
                                <p class="testimonial mb-4">
                                    " I loved it when the waves was shaking harder - I was
                                    scared too "
                                </p>
                                <hr />
                                <p class="trip-to mt-2">Trip to Karimun Jawa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('detail') }}" class="btn btn-primary px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
