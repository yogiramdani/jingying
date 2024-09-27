<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ __('messages.company') }} - {{ __('messages.tag_line') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;700&display=swap" rel="stylesheet">


        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- /v2/libraries Stylesheet -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <link rel="stylesheet" href="/v2/lib/animate/animate.min.css"/>
        <link href="/v2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="/v2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/v2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/v2/css/style.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Noto Sans SC', sans-serif;
            }
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Noto Sans SC', sans-serif;
            }

            p.mandarin {
                font-family: 'Noto Sans SC', sans-serif;
            }
        </style>
        
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

      
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="/assets/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
                            {{ __('messages.halaman_depan') }}
                        </a>
                        <a href="{{ route('open-jobs') }}" class="nav-item nav-link {{ request()->routeIs('open-jobs') ? 'active' : '' }}">
                            {{ __('messages.lowongan_kerja') }}
                        </a>
                        <a href="{{ route('all-jobs') }}" class="nav-item nav-link {{ request()->routeIs('all-jobs') ? 'active' : '' }}">
                            {{ __('messages.posisi_terbuka') }}
                        </a>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                            {{ __('messages.hubungi') }}
                        </a>
                    </div>

                    
                    <select onchange="location = this.value;">
                        <option value="{{ route('changeLang', ['lang' => 'id']) }}" {{ app()->getLocale() === 'id' ? 'selected' : '' }}>Indonesian</option>
                        <option value="{{ route('changeLang', ['lang' => 'en']) }}" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                        <option value="{{ route('changeLang', ['lang' => 'zn']) }}" {{ app()->getLocale() === 'zn' ? 'selected' : '' }}>Chinese</option>
                    </select>


                    <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Login</a> -->
                </div>
            </nav>

            @yield('carousel')
        </div>
        <!-- Navbar & Hero End -->


        

        

     
        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.html" class="p-0">
                                <h4 class="text-white"><i class="fas fa-search me-3"></i>{{ __('messages.company') }}</h4>
                                <!-- <img src="/v2/img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-4">
                            {{ __('messages.about') }}
                            </p>
                            
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">

                            <!-- <iframe loading="lazy" 
                                    src="https://maps.google.com/maps?q=%E9%9B%85%E5%8A%A0%E8%BE%BE%EF%BC%8C%E5%AE%89%E6%9F%AF%E5%B0%94&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" 
                                    title="Ancol, Jakarta" 
                                    height="400px"
                                    aria-label="Ancol, Jakarta"></iframe>
                         -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">{{ __('messages.info') }}</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">{{ __('messages.alamat') }}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">jingyinghunterjob@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">085213490358</p>
                            </div>
                           
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" 
                                   href="https://www.facebook.com/share/13X38RVy37/?mibextid=qi2Omg"
                                   target="blank"><i class="fab fa-facebook-f text-white"></i></a>
                                
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" 
                                   href="https://www.instagram.com/hunterjingying?igsh=MXY3NmZkejdwZ3FmMQ=="
                                   target="blank"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" 
                                   href="https://www.tiktok.com/@jingyinghunter?_t=8q44QFXZbWc&_r=1"
                                   target="blank"><i class="fab fa-tiktok text-white"></i></a>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>JING YING HUNTER</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript /v2/libraries -->
         
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax//v2/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/v2/lib/wow/wow.min.js"></script>
        <script src="/assets/plugins/feather-icons/dist/feather.min.js"></script>
        <script src="/v2/lib/easing/easing.min.js"></script>
        <script src="/v2/lib/waypoints/waypoints.min.js"></script>
        <script src="/v2/lib/counterup/counterup.min.js"></script>
        <script src="/v2/lib/lightbox/js/lightbox.min.js"></script>
        <script src="/v2/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield('scripts')
    @stack('custom-scripts')
  

        <!-- Template Javascript -->
        <script src="/v2/js/main.js"></script>
        <script>
  feather.replace();
</script>
    </body>

</html>