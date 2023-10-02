@extends('layouts.landing')

@section('content')

<section class="dark-mode position-relative jarallax pb-xl-3" data-jarallax data-speed="0.4">

        <!-- Parallax img -->
        <div class="jarallax-img bg-dark opacity-70" style="background-image: url(landingassets/img/hero.jpg);"></div>

        <!-- Overlay bg -->
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-70 zindex-1"></span>

        <!-- Overlay content -->
        <div class="container position-relative pb-5 zindex-5">

        
          <!-- Featured article -->
          <div class="row mb-xxl-5 py-md-4 py-lg-5">
            <div class="col-lg-6 col-md-7 pb-3 pb-md-0 mb-4 mb-md-5">
              
              <h1 class="display-5 pb-md-3">Organisez vos événements et participez à des événements en toutes quiétude et toute sécurité.</h1>
              <div class="d-flex flex-wrap mb-md-5 mb-4 pb-md-2 text-white">
                <!-- Desktop form -->
              <form class="d-none d-sm-flex mb-5">
                <div class="input-group d-block d-sm-flex input-group-lg me-3">
                  <input type="text" class="form-control w-50" placeholder="Recherchez un événement...">
                  <select class="form-select w-50">
                    <option value="" selected disabled>Lieu</option>
                    <option value="Web Development">Cotonou</option>
                    <option value="Mobile Development">Abomey-Calavi</option>
                    <option value="Programming">Porto-Novo</option>
                    
                  </select>
                </div>
                <button type="submit" class="btn btn-icon btn-primary btn-lg">
                  <i class="bx bx-search"></i>
                </button>
              </form>
              </div>
              
            </div>

            <!-- Articles slider -->
            <div class="col-lg-4 offset-lg-2 col-md-5">
              <div class="swiper overflow-hidden w-100 ms-n2 ms-md-0 pe-3 pe-sm-4" style="max-height: 405px;" data-swiper-options='{
                "direction": "vertical",
                "slidesPerView": "auto",
                "freeMode": true,
                "scrollbar": {
                  "el": ".swiper-scrollbar"
                },
                "mousewheel": true
              }'>
                <div class="swiper-wrapper pe-md-2">
                  <div class="swiper-slide h-auto px-2">

                    <div class="row row-cols-md-1 row-cols-sm-2 row-cols-1 g-md-4 g-3">

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Digital</a>
                              <span class="fs-sm text-muted">1 day ago</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">Mobile App Generates Data for the Energy Management</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">8</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">4</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">2</span>
                            </div>
                          </div>
                        </article>
                      </div>

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Business</a>
                              <span class="fs-sm text-muted">May 24, 2021</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">How the Millennial Lifestyle Changes as Service Prices Rise</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">2</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">0</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">3</span>
                            </div>
                          </div>
                        </article>
                      </div>

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Digital</a>
                              <span class="fs-sm text-muted">May 25, 2021</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">Inclusive Marketing: Why and How Does it Work?</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">5</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">0</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">2</span>
                            </div>
                          </div>
                        </article>
                      </div>

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Technology</a>
                              <span class="fs-sm text-muted">May 26, 2021</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">A Study on Smartwatch Design Qualities and People’s Preferences</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">7</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">4</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">1</span>
                            </div>
                          </div>
                        </article>
                      </div>

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Startups</a>
                              <span class="fs-sm text-muted">May 27, 2021</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">Why UX Design Matters and How it Affects Ranking</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">5</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">3</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">9</span>
                            </div>
                          </div>
                        </article>
                      </div>

                      <!-- Article -->
                      <div class="col">
                        <article class="card h-100 border-0 shadow-sm card-hover-primary">
                          <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <a href="#" class="badge fs-sm text-nav bg-white text-decoration-none position-relative zindex-2">Web</a>
                              <span class="fs-sm text-muted">May 28, 2021</span>
                            </div>
                            <h3 class="h5 mb-0">
                              <a href="blog-single.html" class="stretched-link">This Week in Search: New Limits and Exciting Features</a>
                            </h3>
                          </div>
                          <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-like fs-lg me-1"></i>
                              <span class="fs-sm">3</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                              <i class="bx bx-comment fs-lg me-1"></i>
                              <span class="fs-sm">5</span>
                            </div>
                            <div class="d-flex align-items-center">
                              <i class="bx bx-share-alt fs-lg me-1"></i>
                              <span class="fs-sm">2</span>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-scrollbar"></div>
              </div>
            </div>
          </div>
        </div>
      </section>


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







@stop