@extends('main.layout')

@section('content')

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('home') }}" method="get" role="form">
                            @csrf
                            <h3 class="mb-4">Thank you</h3>

                            <div class="row">




                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Bitcoin Address</h5>
                                </div>

                                <div class="col-lg-12 col-12 form-check-group">
                                    <div class="input-group">

                                        <span class="pt-1 ps-2">{{ $address }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <span class="pt-1 ps-2"><p>Please save the transaction ID generated after payment, you can use it to confirm the status of your payment.<p></span>

                                </div>

                                <div class="col-lg-12 col-12 mt-2">

                                    <div class="col-lg-12 col-12">
                                        <h6>All done? Would you like to confirm payment status? <a href=" {{ route('confirm') }} ">confirm</a></h6>
                                    </div>

                                    <button type="submit" class="form-control mt-4">Donation Complete</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

@endsection
