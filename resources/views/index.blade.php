@extends('main.layout')

@section('content')

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <img src="/images/slide/volunteer-helping-with-donation-box.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">

                                        <h1>Warm Hearts</h1>

                                        <p>Empower their future, one donation at a time.</p>
                                    </div>
                            </div>

                            <div class="carousel-item">
                                <img src="/images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Non-profit</h1>

                                        <p>Heal the world, one child at a time.</p>
                                    </div>
                            </div>

                            <div class="carousel-item">
                                <img src="/images/slide/medium-shot-people-collecting-donations.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Give hope to a child in need.</p>
                                    </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Welcome Warm Hearts Charity</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.blade.php" class="d-block">
                            <img src="/images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.blade.php" class="d-block">
                            <img src="/images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.blade.php" class="d-block">
                            <img src="/images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Make a <strong>Donation</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.blade.php" class="d-block">
                            <img src="/images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="images/group-people-volunteering-foodbank-poor-people.jpg"
                        class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Our Story</h2>

                        <h5 class="mb-3">Warm Hearts Charity, Non-Profit Organization</h5>

                        <p class="mb-0">Warm Hearts is a non-profit organization that is dedicated to improving the lives of underprivileged children through education and empowerment programs. We believes every child deserves the chance to thrive, regardless of their circumstances.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>Our mission at Warm Hearts is to empower underprivileged children through education, advocacy, and community engagement. We believe that by providing access to resources and support, we can help to build brighter futures and stronger communities.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <h2>2023</h2>
                                    </div>

                                    <span class="counter-text">Founded</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">

                                        <span class="counter-number" data-from="1" data-to="{{ $balance }}" data-speed="1000"></span>
                                        <span class="counter-number-text">sats</span>
                                    </div>

                                    <span class="counter-text">Donations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                        class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Veronica Emiola</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                        <p>An individual who is passionate about empowering underprivileged children. Having seen firsthand the challenges faced by underprivileged children, she has a strong desire to make a difference in the lives of these children and to help create a more equitable society.</p>

                        <p>She is passionate about this particular cause and feel compelled to take action to address it.</p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">

                    <a href="#section_4" class="custom-btn btn smoothscroll">Make a donation</a>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Our Causes</h2>
                </div>

                @foreach($causes as $cause)
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="images/causes/group-african-kids-paying-attention-class.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">{{ $cause['name'] }}</h5>

                                <p>{{ $cause['description'] }}</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $18,500
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        {{ $cause['goal'] }}
                                    </p>
                                </div>
                            </div>

                            <a href=" {{ route('donate') }} " class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="text-white mb-4">Volunteer</h2>

                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                        <h3 class="mb-4">Become a volunteer today</h3>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                    placeholder="Jack Doe" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="volunteer-email" id="volunteer-email"
                                    pattern="[^ @]@[^ @]" class="form-control" placeholder="Jackdoe@gmail.com"
                                    required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-subject" id="volunteer-subject"
                                    class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="input-group input-group-file">
                                    <input type="file" class="form-control" id="inputGroupFile02">

                                    <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                    <i class="bi-cloud-arrow-up ms-auto"></i>
                                </div>
                            </div>
                        </div>

                        <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                            placeholder="Comment (Optional)"></textarea>

                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                        class="volunteer-image img-fluid" alt="">

                    <div class="custom-block-body text-center">
                        <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                        <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                            tokito Professional charity theme based</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

