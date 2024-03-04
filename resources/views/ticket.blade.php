@extends('layouts.landing')

@section('content')

<section class="container pt-5">
        <div class="row">


          <!-- Sidebar (User info + Account menu) -->
          <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
            <div class="position-sticky top-0">
              <div class="text-center pt-5">
                <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                  <img src="assets/img/avatar/18.jpg" class="d-block rounded-circle" width="120" alt="John Doe">
                  <button type="button" class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Change picture">
                    <i class="bx bx-refresh"></i>
                  </button>
                </div>
                <h2 class="h5 mb-1">John Doe</h2>
                <p class="mb-3 pb-3">jonny@email.com</p>
                <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                  <i class="bx bxs-user-detail fs-xl me-2"></i>
                  Account menu
                  <i class="bx bx-chevron-down fs-lg ms-1"></i>
                </button>
                <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                  <a href="account-details.html" class="list-group-item list-group-item-action d-flex align-items-center active">
                    <i class="bx bx-cog fs-xl opacity-60 me-2"></i>
                    Accountt Details
                  </a>
                  <a href="account-security.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-lock-alt fs-xl opacity-60 me-2"></i>
                    Security
                  </a>
                  <a href="account-notifications.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-bell fs-xl opacity-60 me-2"></i>
                    Notifications
                  </a>
                  <a href="account-messages.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-chat fs-xl opacity-60 me-2"></i>
                    Messages
                  </a>
                  <a href="account-saved-items.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-bookmark fs-xl opacity-60 me-2"></i>
                    Saved Items
                  </a>
                  <a href="account-collections.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-collection fs-xl opacity-60 me-2"></i>
                    My Collections
                  </a>
                  <a href="account-payment.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-credit-card-front fs-xl opacity-60 me-2"></i>
                    Payment Details
                  </a>
                  <a href="account-signin.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-log-out fs-xl opacity-60 me-2"></i>
                    Sign Out
                  </a>
                </div>
              </div>
            </div>
          </aside>


          <!-- Account details -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">

          <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
              <h1 class="h2 pt-xl-1 pb-3">Informations du ticket</h1>

              <!-- Basic info -->
              
              <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate>
                <div class="row pb-2">
                  <div class="col-sm-6 mb-4">
                    <label for="fn" class="form-label fs-base">First name</label>
                    <input type="text" id="fn" class="form-control form-control-lg" value="John" required>
                    <div class="invalid-feedback">Please enter your first name!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="sn" class="form-label fs-base">Second name</label>
                    <input type="text" id="sn" class="form-control form-control-lg" value="Doe" required>
                    <div class="invalid-feedback">Please enter your second name!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="email" class="form-label fs-base">Email address</label>
                    <input type="email" id="email" class="form-control form-control-lg" value="jonny@email.com" required>
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="phone" class="form-label fs-base">Phone <small class="text-muted">(optional)</small></label>
                    <input type="text" id="phone" class="form-control form-control-lg" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                  </div>
                  
                </div>

                <div class="row pb-2">
                  <div class="col-sm-6 mb-4">
                    <label for="country" class="form-label fs-base">Sélectionner un type de ticket</label>
                    <select id="country" class="form-select form-select-lg" required>
                      <option value="" disabled>Choose country</option>
                      <option value="Australia">Australia</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Canada">Canada</option>
                      <option value="Denmark">Denmark</option>
                      <option value="USA" selected>USA</option>
                    </select>
                    <div class="invalid-feedback">Please choose !</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="state" class="form-label fs-base">Choisir un moyen de paiement</label>
                    <select id="state" class="form-select form-select-lg" required>
                      <option value="" disabled>Mobile Money</option>
                      <option value="Arizona">VISA</option>
                      <option value="California">Cryptocurrency</option>
                     
                    </select>
                    <div class="invalid-feedback">Please choose !</div>
                  </div>
                  
                  
                  
                  
                </div>


                <div class="d-flex mb-3">
                  <button type="reset" class="btn btn-secondary me-3">Annuler</button>
                  <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
              </form>

              

              

            <!-- Ticket card -->
            <div class="position-relative">
              <div class="position-relative overflow-hidden bg-gradient-primary rounded-3 zindex-5 py-5 px-4 p-sm-5">
                <span class="position-absolute top-50 start-0 translate-middle bg-light rounded-circle p-4"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-repeat-0 bg-position-center-end bg-size-cover" style="background-image: url(landingassets/img/price-card-pattern.png);"></span>
                <div class="px-md-4 position-relative zindex-5">
                  <div class="d-sm-flex align-items-start justify-content-between">
                    <div class="text-center text-sm-start me-sm-4">
                      <div class="lead fw-semibold text-light text-uppercase mb-2">Date</div>
                      <h3 class="h1 text-light">Nom de l'évenement</h3>
                    </div>
                    <div class="d-table bg-white rounded-3 p-4 flex-shrink-0 mx-auto mx-sm-0">
                      <img src="assets/img/landing/conference/qr.png" width="102" alt="QR Code">
                    </div>
                  </div>
                  <div class="d-flex flex-column flex-sm-row align-items-center pt-4 mt-2">
                    <a href="#" class="btn btn-light btn-lg mb-3 mb-sm-0 me-sm-3">Activer votre pass</a>
                    <div class="d-flex align-items-center">
                      <span class="fs-lg text-light me-2">pour </span>
                      <span class="h4 text-light mb-0">5000 FCFA</span>
                    </div>
                  </div>
                </div>
                <span class="position-absolute top-50 end-0 translate-middle-y bg-light rounded-circle p-4 me-n4"></span>
              </div>
              <span class="position-absolute bg-gradient-primary opacity-60 bottom-0 mb-n2 d-dark-mode-none" style="left: 1.5rem; width: calc(100% - 3rem); height: 5rem; filter: blur(.625rem);"></span>
            </div>

            
          </div>
        </div>
      </section>


@stop
