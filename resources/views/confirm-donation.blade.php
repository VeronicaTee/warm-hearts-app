@extends('main.layout')

@section('content')

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('confirm-form') }}" method="post" role="form">
                            @csrf
                            <h3 class="mb-4">Confirm Donation</h3>

                            <div class="row">


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Enter your transaction id</h5>
                                </div>

                                <div class="col-lg-6 col-12 form-check-group">
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="amount" placeholder="Enter transaction id"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-12 mt-2">

                                    <button type="submit" class="form-control mt-4">Confirm Payment</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

@endsection
