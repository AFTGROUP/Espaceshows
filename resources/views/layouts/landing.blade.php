<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Espace Show | Site Officiel</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="landingassets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="landingassets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="landingassets/favicon/favicon-16x16.png">
    <link rel="manifest" href="landingassets/favicon/site.webmanifest">
    <link rel="mask-icon" href="landingassets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="landingassets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="landingassets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="landingassets/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="landingassets/vendor/swiper/swiper-bundle.min.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="landingassets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #0b0f19;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>


  <!-- Body -->
  <body>
    
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Chargement...</span>
      </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
        <div class="container px-3">
          <a href="index-2.html" class="navbar-brand pe-3">
            <img src="landingassets/img/logo2.jpg" width="54" alt="Silicon">
            ESPACE SHOW
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item">
                  <a href="/portal" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="/apropos" class="nav-link">A propos</a>
                </li>
                <li class="nav-item">
                  <a href="/archives" class="nav-link">Archives</a>
                </li>
                <li class="nav-item">
                  <a href="/contact" class="nav-link">Contact</a>
                </li>
                
              </ul>
              
                
            
            </div>
            
            <div class="offcanvas-header border-top">
            <a href="/creerevenement" class="btn btn-dark w-100" target="_blank" rel="noopener">
                
                Organiser un événement
              </a>
              &nbsp;&nbsp;
              <a href="/login" class="btn btn-danger w-100" target="_blank" rel="noopener">
                
                Se Connecter
              </a>
            </div>      
          </div>
          
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="/creerevenement" class="btn btn-dark btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
                
                Organiser un événement
              </a> &nbsp;&nbsp;
          <a href="/login" class="btn btn-danger btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
           Se Connecter
          </a>
        </div>
      </header>

	  @yield('content')

      </br></br>

<footer class="footer dark-mode bg-dark pt-5 pb-4 pb-lg-5">
      <div class="container text-center pt-lg-3">
        
        <ul class="nav justify-content-center pt-3 pb-4 pb-lg-5">
          <li class="nav-item"><a href="#" class="nav-link">Conditions d'utilisation</a></li>
          |
          <li class="nav-item"><a href="#" class="nav-link">Mentions légales</a></li>
          |
          <li class="nav-item"><a href="#" class="nav-link">Politique de confidentialité</a></li>
          
        </ul>
        <!--<div class="d-flex flex-column flex-sm-row justify-content-center">
          <a href="#" class="btn btn-primary shadow-primary btn-lg me-sm-4 mb-3">Buy access pass</a>
          <a href="#" class="btn btn-outline-light btn-lg mb-3">
            <i class="bx bx-calendar-check fs-xl me-2 ms-n1"></i>
            Go to marketplace
          </a>
        </div>-->
        <div class="d-flex justify-content-center pt-4 mt-lg-3">
          <a href="#" class="btn btn-icon btn-secondary btn-facebook mx-2">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-instagram mx-2">
            <i class="bx bxl-instagram"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-twitter mx-2">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-youtube mx-2">
            <i class="bx bxl-youtube"></i>
          </a>
        </div>
        <p class="nav d-block fs-sm text-center pt-5 mt-lg-4 mb-0">
          <span class="text-light opacity-50">&copy; Tous droits réservés.  </span>
          <a class="nav-link d-inline-block p-0" href="" target="_blank" rel="noopener">Made by AFT GROUP</a>
        </p>
      </div>
    </footer>


    

<!-- Footer -->



    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="{{asset('landingassets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/parallax-js/dist/parallax.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/rellax/rellax.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/lightgallery/lightgallery.min.js')}}"></script>
    <script src="{{asset('landingassets/vendor/lightgallery/plugins/video/lg-video.min.js')}}"></script>

    <!-- Main Theme Script -->
    <script src="{{asset('landingassets/js/theme.min.js')}}"></script>
  </body>

<!-- Mirrored from silicon.createx.studio/landing-saas-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 12:16:38 GMT -->
</html>


   




























