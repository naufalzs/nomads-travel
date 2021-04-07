@extends('layouts.success-layout')

@section('title', 'Success')

@section('content')
    <main>
        <!-- Card Main -->
        <section class="section-success-content">
            <div class="container text-center">
                <img src="{{ asset('/frontend/images/ic_mail.png') }}" class="img-success" />
                <h1 class="mt-3">Yay! Success</h1>
                <p>
                    We've sent you email for trip Instruction <br />
                    please read it as well
                </p>
                <a href="{{ route('home') }}" class="btn btn-primary btn-backhome">Homepage</a>
            </div>
        </section>
    </main>
@endsection
