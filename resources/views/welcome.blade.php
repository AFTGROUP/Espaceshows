<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Espaceshow+</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    
        <header>
            <!-- Nav -->
            <nav class="navbar navbar-expand-lg  navbar-light" style="background:#ffffff;">
                <div class="container m-0 me-auto">
                    <a class="navbar-brand" href="#" id="Logo"><img src="media/Logo2.jpg" height="90" width="90" class="img-fluid " alt="Logo"></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-lg-0 ">
                            <li class="">
                                <a class="nav-link" href="#" aria-current="page" style="font-weight: 500;"><strong>Accueil</strong><span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="#" aria-current="page" style="font-weight: 500;"><strong>Créer un
                                        évènement</strong></a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="#" aria-current="page" style="font-weight: 500;"><strong>Gérer mes
                                        évènements</strong></a>
                            </li>
                            <li class="">
                                <form class="d-flex my-2 my-lg-0 form-inline" id="barreSearch">
                                    <div class="input-group p-1 " style="width:fit-content; background: #eeef; border-radius: 50px; border: 1px solid #ddd;">
                                        <input class=" me-sm-2 " type="text" placeholder="Rechercher un évènement" style="background: none;font-size: 15px; font-weight: 500; width: 195px; border: none; outline: none;">
                                        <div class="input-group-append">
                                            <button class="" type="submit" style="border: none; background:none;"><i class="fas fa-search fs-5 text-secondary mt-1"></i></button>
                                        </div>
                                    </div>
                                </form>
                        </ul>
                        <div class="d-flex " id="login">
                            <div class="m-2" id="connexion">
                                <a class="nav-link  fs-7 btn btn-light" href="{{ route('login') }}"><Strong>Se connecter</Strong></a>
                            </div>
                            <div class="m-2">
                                <a class="nav-link p-2 bg-dark " href="{{ route('register') }}" style="color: #c30f66; border-radius: 10px; width: 100px; text-align: center;"><Strong>S'inscrire</Strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div style="width: 100%;position: relative;">
            <h3 class="text-center col-md-6" id="descript">Organisez vos évènements et participez à des évènements en toute
                quiétude et en toute sécurité !</h3>
            <img src="media/fete.jpg" width="100%" height="300" alt="">
        </div>
        <br>
        <div class="container mt-4">
            <div class="card" style="width: 20rem;">
                <img src="media/360_F_120282530_gMCruc8XX2mwf5YtODLV2O1TGHzu4CAb.jpg" class="card-img-top" alt="Image de l'événement">
                <div class="card-body">
                    <h5 class="" style="color:#ff6505;">Grand concert de Dadju</h5>
                    <p class="card-text d-flex">
                        Ven. 15/08/2023 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-clock mt-1"></i>15h00<br>
                        Cotonou, Palais des congrès
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-heart bg-warning"></i>
                        </span>
                        <a href="#" class="btn btn-primary">Réserver un ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Evenements -->
        <div class="container p-3">
            <h4 class="fs-3 text-dark mb-4"><strong>Evènements populaires</strong></h4>
            <div class="row">
                <div class="col-4">
                    <div class="card text-white">
                        <img class="card-img-top" src="media/360_F_120282530_gMCruc8XX2mwf5YtODLV2O1TGHzu4CAb.jpg" alt="Title">
                        <div class="card-body bg-danger">
                            <p class="card-title fs-6">Grand concert de Dadju</p>
                            <p class="card-text d-flex flex-wrap justify-content-between">
                            <h4 class="fs-7">Ven 18/08/2023</h4>
                            <h4 class="fs-7">18h</h4>
                            </p>
                            <p class=" d-flex flex-wrap justify-content-between">
                                <img src="" alt="">
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Réserver un ticket</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-white">
                        <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                        <div class="card-body">
                            <h3 class="card-title">Title</h3>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-white">
                        <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                        <div class="card-body">
                            <h3 class="card-title">Title</h3>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <!-- ========== Start catégories ========== -->
        <div class="container mt-4 bg-secondary">
            <h4 class="fs-3 text-dark mb-4"><strong>Catégories</strong></h4>
            <ul class="p-0  m-0 d-flex flex-wrap justify-content-between">
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Tout</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Concert</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Formation</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Spetacles</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Art</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Chill</strong></a>
                </li>
                <li>
                    <a name="" id="" class="" href="#" role="button"><strong>Sport</strong></a>
                </li>
            </ul>
            <div class="row mt-5">
                <div class="col-md-6">
                    <select name="" id="" class="form-select">
                        <option value="" selected> Pays</option>
                        <option value=""><i class="fas fa-globe"></i>Algérie</option>
                        <option value="">Allemangne</option>
                        <option value="">Bénin</option>
                        <option value="">Burkina-faso</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="" id="" class="form-select">
                        <option value="" selected><i class="far fa-calendar-alt"></i>Période</option>
                        <option value="">Cette semaine</option>
                        <option value="">Cet mois</option>
                        <option value="">Cette année</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="card text-white">
                    <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a name="" id="pluss" class="text-center mt-5 offset-md-5" href="#" role="button">Voir plus <i class="fas fa-angle-double-right"></i></a>
    </div>
    <!-- ========== End catégories ========== -->
    <div class="container mt-5">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-md-8">
                        <p class="col-md-6">Abonnez-vous à notre newsletter pour être toujours au courant des prochains
                            événements passionnants !</p>
                        <form action="" method="">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="newsletter" id="" aria-describedby="helpId" placeholder="Entrer votre email...">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="image source" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Inclure le script Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="espaceshow.js"></script>
</body>
</html>