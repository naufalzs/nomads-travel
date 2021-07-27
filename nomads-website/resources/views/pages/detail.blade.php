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
                                <h1>{{ $item->title }}</h1>
                                <p class="mb-4 location">{{ $item->location }}</p>
                                @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container container-fluid">
                                        <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom img-fluid"
                                            id="main_image" xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
                                    </div>
                                    <div class="xzoom-thumbnails container-fluid">
                                        @foreach($item->galleries as $gallery)
                                        <a href="{{ Storage::url($gallery->image) }}">
                                            <img src="{{ Storage::url($gallery->image) }}"
                                                class="xzoom-gallery img-fluid first"
                                                xpreview="{{ Storage::url($gallery->image) }}" width="150" /></a>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                <h2>Tentang Wisata</h2>
                                <p>
                                    {{ $item->about }}
                                </p>
                                <div class="features row">
                                    <div class="col-md-4 border-right">
                                        <img src="{{ asset('/frontend/images/ic_event.png') }}" alt="Icon-Event"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Featured Event</h3>
                                            <p>{{ $item->featured_event }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <img src="{{ asset('/frontend/images/ic_foods.png') }}" alt="Icon-Foods"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>{{ $item->language }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('/frontend/images/ic_language.png') }}" alt="Icon-Language"
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>{{ $item->foods }}</p>
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
                                        <td width="50%" class="text-right">{{\Carbon\Carbon::create($item->departure_date)->format('F n, Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Duration</th>
                                        <td width="50%" class="text-right">{{ $item->duration }}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type of Trip</th>
                                        <td width="50%" class="text-right">{{ $item->type }}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">${{ $item->price }},00 / person</td>
                                    </tr>
                                </table>
                            </div>
                        </card>
                        @auth
                        <form action="{{ route('checkout-process',$item->id) }}" method="POST">
                            @csrf
                            <div class="btn-container">
                                <button type="submit" class="btn btn-primary btn-join">Join Now</button>
                            </div> 
                        </form>
                        @endauth
                        @guest
                        <div class="btn-container">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-join">Login or Register to Join</a>
                        </div>  
                        @endguest
                        
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
