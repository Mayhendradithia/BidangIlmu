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
                       
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-5 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('/storage/' . $konfigurasi->image) }}" alt="Image Description">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

         <!-- Mitra -->
<!-- Mitra -->
<div class="js-swiper-hero-clients swiper text-center mb-10">
    <div class="swiper-wrapper">
        <!-- Looping semua data mitra -->
        @foreach ($mitra as $mitras)
            <div class="swiper-slide text-center">
                <img src="{{ asset('storage/' . $mitras->image) }}" alt="Logo" class="img-fluid"
                    style="max-width: 70px; max-height: 80px;">
            </div>
        @endforeach
    </div>
</div>
<!-- End Swiper Slider -->

<!-- Memberikan sedikit space di sini -->
<div id="featuresSection" class="container content-space-t-2 content-space-b-md-2 content-space-lg-3 mt-2   "> <!-- Menggunakan mt-3 untuk memberi space -->
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
                    <div class="card-body text-center"> <!-- Tambahkan text-center -->
                        <span class="svg-icon text-primary mb-7 d-block">
                            <img src="{{ asset('storage/' . $benefits->icon) }}" alt="icon" width="50" height="45   ">
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
                <blockquote class="blockquote">“ Setiap langkah kecil menuju ilmu, itu suatu langkah besar buat masa depan! dan Lihat hasilnya nanti, semua usaha kamu sekarang pasti bakal terbayar! ”</blockquote>

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
                                class="text-warning">Ayo Berbincang</span></h2>
                    </div>
                    <!-- End Heading -->

                    <div class="mx-auto" style="max-width: 35rem;">
                        <!-- Card -->
                        <div class="card zi-2">
                            <div class="card-body">
                                <!-- Form -->
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="form-label" for="firstName">Nama Awal</label>
                                                <input type="text" class="form-control form-control-lg" id="firstName" placeholder="Nama Awal">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="form-label" for="lastName">Nama Akhir</label>
                                                <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Nama Akhir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Alamat Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" placeholder="email@site.com">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="phone">Nomor</label>
                                        <input type="text" class="form-control form-control-lg" id="phone" placeholder="Nomor Telepon">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="message">Ajukan Pertanyaan</label>
                                        <textarea class="form-control form-control-lg" id="message" placeholder="...." rows="4"></textarea>
                                    </div>
                                    <div class="d-grid mb-2">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="sendWhatsApp()">Kirim</button>
                                    </div>
                                </form>
                                
                                <script>
                                    function sendWhatsApp() {
                                        // Ambil nilai dari form
                                        const firstName = document.getElementById('firstName').value;
                                        const lastName = document.getElementById('lastName').value;
                                        const email = document.getElementById('email').value;
                                        const phone = document.getElementById('phone').value;
                                        const message = document.getElementById('message').value;
                                
                                        // Buat URL WhatsApp
                                        const whatsappNumber = '628111081771'; // Ganti dengan nomor WhatsApp tujuan
                                        const whatsappURL = `https://wa.me/628111081771?text=Hallo%20admin%2CBidangIlmu%2C%20saya%20ingin%20mengajukan%20pertanyaan.
` +
                                            encodeURIComponent(`Halo, saya ${firstName} ${lastName},\n` +
                                            `Email: ${email}\n` +
                                            `Pesan: ${message}`);
                                
                                        // Buka WhatsApp di tab baru
                                        window.open(whatsappURL, '_blank');
                                    }
                                </script>
                                
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </section>

            <!-- Shape -->
            <div class="shape shape-bottom">
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
