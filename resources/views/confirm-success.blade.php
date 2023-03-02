@extends('main.layout')

@section('content')

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('home') }}" method="get" role="form">
                            @csrf
                            <h3 class="mb-4">Donation Confirmation</h3>

                            <div class="row">


                                <div class="col-lg-12 col-12">
                                    <span class="pt-1 ps-2">{{ $report }}</span>
                                    <h5 class="mt-2 mb-3"></h5>
                                </div>



                                <div class="col-lg-12 col-12 mt-2">


                                    <button type="submit" class="form-control mt-4">Donation Completed</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

@endsection
