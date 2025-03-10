<body>
    <!-- ========== HEADER ========== -->
    @extends('layout')
    @section('content')

        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- Hero -->
            <div class="bg-gradient-light py-5" style="background: linear-gradient(to right, #f8f9fa, #ffffff);">
                <div class="container content-space-2">
                    <div class="row justify-content-lg-between align-items-md-center">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <div class="mb-4">
                                <h1
                                    style="font-size: 3.5rem; font-weight: 600; color: #2c3e50; letter-spacing: -0.3px; line-height: 1.3;">
                                    Mau belajar apa
                                    <span style="color: #3498db;">hari ini?</span>
                                </h1>
                                <div class="text-content mt-4">

                                    <p
                                        style="color: #5f6c7b; font-size: 1rem; font-weight: 300; letter-spacing: 0.3px; line-height: 1.6;">
                                        Banyak pilihan Kategori yang bisa kamu pilih sesuai dengan minat dan kebutuhanmu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-md-5">
                            <img class="img-fluid" src="../assets/svg/illustrations/oc-looking-for-answers.svg"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Hero -->

            <!-- Card Grid -->
            <div class="container content-space-sm-2">
                <!-- Title -->

                <!-- End Title -->

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
                    @foreach ($materi as $item)
                        <div class="col mb-5">
                            <div class="card card-bordered h-100">
                                <div class="card-pinned">
                                    <img class="card-img-top"
                                        src="{{ $item->image_url ?? '../assets/svg/components/card-15.svg' }}"
                                        alt="{{ $item->title }}">
                                </div>
                                <div class="card-body">
                                    <small class="card-subtitle">{{ $item->kategori->nama ?? 'Belum Maintenance' }}</small>
                                    <div class="mb-3">
                                        <h3 class="card-title">
                                            <a class="text-dark">{{ $item->title ?? 'Belum Maintenance' }}</a>
                                        </h3>
                                        <!-- Tambahkan teks Premium atau Gratis -->
                                        @if (!empty($item->password))
                                        <p class="text-muted">
                                            <i class="bi bi-lock"></i> Premium
                                        </p>
                                    @else
                                        <p class="text-success">
                                            <i class="bi bi-unlock"></i> Gratis
                                        </p>
                                    @endif
                                    
                                    
                                    

                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <div class="d-flex justify-content-between align-items-center float-end">
                                        @auth
                                            @if ($item->password)
                                                <!-- Jika materi berbayar, periksa password dan arahkan ke form pembayaran -->
                                                <a class="btn btn-primary btn-sm btn-transition"
                                                   href="{{ route('premium.show', ['id' => $item->id]) }}">
                                                   Akses Materi
                                                </a>
                                            @else
                                                <!-- Jika materi gratis, langsung ke course overview -->
                                                <a class="btn btn-primary btn-sm btn-transition"
                                                   href="{{ route('materi.free', ['id' => $item->id]) }}">
                                                   Akses Materi
                                                </a>
                                            @endif
                                        @else
                                            <!-- Jika belum login, arahkan ke form login -->
                                            <a class="btn btn-primary btn-sm btn-transition"
                                               href="{{ route('showLoginForm') }}">Selengkapnya</a>
                                        @endauth
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- End Row -->
            </div>

            <!-- End Card Grid -->

            <!-- Lists -->

            <!-- List -->
            <div class="overflow-hidden content-space-2">
                <div class="position-relative bg-light text-center rounded-2 zi-2 mx-3 mx-md-10">
                    <div class="container content-space-2">
                        <div class="text-center mb-5">
                            <img class="avatar avatar-lg avatar-4x3" src="assets/svg/illustrations/oc-person-1.svg"
                                alt="Illustration">
                        </div>

                        <!-- Blockquote -->
                        <figure class="w-md-75 text-center mx-md-auto">
                            <blockquote class="blockquote">“ Setiap langkah kecil menuju ilmu, itu suatu langkah besar buat
                                masa depan! dan Lihat hasilnya nanti, semua usaha kamu sekarang pasti bakal terbayar! ”
                            </blockquote>

                            <figcaption class="blockquote-footer text-center">
                                Team Intern
                                <span class="blockquote-footer-source">BidangIlmu | 2025</span>
                            </figcaption>
                        </figure>
                        <!-- End Blockquote -->
                    </div>

                    <!-- SVG Shape -->
                    <figure class="position-absolute top-0 start-0 mt-10 ms-10">
                        <svg width="70" height="70" viewBox="0 0 200 200" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z"
                                stroke="#97a4af" stroke-width="5" stroke-miterlimit="10" />
                            <path
                                d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z"
                                stroke="#97a4af" stroke-width="5" stroke-miterlimit="10" />
                        </svg>
                    </figure>
                    <!-- End SVG Shape -->

                    <!-- SVG Shape -->
                    <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
                        <img class="img-fluid" src="../assets/svg/components/dots.svg" alt="Image Description">
                    </figure>
                    <!-- End SVG Shape -->
                </div>
            </div>
            </div>
            <!-- End Row -->
            </div>
            <!-- End Lists -->
        </main>


        <!-- Go To -->
        <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
            data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
            <i class="bi-chevron-up"></i>
        </a>
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- JS Implementing Plugins -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- JS Front -->
        <script src="../assets/js/theme.min.js"></script>

        <!-- JS Plugins Init. -->
        <script>
            (function() {
                // INITIALIZATION OF MEGA MENU
                // =======================================================
                new HSMegaMenu('.js-mega-menu', {
                    desktop: {
                        position: 'left'
                    }
                })


                // INITIALIZATION OF SHOW ANIMATIONS
                // =======================================================
                new HSShowAnimation('.js-animation-link')


                // INITIALIZATION OF BOOTSTRAP VALIDATION
                // =======================================================
                HSBsValidation.init('.js-validate', {
                    onSubmit: data => {
                        data.event.preventDefault()
                        alert('Submited')
                    }
                })


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF GO TO
                // =======================================================
                new HSGoTo('.js-go-to')
            })()
        </script>
    </body>

    <!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:12:04 GMT -->

    </html>
