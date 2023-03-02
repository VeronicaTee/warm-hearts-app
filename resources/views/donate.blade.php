@extends('main.layout')

@section('content')

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('donate-form') }}" method="post" role="form">
                            @csrf
                            <h3 class="mb-4">Make a donation</h3>

                            <div class="row">


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Enter donation amount (in satoshis)</h5>
                                </div>

                                <div class="col-lg-6 col-12 form-check-group">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">&#8383</span>

                                        <input type="text" class="form-control" name="amount" placeholder="Enter amount"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Select Cause</h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Children Education
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Disaster Relief
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Orphans Support
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Personal Info</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="donation-name" id="donation-name" class="form-control"
                                        placeholder="Jack Doe" required>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="donation-email" id="donation-email"
                                        pattern="[^ @]@[^ @]" class="form-control" placeholder="Jackdoe@gmail.com">
                                </div>



                                <div class="col-lg-12 col-12 mt-2">

                                    <button type="submit" class="form-control mt-4">Pay with Bitcoin</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

@endsection
