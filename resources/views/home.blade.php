@extends('layouts.landing')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style="background-image: url(landingassets/img/fete.jpg);"></div>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

          <!-- Slider controls (Prev / next) -->
          

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
                  "effect": "fade",
                  "speed": 500,
                  "autoplay": {
                    "delay": 5500,
                    "disableOnInteraction": false
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'>
                  <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h3 class="display-2 from-start mb-lg-4"></h3>
                      <div class="from-end">
                        <h1>Organisez vos événements et participez à des événements en toutes quiétude et toute sécurité</h1>
                      </div>
                      <!--<div class="scale-up delay-1">
                        <a href="#" class="btn btn-primary shadow-primary btn-lg">Start your project</a>
                      </div>-->

                    </div>

                    

                  <!-- Pagination (bullets) -->
                  <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>

      <!-- Popular events -->
      <section class="container mt-2 mt-sm-3 py-md-3 py-lg-5">
        <div class="row py-5">
          
          <div class="col-lg-12 col-md-8">

            <!-- Title + prev/next buttons -->
            <div class="d-flex align-items-center justify-content-between pb-4 mb-3">
              <h2 class="h1 mb-0 me-3">Evenements Populaires</h2>
              <div class="d-flex">
                <button type="button" id="popular-prev" class="btn btn-prev btn-icon btn-sm me-2">
                  <i class="bx bx-chevron-left"></i>
                </button>
                <button type="button" id="popular-next" class="btn btn-next btn-icon btn-sm ms-2">
                  <i class="bx bx-chevron-right"></i>
                </button>
              </div>
            </div>

            <!-- Courses slider -->
            <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#popular-prev",
                "nextEl": "#popular-next"
              },
              "breakpoints": {
                "560": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 1
                },
                "850": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Ven 20 Dec 2023</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Grand Concert</a>
                      </h3>
                      <p class="fs-sm mb-2">Cotonou, Palais des Congrès</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">18h</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Ven 20 Dec 2023</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Grand Concert</a>
                      </h3>
                      <p class="fs-sm mb-2">Cotonou, Palais des Congrès</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">18h</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Ven 20 Dec 2023</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Grand Concert</a>
                      </h3>
                      <p class="fs-sm mb-2">Cotonou, Palais des Congrès</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">18h</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Ven 20 Dec 2023</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Grand Concert</a>
                      </h3>
                      <p class="fs-sm mb-2">Cotonou, Palais des Congrès</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">18h</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Ven 20 Dec 2023</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Grand Concert</a>
                      </h3>
                      <p class="fs-sm mb-2">Cotonou, Palais des Congrès</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">18h</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        
                      </div>
                    </div>
                  </article>
                </div>
              </div>

              <!-- Pagination (bullets) -->
              <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
            </div>
            <a href="portfolio-courses.html" class="btn btn-outline-primary btn-lg w-100 d-md-none mt-3">
             Voir tous les événements
              <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
            </a>
          </div>
        </div>
      </section>



      
    </main>

<!-- **************** MAIN CONTENT END **************** -->

@endsection
