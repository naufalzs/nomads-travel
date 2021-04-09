<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('/frontend/images/logo_nomads.png') }}" alt="logo NOMADS" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigasi">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item mx-md-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navigasi" data-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Passport</a>
                        <a href="#" class="dropdown-item">Visa</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>

            @guest
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('/login') }}';">Masuk</button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('/login') }}';">
                        Masuk
                    </button>
                </form>
            @endguest

            @auth
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Logout</button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</div>
