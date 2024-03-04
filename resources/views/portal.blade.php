@extends('layouts.landing')

@section('content')

<section class="dark-mode position-relative jarallax pb-xl-3" data-jarallax data-speed="0.4">

        <!-- Parallax img -->
        <div class="jarallax-img bg-dark opacity-70" style="background-image: url(landingassets/img/hero.jpg);"></div>

        <!-- Overlay bg -->
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-70 zindex-1"></span>

        <!-- Overlay content -->
        <div class="container position-relative pb-5 zindex-5">

        <br> <br>
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
              <h2 class="h1 mb-0 me-3">Nos Evenements Populaires</h2>
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

      <!-- Latest posts -->
      <section class="container mb-5 pt-5 pb-lg-5">
        <h2 class="h1 mb-4 pt-lg-2 pb-lg-3 py-1 text-center">Trouvez le show qui vous ressemble</h2>

        <!-- Category tabs -->
        <ul class="nav nav-tabs justify-content-center mb-lg-5 mb-4 pb-lg-2">
          <li class="nav-item">
            <a href="#" class="nav-link active">Categories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Concert</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Chill</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Conférences</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Spectacles</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Sport</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Anniversaire</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Business Party</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Gala</a>
          </li>
        </ul>

        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
          <div class="col-lg-5 col-md-4">
          <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center me-sm-4 me-3">
                    <a href="blog-list-no-sidebar.html" class="nav-link me-2 p-0">
                      <i class="bx bx-list-ul fs-4"></i>
                    </a>
                    <a href="blog-grid-no-sidebar.html" class="nav-link p-0 active">
                      <i class="bx bx-grid-alt fs-4"></i>
                    </a>
                  </div>
                  <select class="form-select">
                    <option>Toutes les categories</option>
                    <option value="processes-and-tools">Concert</option>
                    <option value="startups">Formation</option>
                    <option value="digital">Chill</option>
                    <option value="strategy">Art</option>
                    <option value="business">Spectacle</option>
                    <option value="business">Sport</option>
                  </select>
                </div>
          </div>
          <div class="col-lg-7 col-md-8">
            <form class="row gy-2">
              <div class="col-lg-5 col-sm-6">
                
              </div>
              <div class="col-lg-7 col-sm-6">
                <div class="input-group">
                  <input type="text" class="form-control pe-5 rounded" placeholder="Chercher un show...">
                  <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Blog articles -->
        <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="landingassets/img/event.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Grand Concert</a>
                  <span class="fs-sm text-muted">May 19, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  
                  Jerome Bell
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          

          <!-- Item -->
          

          <!-- Item -->
          
        </div>

        <!-- Load more btn -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center pt-md-4 pt-2">
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-left mx-n1"></i>
              </a>
            </li>
            <li class="page-item disabled d-sm-none">
              <span class="page-link text-body">2 / 4</span>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item active d-none d-sm-block" aria-current="page">
              <span class="page-link">
                2
                <span class="visually-hidden">(current)</span>
              </span>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">3</a>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">4</a>
            </li>
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-right mx-n1"></i>
              </a>
            </li>
          </ul>
        </nav>
      </section>

      <!-- Page content -->
      <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        

        <!-- Blog grid -->
        

        <!-- Pagination -->
        
      </section>


       <!-- Sign up CTA -->
    <section class="container position-relative zindex-2">
      <div class="bg-dark border border-light rounded-3 py-5 px-4 px-sm-0">
        <div class="row justify-content-center py-sm-2 py-lg-5">
          <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
            <h2 class="h1 text-light mb-4">Rejoignez notre newsletter</h2>
            <p class="fs-lg text-light opacity-70 pb-4 mb-3">Ne manquez aucun prochain bon plan avec nous !</p>

            <!-- Desktop form -->
            <form class="input-group input-group-lg d-none d-sm-flex needs-validation mb-3" novalidate>
              <input type="email" class="form-control rounded-start ps-5" placeholder="Your email" required>
              <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
              <div class="invalid-tooltip position-absolute top-100 start-0">Entrez un email valide.</div>
              <button type="submit" class="btn btn-primary">Souscrire</button>
            </form>

            <!-- Mobile form -->
            <form class="needs-validation d-sm-none mb-3" novalidate>
              <div class="position-relative mb-3">
                <input type="email" class="form-control form-control-lg rounded-start ps-5" placeholder="Your email" required>
                <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                <div class="invalid-tooltip position-absolute top-0 start-0 mt-n4">Entrez un email valide.</div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-100">Souscrire</button>
            </form>
            <p class="fs-sm text-light opacity-50 mb-0">No subscriptions. No annual fees. No lock-ins.</p>
          </div>
        </div>
      </div>
    </section></br></br>








@stop