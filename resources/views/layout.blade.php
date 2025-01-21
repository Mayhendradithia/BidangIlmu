<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Belajar atau Kursus Semakin Mudah Bersama BidangIlmu</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/BrandLogo.svg') }}" type="image/x-icon">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.minc619.css?v=1.0') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fslightbox@3.4.0/dist/index.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
        data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
        <!-- Topbar -->
        <div class="container navbar-topbar">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Toggler -->
                <!-- End Toggler -->
            </nav>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Default Logo -->
                <a class="navbar-brand" href="{{ route('index') }}" aria-label="Front">
                    <img class="navbar-brand-logo mt-2" src="{{ asset('assets/img/logo/BrandLogo.svg') }}"
                        alt="Logo">
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-absolute-top-scroller">
                        <ul class="navbar-nav">
                            <!-- Home -->
                            <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link toggle"
                                href="{{ route('index') }}" role="button" aria-expanded="false"
                                style="min-width: 6rem;">Beranda</a>
                            <!-- End Home -->

                            <li class="hs-has-mega-menu nav-item">
                                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle"
                                    href="#" role="button" aria-expanded="false">Ruang Belajar</a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="landingsMegaMenu"
                                    style="min-width: 30rem;">
                                    <div class="row">
                                        <div class="col-lg-6 d-none d-lg-block">
                                            <!-- Banner Image -->
                                            <div class="navbar-dropdown-menu-banner"
                                                style="background-image: url({{ asset('assets/svg/components/shape-3.svg') }});">
                                                <div class="navbar-dropdown-menu-banner-content">
                                                    <div class="mb-4">
                                                        <span class="h2 d-block">Akses Materi</span>
                                                        <p>Udah waktunya jadi expert, yuk belajar!</p>
                                                    </div>

                                                    @auth
                                                        <a class="btn btn-primary btn-transition"
                                                            href="{{ route('gridCourse') }}">Selengkapnya <i
                                                                class="bi-chevron-right small"></i></a>
                                                    @else
                                                        <a class="btn btn-warning btn-transition"
                                                            href="{{ route('showRegisterForm') }}">Kamu Belum Daftar
                                                            nih</a>
                                                    @endauth
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-lg-6">
                                            <div class="navbar-dropdown-menu-inner">
                                                <div class="row">
                                                    <!-- Kolom untuk kategori 1-4 -->
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <span class="dropdown-header">Kategori Materi</span>
                                                        @if (isset($kategori) && $kategori->isNotEmpty())
                                                            <div class="d-flex flex-wrap">
                                                                @foreach ($kategori->take(4) as $kat)
                                                                    <a class="dropdown-item me-2" 
                                                                       href="{{ url('/gridCourse?kategori=' . $kat->id) }}">{{ $kat->nama }}</a>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <p>Kategori Tidak Tersedia</p>
                                                        @endif
                                                    </div>
                                        
                                                    <!-- Kolom untuk kategori 5-8 -->
                                                    <div class="col-sm">
                                                        <span class="dropdown-header">Kategori Lainnya</span>
                                                        <div class="mb-3">
                                                            @if (isset($kategori) && $kategori->count() > 4)
                                                                <div class="d-flex flex-wrap">
                                                                    @foreach ($kategori->skip(4)->take(4) as $kat)
                                                                        <a class="dropdown-item me-2" 
                                                                           href="{{ url('/gridCourse?kategori=' . $kat->id) }}">{{ $kat->nama }}</a>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <p class="text-muted">Tidak ada kategori tambahan</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                        
                                        

                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                                <!-- End Mega Menu -->
                            </li>

                            <a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link toggle"
                                href="{{ route('about') }}" role="button" aria-expanded="false">Tentang kami</a>

                            <li class="hs-has-sub-menu nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle"
                                    role="button" aria-expanded="false">
                                    Profil
                                </a>
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu"
                                    style="min-width: 14rem;">
                                    @if (Auth::guest())
                                        <!-- Jika belum login -->
                                        <a class="dropdown-item" href="{{ route('showLoginForm') }}"
                                            style="min-width: 7rem;">Login</a>
                                        <a class="dropdown-item" href="{{ route('register') }}"
                                            style="min-width: 7rem;">Register</a>
                                    @else
                                        <!-- Jika sudah login -->
                                        <a class="dropdown-item" href="{{ route('profile') }}"
                                            style="min-width: 7rem;">
                                            Profil Saya
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                            @csrf
                                            <a class="dropdown-item"
                                                onclick="document.getElementById('logoutForm').submit();">Logout</a>
                                        </form>
                                    @endif
                                </div>
                            </li>


                            <li class="">
                                <a id="portfolioMegaMenu" class="btn btn-primary btn-transition" href="#contact"
                                    role="button" aria-expanded="false" style="min-width: 1rem;">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>
</body>

</html>

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
@yield('content')
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer class="container text-center content-space-1">
    <!-- Logo -->
    <a class="d-inline-flex align-items-center mb-2" href="index.html" aria-label="Front">
        <img class="brand" src="{{ asset('assets/img/Logo/BrandLogo.svg') }}" alt="Logo">
    </a>
    <!-- End Logo -->

    <p class="small text-muted mb-0">2025 Team Intern Wanteknologi</p>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Sign Up -->

<!-- End Sign Up -->


<!-- Sign up with Modal -->

<!-- End Sign up with Modal -->

<!-- Reset Password -->

<!-- End Reset Password -->

<!-- Footer -->

<!-- End Footer -->

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
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>

<!-- JS Front -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>


<!-- JS Plugins Init. -->
<script>
    (function() {
        // INITIALIZATION OF HEADER
        // =======================================================
        new HSHeader('#header').init()


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


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
            duration: 650,
            once: true
        });


        // INITIALIZATION OF SWIPER
        // =======================================================
        var swiper = new Swiper('.js-swiper-hero-clients', {
            slidesPerView: 2,
            breakpoints: {
                380: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },
            },
        });


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')
    })()
</script>
<script src="https://cdn.jsdelivr.net/npm/fslightbox@3.4.0/dist/index.min.js"></script>


</body>

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/landing-app-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:15:36 GMT -->

</html>
