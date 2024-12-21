@extends('layout')
@section('content')
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-4 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center mb-10">
                <div class="col-md-6 col-lg-5">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h1>{{ $konfigurasi->title ??'Null'}}</h1>
                        <p>{{ $konfigurasi->description ??'Null' }}</p>
                    </div>


                    <!-- End Title & Description -->

                    <div class="d-grid d-sm-flex gap-3">
                        <a class="btn btn-primary btn-transition" href="{{ route('gridCourse')}}">Bergabung</a>
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
        <h2 class="h1">{{ $benefit->first()->title ??'null'}}</h2> <!-- Mengambil caption dari item pertama -->
        <p>{{ $benefit->first()->caption ??'null'}}</p> <!-- Mengambil caption dari item pertama -->
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

        <!-- Testimonials -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="text-center mb-5">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/illustrations/oc-person-1.svg"
                    alt="Illustration">
            </div>

            <!-- Blockquote -->
            <figure class="w-md-75 text-center mx-md-auto">
                <blockquote class="blockquote">“ Setiap langkah kecil menuju ilmu, itu udah langkah besar buat masa depan! dan Lihat hasilnya nanti, semua usaha kamu sekarang pasti bakal terbayar! ”</blockquote>

                <figcaption class="blockquote-footer text-center">
                    Team Intern
                    <span class="blockquote-footer-source">BidangIlmu | 2025</span>
                </figcaption>
            </figure>
            <!-- End Blockquote -->
        </div>
        <!-- End Testimonials -->

        <!-- Contacts -->
        <section id="contact">
            <div class="position-relative">
                <div class="bg-dark" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
                <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1">
                    <!-- Heading -->
                    <div class="w-lg-65 text-center mx-lg-auto mb-7">
                        <span class="text-cap text-white-70">Hubungi Kami</span>
                        <h2 class="text-white lh-base">Untuk mempermudah pengalaman Kamu, kami telah menyediakan Form yang bisa kamu isi atas pertanyaan yang ingin diajukan.<span
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
                                                <label class="form-label" for="hireUsFormFirstName">Nama Awal</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameFirstName" id="hireUsFormFirstName"
                                                    placeholder="Nama Awal" aria-label="First name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label class="form-label" for="hireUsFormLasttName">Nama Akhir</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameLastName" id="hireUsFormLasttName"
                                                    placeholder="Nama Akhir" aria-label="Last name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormWorkEmail">Alamat Email</label>
                                        <input type="email" class="form-control form-control-lg"
                                            name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail"
                                            placeholder="email@site.com" aria-label="email@site.com">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Form -->

                                    <!-- End Form -->

                                    <!-- Select -->

                                    <!-- End Select -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormDetails">Ajukan Pertanyaan</label>
                                        <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails"
                                        placeholder="...." aria-label="Tell us about your project" rows="4"></textarea>
                                    </div>
                                    <!-- End Form -->
                                    
                                    <!-- Check -->

                                    <!-- End Check -->

                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Kirim </button>
                                    </div>
                                    
                                    <div class="text-center">
                                        <span class="form-text">Kami akan Membalas 1 sampai 2 hari.</span>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </section>

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
