@extends('layout')
@section('content')
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-4 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center mb-10">
                <div class="col-md-6 col-lg-5">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h1>{{ $konfigurasi->title }}</h1>
                        <p>{{ $konfigurasi->description }}</p>
                    </div>


                    <!-- End Title & Description -->

                    <div class="d-grid d-sm-flex gap-3">
                        <a class="btn btn-primary btn-transition" href="{{ route('gridCourse') }}">Bergabung</a>
                        <a class="btn btn-link" href="{{ route('about') }}">Let's Talk <i class="bi-chevron-right small ms-1"></i></a>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-6 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('/storage/' . $konfigurasi->image) }}" alt="Image Description">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

         <!-- Mitra -->
<!-- Mitra -->
<div class="js-swiper-hero-clients swiper text-center">
    <div class="swiper-wrapper">
        <!-- Looping semua data mitra -->
        @foreach ($mitra as $mitras)
            <div class="swiper-slide text-center">
                <img src="{{ asset('storage/' . $mitras->image) }}" alt="Logo" class="img-fluid"
                    style="max-width: 100px; max-height: 100px;">
            </div>
        @endforeach
    </div>
</div>
<!-- End Swiper Slider -->

<!-- Memberikan sedikit space di sini -->
<div id="featuresSection" class="container content-space-t-2 content-space-b-md-2 content-space-lg-3 mt-3"> <!-- Menggunakan mt-3 untuk memberi space -->
    <!-- Heading -->
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">{{ $benefit->first()->title }}</h2> <!-- Mengambil caption dari item pertama -->
        <p>{{ $benefit->first()->caption }}</p> <!-- Mengambil caption dari item pertama -->
    </div>
    <!-- End Heading -->

    <div class="row gx-3">
        @foreach ($benefit as $benefits)
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0"> <!-- Setiap kartu dalam kolom -->
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="{{ route('about') }}">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3 d-block text-start">
                            <img src="{{ asset('storage/' . $benefits->icon) }}" alt="icon" width="64" height="64" class="me-2">
                        </span>
                        <h4 class="card-title">{{ $benefits->title_benefit }}</h4>
                        <p class="card-text text-body">{{ $benefits->description }}</p>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        @endforeach
    </div>
</div>
<!-- End Row -->

<!-- End Row -->

            <!-- Browser Device -->
          
       
        <!-- End Feature Nav -->

        <!-- Features Nav -->
        
        <!-- End Features Nav -->

        <!-- Icon Blocks -->

        <!-- End Icon Blocks -->

        <!-- Testimonials -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="text-center mb-5">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/illustrations/oc-person-1.svg"
                    alt="Illustration">
            </div>

            <!-- Blockquote -->
            <figure class="w-md-75 text-center mx-md-auto">
                <blockquote class="blockquote">“ I just wanted to say that I'm very happy with my purchase of Front so far.
                    The documentation is outstanding - clear and detailed. ”</blockquote>

                <figcaption class="blockquote-footer text-center">
                    Christina
                    <span class="blockquote-footer-source">Product Manager | Mailchimp</span>
                </figcaption>
            </figure>
            <!-- End Blockquote -->
        </div>
        <!-- End Testimonials -->

        <!-- Contacts -->
        <div class="position-relative">
            <div class="bg-dark" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
                <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1">
                    <!-- Heading -->
                    <div class="w-lg-50 text-center mx-lg-auto mb-7">
                        <span class="text-cap text-white-70">Contact us</span>
                        <h2 class="text-white lh-base">We collaborate with ambitious brands and people. <span
                                class="text-warning">Let's chat.</span></h2>
                    </div>
                    <!-- End Heading -->

                    <div class="mx-auto" style="max-width: 35rem;">
                        <!-- Card -->
                        <div class="card zi-2">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label class="form-label" for="hireUsFormFirstName">First name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameFirstName" id="hireUsFormFirstName"
                                                    placeholder="First name" aria-label="First name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label class="form-label" for="hireUsFormLasttName">Last name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameLastName" id="hireUsFormLasttName"
                                                    placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                                        <input type="email" class="form-control form-control-lg"
                                            name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail"
                                            placeholder="email@site.com" aria-label="email@site.com">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormCompanyName">Company name <span
                                                class="form-label-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control form-control-lg"
                                            name="hireUsFormNameCompanyName" id="hireUsFormCompanyName"
                                            placeholder="Htmlstream" aria-label="Htmlstream">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Select -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormBudget">Budget</label>
                                        <select id="hireUsFormBudget" class="form-select form-select-lg"
                                            name="hireUsFormNameBudget" aria-label="Tell us about your budget">
                                            <option selected>Tell us about your budget</option>
                                            <option value="1">$1,000 - $10,000</option>
                                            <option value="2">$10,000 - $20,000</option>
                                            <option value="3">$20,000 - $30,000</option>
                                            <option value="4">$30,000 - $40,000</option>
                                            <option value="5">$40,000 - $50,000</option>
                                            <option value="6">$50,000 - and more</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormDetails">Details</label>
                                        <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails"
                                            placeholder="Tell us about your project" aria-label="Tell us about your project" rows="4"></textarea>
                                    </div>
                                    <!-- End Form -->

                                    <!-- Check -->
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="signupFormPrivacyCheck"
                                            name="signupFormPrivacyCheck" required
                                            data-msg="Please accept our Privacy Policy.">
                                        <label class="form-check-label" for="signupFormPrivacyCheck"> By submitting this
                                            form I have read and acknowledged the <a href=page-privacy.html>Privacy
                                                Policy</a></label>
                                    </div>
                                    <!-- End Check -->

                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                                    </div>

                                    <div class="text-center">
                                        <span class="form-text">We'll get back to you in 1-2 business days.</span>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>

            <!-- Shape -->
            <div class="shape shape-bottom zi-1">
                <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 500H3000V0L0 500Z" fill="#fff" />
                </svg>
            </div>
            <!-- End Shape -->
        </div>
        <!-- End Contacts -->
    </main>
@endsection
