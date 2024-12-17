    <!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/landing-app-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:15:35 GMT -->

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Belajar atau Kursus Semakin Mudah Bersama BidangIlmu</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/BrandLogo.svg') }}" type="image/x-icon">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
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
                <a class="navbar-brand" href="index.html" aria-label="Front">
                    <img class="navbar-brand-logo mt-2" src="assets/img/logo/BrandLogo.svg" alt="Logo">
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
                                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                    aria-current="page" href="#" role="button" aria-expanded="false">Ruang Belajar</a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="landingsMegaMenu"
                                    style="min-width: 30rem;">
                                    <div class="row">
                                        <div class="col-lg-6 d-none d-lg-block">
                                            <!-- Banner Image -->
                                            <div class="navbar-dropdown-menu-banner"
                                                style="background-image: url(assets/svg/components/shape-3.svg);">
                                                <div class="navbar-dropdown-menu-banner-content">
                                                    <div class="mb-4">
                                                        <span class="h2 d-block">Kontribusi Berbagi Ilmu</span>
                                                        <p>Yuk, sharing ilmu bareng!Setiap ide kamu itu keren.
                                                        </p>
                                                    </div>

                                                    @auth
                                                    <!-- Jika user sudah login, arahkan ke course-overview.html -->
                                                    <a class="btn btn-primary btn-transition"
                                                        href="{{ route('dashboardDosen') }}">Buat Materi  <i
                                                        class="bi-chevron-right small"></i></a>
                                                @else
                                                    <!-- Jika user belum login, arahkan ke halaman login -->
                                                    <a class="btn btn-warning btn-transition"
                                                        href="{{ route('showLoginForm') }}">Kamu Belum Login</a>
                                                @endauth


                                                    

                                                            
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-lg-6">
                                            <div class="navbar-dropdown-menu-inner">
                                                <div class="row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <span class="dropdown-header">Kategori materi</span>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-corporate.html">Digital Marketing</a>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-analytics.html">Software Development
                                                            <span
                                                                class="badge bg-primary rounded-pill ms-1">Hot</span></a>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-studio.html">Blogger</a>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-marketing.html">Brand Ambassador</a>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-advertisement.html">Advertisement</a>
                                                        <a class="dropdown-item "
                                                            href="landing-classic-consulting.html">Consulting</a>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="col-sm">
                                                        <div class="mb-3">
                                                            <span class="dropdown-header">Courses</span>
                                                            <a class="dropdown-item "
                                                                href="landing-app-ui-kit.html">Design</a>
                                                            <a class="dropdown-item" href="landing-app-saas.html">Web
                                                                Develop</a>
                                                            <a class="dropdown-item "
                                                                href="landing-app-workflow.html">Marketing</a>
                                                            <a class="dropdown-item "
                                                                href="landing-app-payment.html">Development</a>
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

                            <!-- Account -->
                            
                                <a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link toggle "
                                    href="{{ route('about') }}" role="button" aria-expanded="false">Tentang kami</a>

                            <li class="hs-has-sub-menu nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                     role="button" aria-expanded="false">Profil</a>
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu"
                                    style="min-width: 14rem;">
                      
                                    
                                    @if (Auth::guest())
                                        <a class="dropdown-item" href="{{ route('showLoginForm') }}"
                                            style="min-width: 7rem;">Login</a>
                                        <a class="dropdown-item" href="{{ route('register') }}"
                                            style="min-width: 7rem;">Register</a>
                                    @else
                                        {{ auth()->user()->name }}
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="POST" id="newForm">
                                            @csrf
                                            <a class="dropdown-item"
                                                onclick="document.getElementById('newForm').submit();">Logout</a>
                                        </form>
                                        </a>
                                    @endif
                                </div>
                            </li>


                            <li class="">
                                <a id="portfolioMegaMenu" class="btn btn-primary btn-transition"
                                    href="#" role="button" aria-expanded="false"
                                    style="min-width: 1rem;">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    @yield('content')
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="container text-center content-space-1">
        <!-- Logo -->
        <a class="d-inline-flex align-items-center mb-2" href="index.html" aria-label="Front">
            <img class="brand" src="assets/img/Logo/BrandLogo.svg" alt="Logo">
        </a>
        <!-- End Logo -->

        <p class="small text-muted mb-0">2025 Team Intern Adi Sanggoro</p>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Sign Up -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body">
                    <!-- Log in -->
                    <div id="signupModalFormLogin" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign
                                    up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-2">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Log in with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#"
                                data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log
                                in with Email</a>
                        </div>
                    </div>
                    <!-- End Log in -->

                    <!-- Log in with Modal -->
                    <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign
                                    up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate needs-validation" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormLoginEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot
                                        Password?</a>
                                </div>

                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormLoginPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required minlength="8">
                                <span class="invalid-feedback">Please enter a valid password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Log in with Modal -->

                    <!-- Sign up -->
                    <div id="signupModalFormSignup">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log
                                    in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-3">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Sign up with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#"
                                data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign
                                up with Email</a>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sign up -->

                    <!-- Sign up with Modal -->
                    <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log
                                    in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate need-validate" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormSignupEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormSignupPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required>
                                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3" data-hs-validation-validate-class>
                                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm
                                    password</label>
                                <input type="password" class="form-control form-control-lg" name="confirmPassword"
                                    id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required
                                    data-hs-validation-equal-field="#signupModalFormSignupPassword">
                                <span class="invalid-feedback">Password does not match the confirm password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
                            </div>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </form>
                    </div>
                    <!-- End Sign up with Modal -->

                    <!-- Reset Password -->
                    <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Forgot password?</h2>
                            <p>Enter the email address you used when you joined and we'll send you instructions to reset
                                your password.</p>
                        </div>
                        <!-- En dHeading -->

                        <form class="js-validate need-validate" novalidate>
                            <div class="mb-3">
                                <!-- Form -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormResetPasswordEmail"
                                        tabindex="0">Your email</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                                        <i class="bi-chevron-left small"></i> Back to Log in
                                    </a>
                                </div>

                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormResetPasswordEmail" tabindex="1"
                                    placeholder="Enter your email address" aria-label="Enter your email address"
                                    required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                <!-- End Form -->
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Reset Password -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer d-block text-center py-sm-5">
                    <small class="text-cap mb-4">Trusted by the world's best teams</small>

                    <div class="w-85 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>

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
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

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
</body>

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/landing-app-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:15:36 GMT -->

</html>
