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
                            @error($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @enderror
                            <h1 class="mt-4 mb-1">Who is Going</h1>
                            <p class="mb-4">Trip to {{ $item->travel_package->title }} ,
                                {{ $item->travel_package->location }}</p>
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
                                        @forelse ($item->details as $detail)
                                            <tr>
                                                <td>
                                                    <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" />
                                                </td>
                                                <td class="align-middle">{{ $detail->username }}</td>
                                                <td class="align-middle">{{ $detail->nationality }}</td>
                                                <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                                <td class="align-middle">
                                                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('checkout-remove', $detail->id) }}">
                                                        <img src="{{ asset('/frontend/images/ic_remove.png') }}" />
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center"></td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <div class="add-member mt-3">
                                <h2 class="mb-3">Add Member</h2>
                                <form class="form-inline" method="post"
                                    action="{{ route('checkout-create', $item->id) }}">
                                    @csrf
                                    <label for="username" class="sr-only">Name</label>
                                    <input type="text" name="username" id="username" class="form-control mb-2 mr-sm-2"
                                        placeholder="Username" />

                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input type="text" name="nationality" id="nationality" class="form-control mb-2 mr-sm-2"
                                        placeholder="Nationality" required style="width:50px" />

                                    <label for="is_visa" class="sr-only">Visa</label>
                                    <select required name="is_visa" id="is_visa"
                                        class="form-control costum-select mb-2 mr-sm-2">
                                        <option value="" selected>VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>

                                    <label for="doe_passport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" name="doe_passport" id="doe_passport"
                                            class="form-control datepicker" placeholder="DOE Passport" />
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-add-now mb-2 px-4">
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
                                        <td width="50%" class="text-right">{{ $item->details->count() }} persons</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional VISA</th>
                                        <td width="50%" class="text-right">$ {{ $item->additional_visa }},00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">${{ $item->travel_package->price }},00 /
                                            person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">$ {{ $item->transaction_total }},00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+Unique Code)</th>
                                        <td width="50%" class="text-right total">
                                            $ {{ $item->transaction_total }},<span>{{ mt_rand(0, 99) }}</span>
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
                            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-primary btn-payment">I
                                Have Made Payment</a>
                        </div>
                        <div class="btn-cancel-container text-center">
                            <a href="{{ route('detail', $item->travel_package->slug) }}" class="btn-cancel">Cancel
                                Booking</a>
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
                format: 'yyyy-mm-dd',
                uiLibrary: "bootstrap4",
                icons: {
                    rightIcon: '<img src="{{ asset('/frontend/images/ic_doe.png') }}">',
                },
            });
        });
    </script>
@endpush
