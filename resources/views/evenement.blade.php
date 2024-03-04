@extends('layouts.landing')

@section('content')

<!-- Hero -->
<section class="container pt-4 pb-5 mb-lg-5">

<!-- Breadcrumb mobile -->
<nav class="d-md-none pb-3 mb-2 mb-lg-3" aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    
    <li class="breadcrumb-item">
      <a href="#">Liste des événements</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Nom de l'événement</li>
  </ol>
</nav>

<div class="row row-cols-1 row-cols-md-2 g-0 pb-2">

  <!-- Image -->
  <div class="col order-md-2 position-relative bg-position-center bg-size-cover bg-repeat-0 zindex-2" style="background-image: url(landingassets/img/event.jpg); border-radius: .5rem .5rem .5rem 0;">
    <div style="height: 250px;"></div>
  </div>

  <!-- Text + Breadcrumb desktop -->
  <div class="col order-md-1">
    <nav class="d-none d-md-block py-3 mb-2 mb-lg-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        
        <li class="breadcrumb-item">
          <a href="/listeevenements">Liste des événements</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nom de l'événement</li>
      </ol>
    </nav>

    <div class="bg-secondary rounded-3 p-4 p-lg-5 mt-n2 mt-md-0 me-md-n2">
      <div class="px-sm-3 px-xl-4 pt-4 py-md-3 py-lg-4 py-xl-5">
        <h1 class="pb-2 pb-xxl-3">Grand Concert</h1>
        <p class="pb-2 mb-4 mb-xxl-5">Vestibulum nunc lectus auctor quis natoque lectus tortor lacus, eu nunc feugiat nisl maecenas nulla hac morbi. Sollicitudin cursus in habitasse adipiscing  sed aenean sapien maecenas lectus auctor. Non feugiat feugiat egestas nulla nec. Arcu tempus, eget elementum dolor ullamcorper sodales ultrices eros.</p>
        
        <div class="position-relative d-md-none d-lg-block mb-4" style="max-width: 416px;">
                <i class="bx bxl-kickstarter d-flex d-dark-mode-none justify-content-center align-items-center position-absolute bg-dark fs-lg text-white rounded-1" style="top: 0; left: 63%; width: 1.5rem; height: 1.5rem; margin-top: -.525rem; margin-left: -.5rem;"></i>
                <i class="bx bxl-kickstarter d-none d-dark-mode-flex justify-content-center align-items-center position-absolute bg-white fs-lg badge text-dark rounded-1 p-0" style="top: 0; left: 63%; width: 1.5rem; height: 1.5rem; margin-top: -.525rem; margin-left: -.5rem;"></i>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
        </div>
        
        <div class="d-xxl-flex align-items-center">
          <a href="#" class="btn btn-primary shadow-primary btn-lg">Make an appointment</a>
          <ul class="list-unstyled ps-xxl-4 pt-4 pt-xxl-0 ms-xxl-2">
            <li><strong>Mon &mdash; Fri:</strong> 9:00 am &mdash; 22:00 am</li>
            <li><strong>Sat &mdash; Sun:</strong> 9:00 am &mdash; 20:00 am</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@stop