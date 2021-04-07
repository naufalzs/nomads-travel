@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <main>
        <section class="section-details-header"></section>

        <!-- Breadcrumb -->
        <section class="section-details-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card Main -->
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 p-lg-0">
                        <!-- Card Details (Bagian Kiri) -->
                        <div class="card card-details p-4">
                            <div class="card-details-content">
                                <h1>Nusa Penida</h1>
                                <p class="mb-4 location">Bali, Indonesia</p>
                                <div class="gallery">
                                    <div class="xzoom-container container-fluid">
                                        <img src="{{ asset('/frontend/images/pic 1.jpg') }}" class="xzoom img-fluid"
                                            id="main_image" xoriginal="{{ asset('/frontend/images/pic 1.jpg') }}" />
                                    </div>
                                    <div class="xzoom-thumbnails container-fluid">
                                        <a href="{{ asset('/frontend/images/pic 1.jpg') }}">
                                            <img src="{{ asset('/frontend/images/pic 1.jpg') }}"
                                                class="xzoom-gallery img-fluid first"
                                                xpreview="{{ asset('/frontend/images/pic 1.jpg') }}" width="150" /></a>
                                        <a href="{{ asset('/frontend/images/pic 2.jpg') }}">
                                            <img src="{{ asset('/frontend/images/pic 2.jpg') }}"
                                                class="xzoom-gallery img-fluid"
                                                xpreview="{{ asset('/frontend/images/pic 2.jpg') }}" width="150" /></a>
                                        <a href="{{ asset('/frontend/images/pic 3.jpg') }}">
                                            <img src="{{ asset('/frontend/images/pic 3.jpg') }}"
                                                class="xzoom-gallery img-fluid"
                                                xpreview="{{ asset('/frontend/images/pic 3.jpg') }}" width="150" /></a>
                                        <a href="{{ asset('/frontend/images/pic 4.jpg') }}">
                                            <img src="{{ asset('/frontend/images/pic 4.jpg') }}"
                                                class="xzoom-gallery img-fluid"
                                                xpreview="{{ asset('/frontend/images/pic 4.jpg') }}" width="150" /></a>
                                        <a href="{{ asset('/frontend/images/pic 5.jpg') }}">
                                            <img src="{{ asset('/frontend/images/pic 5.jpg') }}"
                                                class="xzoom-gallery img-fluid last"
                                                xpreview="{{ asset('/frontend/images/pic 5.jpg') }}" width="150" /></a>
                                    </div>
                                </div>
                                <h2>Tentang Wisata</h2>
                                <p>
                                    Nusa Penida is an island southeast of Indonesia's island
                                    Bali and a district of Klungkung Regency that includes the
                                    neighbouring small island of Nusa Lembongan. The Badung
                                    Strait separates the island and Bali. The interior of Nusa
                                    Penida is hilly with a maximum altitude of 524 metres. It is
                                    drier than the nearby island of Bali. There is very little
                                    tourist infrastructure
                                </p>
                                <p>
                                    Bali and a district of Klungkung Regency that includes the
                                    neighbouring small island of Nusa Lembongan. The Badung
                                    Strait separates the island and Bali
                                </p>
                                <div class="features row">
                                    <div class="col-md-4 border-right">
                                        <img src="{{ asset('/frontend/images/ic_event.png') }}" alt="Icon-Event"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Featured Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <img src="{{ asset('/frontend/images/ic_foods.png') }}" alt="Icon-Foods"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('/frontend/images/ic_language.png') }}" alt="Icon-Language"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Sate Lilit Ikan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Card-Trip-Info (Bagian Kanan) -->
                        <card class="card card-trip-info p-4">
                            <div class="card-trip-info-content">
                                <h1>Members are going</h1>
                                <div class="member-going">
                                    <img src="{{ asset('/frontend/images/member_1.png') }}" />
                                    <img src="{{ asset('/frontend/images/member_2.png') }}" />
                                    <img src="{{ asset('/frontend/images/member_3.png') }}" />
                                    <img src="{{ asset('/frontend/images/member_5.png') }}" />
                                </div>
                                <hr />
                                <h1 class="mb-3">Trip Information</h1>
                                <table width="100%" class="trip-information">
                                    <tr>
                                        <th width="50%">Date of Departure</th>
                                        <td width="50%" class="text-right">22 Aug 2021</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Duration</th>
                                        <td width="50%" class="text-right">4D 3N</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type of Trip</th>
                                        <td width="50%" class="text-right">Open Trip</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">$80,00 / person</td>
                                    </tr>
                                </table>
                            </div>
                        </card>
                        <div class="btn-container">
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('/frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ asset('/frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 455,
                zoomHeight: 455,
                defaultScale: 0.2,
                tint: "#333",
                Xoffset: 20,
            });
        });

    </script>
@endpush
