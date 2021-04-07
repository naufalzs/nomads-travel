@extends('layouts.checkout-layout')

@section('title', 'Checkout')

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
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card Main -->
        <section class="section-checkout-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <!-- Card Checkout (Bagian Kiri) -->
                        <div class="card card-checkout p-4">
                            <h1 class="mt-4 mb-1">Who is Going</h1>
                            <p class="mb-4">Trip to Nusa Penida, Indonesia</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Nationality</th>
                                            <th>VISA</th>
                                            <th>Passport</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/frontend/images/avatar-1.png') }}" />
                                            </td>
                                            <td class="align-middle">Natalia</td>
                                            <td class="align-middle">NZ</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <img src="{{ asset('/frontend/images/ic_remove.png') }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/frontend/images/avatar-2.png') }}" />
                                            </td>
                                            <td class="align-middle">Edward</td>
                                            <td class="align-middle">US</td>
                                            <td class="align-middle">30 Days
                                            </td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <img src="{{ asset('/frontend/images/ic_remove.png') }}" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="add-member mt-3">
                                <h2 class="mb-3">Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" id="inputUsername"
                                        class="form-control mb-2 mr-sm-2" placeholder="Username" />

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="form-control costum-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" name="doePassport" id="doePassport"
                                            class="form-control datepicker" placeholder="DOE Passport" />
                                    </div>

                                    <button class="btn btn-primary btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                            </div>
                            <h3 class="mt-2 mb-1">Note</h3>
                            <p class="disclaimer mb-0">
                                Your are only able to invite member that has registered in
                                Nomads.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Card Checkout-Info (Bagian Kanan) -->
                        <card class="card card-checkout-info p-4">
                            <div class="card-checkout-info-content">
                                <h1 class="mb-3">Trip Information</h1>
                                <table width="100%" class="checkout-information">
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">2 persons</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional VISA</th>
                                        <td width="50%" class="text-right">$ 190,00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">$80,00 / person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">$ 280,00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+Unique Code)</th>
                                        <td width="50%" class="text-right total">
                                            $ 279,<span>33</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr />
                                <h1 class="mt-2">Payment Instruction</h1>
                                <p class="instruction-note">
                                    Please complete the payment before you continue the
                                    wonderful trip
                                </p>
                                <div class="bank">
                                    <div class="bank-item pb-3">
                                        <img src="{{ asset('/frontend/images/ic_bank.png') }}" class="bank-img" />
                                        <div class="description">
                                            <h3>PT Nomads ID</h3>
                                            <p>0881 8829 8800 <br />Bank Central Asia</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bank-item pb-3">
                                        <img src="{{ asset('/frontend/images/ic_bank.png') }}" class="bank-img" />
                                        <div class="description">
                                            <h3>PT Nomads ID</h3>
                                            <p>0899 8501 7888 <br />Bank HSBC</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </card>
                        <div class="btn-container">
                            <a href="{{ route('success') }}" class="btn btn-primary btn-payment">I Have Made Payment</a>
                        </div>
                        <div class="btn-cancel-container text-center">
                            <a href="{{ route('home') }}" class="btn-cancel">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('/frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ asset('/frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".datepicker").datepicker({
                uiLibrary: "bootstrap4",
                icons: {
                    rightIcon: '<img src="{{ asset('/frontend/images/ic_doe.png') }}">',
                },
            });
        });

    </script>
@endpush
