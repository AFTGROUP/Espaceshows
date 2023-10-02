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
            
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-current="page">Accueil</a>
                  <div class="dropdown-menu p-0">
                    <div class="d-lg-left">
                      <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0" style="background-image: url(landingassets/img/landings.jpg); margin: -1px;"></div>
                      <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                        <ul class="list-unstyled mb-0">
                          <li><a href="/home" class="dropdown-item">Accueil 1</a></li>
                          <li><a href="/portal" class="dropdown-item">Accueil 2</a></li>
                          
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </li>
                
                
                <li class="nav-item">
                  <a href="/event" class="nav-link">Créer un événement</a>
                </li>
                <li class="nav-item">
                  <a href="/eventlist" class="nav-link">Gérer mes évenements</a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-header border-top">
              <a href="/login" class="btn btn-danger w-100" target="_blank" rel="noopener">
                
                Se Connecter
              </a>
            </div>      
          </div>
          
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="/login" class="btn btn-danger btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
           Se Connecter
          </a>
        </div>
      </header>

	  @yield('content')


      <!-- Hero slider + BG parallax -->
      



    <!-- Footer -->
    <footer class="footer dark-mode bg-dark pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="landingassets/img/logo2.jpg" width="47" alt="Silicon">
              ESPACE SHOW
            </div>
            <form class="needs-validation" novalidate>
              <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
              <div class="input-group">
                <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
            <div id="footer-links" class="row">
              <div class="col-lg-4">
                <h6 class="mb-2">
                  <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
                </h6>
                <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column pb-lg-1 mb-lg-3">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Case Studies</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">News &amp; Insights</a></li>
                  </ul>
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-3">
                <h6 class="mb-2">
                  <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                </h6>
                <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                <h6 class="mb-2">Contact Us</h6>
                <a href="mailto:email@example.com" class="fw-medium">email@example.com</a>
              </div>
            </div>
          </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
          <span class="text-light opacity-50">&copy; Tous droits réservés. </span>
          <a class="nav-link d-inline-block p-0" href="https://createx.studio/" target="_blank" rel="noopener">ESPACE SHOW</a>
        </p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="landingassets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="landingassets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="landingassets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="landingassets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="landingassets/js/theme.min.js"></script>
  </body>
  
</html>





























