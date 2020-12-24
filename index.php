<?php
  include 'required.php';
  if (!empty($_SESSION['login_user'])){
    isetudiant();
    isprof();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>EMSET-P | Accueil</title>
    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/flipcard.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="icon" href="assets/img/logo.png">
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src='assets/js/icons.js'></script>
</head>

<body id="home">
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">
            <div class="topbar-left">
                <button class="topbar-toggler">&#9776;</button>
                <a class="topbar-brand" href="index.php"> <img class="logo-default" src="assets/img/logo.png"
                        alt="logo"> <img class="logo-inverse" src="assets/img/logo.png" alt="logo"> </a>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav nav">
                    <li class="nav-item"><a class="nav-link  active">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="Diplomes.php">Diplomes</a></li>
                    <li class="nav-item"><a class="nav-link" href="Formations.php">Formations</a></li>
                    <li class="nav-item"><a class="nav-link" href="Activités.php">Activités</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                </ul>
                <div class="d-inline-flex ml-30"> <a class="btn btn-sm btn-primary mr-4" href="/Moodle/login/index.php">Se
                        Connecter</a> </div>
            </div>
        </div>
    </nav>
    <!-- END Topbar -->
    <!-- Header -->
    <div class="swiper-container swiper-button-box no-padding swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(-794px, 0px, 0px); transition-duration: 0ms;">
            <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Slide 1
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 794px;">
                <header class="header header-inverse h-fullscreen p-0"
                    style="background-image: url(assets/img/logob.png);" data-overlay="8">
                    <div class="container">

                        <div class="row h-full align-items-center">
                            <div class="col-12 col-md-4 offset-md-1">
                                <h3 style="color: orangered;">DISCOURS DE SA MAJESTÉ LE ROI MOHAMMED VI</h3>
                                <p class="lead">La formation professionnelle constitue un levier essentiel, à la
                                    condition toutefois qu’elle fasse l’objet de toute l’attention requise, et qu’un
                                    contenu et un statut nouveaux lui soient accordés en tant que filière prometteuse.
                                </p>
                                <br>
                            </div>


                            <div class="col-12 offset-md-1 col-md-5 text-center hidden-sm-down">
                                <img src="assets/img/king.png" alt="...">
                            </div>

                        </div>

                    </div>
                </header>
            </div>



            <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Slide 2
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 794px;">
                <header class="header header-inverse h-fullscreen p-0"
                    style="background-image: url(assets/img/remisediplome.jpg);" data-overlay="8">
                    <div class="container">

                        <div class="row h-full align-items-center">
                            <div class="col-12 col-md-4 offset-md-1">
                                <h3 style="color: orangered;">Diplômes innovant et reconnue par l'État</h3>
                                <p class="lead">Le groupe EMSET-P vous propose des diplômes de grand calibre à l'échelle
                                    regionalle et aussi nationale,car il propose toujours la nouveauté du marché en
                                    collaboration avec une experiance de 19 ans dans le domaine informatique.</p>
                            </div>


                            <div class="col-12 offset-md-1 col-md-5 text-center hidden-sm-down">
                                <img src="assets/img/logo.png" alt="...">
                            </div>

                        </div>

                    </div>
                </header>
            </div>



            <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Slide 3
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 794px;">
                <header class="header header-inverse h-fullscreen p-0"
                    style="background-image: url(assets/img/video/workspace.jpg);" data-overlay="8">
                    <div class="container">
                        <script>
                        $('.video').each(function() {
                            if ($(this).is(":in-viewport")) {
                                $(this)[0].play();
                            } else {
                                $(this)[0].pause();
                            }
                        })
                        </script>
                        <video class="video"  controls autoplay>
                            <source src="assets\img\emsett-p.mp4" type="video/mp4">
                        </video>

                    </div>
                </header>
            </div>

            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"
                style="width: 794px;">
                <header class="header header-inverse h-fullscreen p-0 "
                    style="background-image: url(assets/img/logo.png);" data-overlay="8">
                    <div class="container text-center">

                        <div class="row h-full hidden-md-down">
                            <div class="col-12 col-lg-8 offset-lg-2 align-self-center pt-150">

                                <h1 class="display-4">TheSaaS</h1>
                                <br>
                                <p class="lead text-white fs-20">Responsive, professional, and multipurpose SaaS
                                    template</p>

                            </div>

                            <div class="col-12 align-self-end text-center">
                                <img src="assets/img/logo.png" alt="..." data-aos="fade-up" data-aos-offset="0"
                                    class="aos-init aos-animate">
                            </div>

                        </div>



                        <div class="row h-full hidden-lg-up">
                            <div class="col-12 col-lg-8 offset-lg-2 align-self-center">
                                <h1>TheSaaS</h1>
                                <br>
                                <p class="text-white fs-15">Responsive, professional, elegant, and<br> multipurpose SaaS
                                    template</p>
                            </div>
                        </div>

                    </div>
                </header>

            </div>
        </div>

        <div class="swiper-button-prev hidden-sm-down"></div>
        <div class="swiper-button-next hidden-sm-down"></div>
    </div>
    <!-- END Header -->


    <!-- Main container -->
    <section>
        <div class="container mb-70">
            <div class="text-center mb-70">
                <h1>Découvrez nos fonctionnalités</h1>
            </div>
            <div class="row gap-y">
                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: black;">
                                <div style=" padding: 25%;">
                                    <i class="fa fa-graduation-cap" style="font-size: 800%;color: #FF4500;"></i>
                                    <h6 style="font-size: 200%;color: #FF4500;">Diplomes</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 25%;">
                                <p>EMSET-P propose à ses étudiants des diplômes reconnue par l’état qui vont leur
                                    permettre d’accéder à la vie active sans problèmes</p>
                                <a class="btn  btn-round btn-danger btn-outline" href="Diplome.php">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: black;">
                                <div style=" padding: 25%;">
                                    <i class="fas fa-file-alt" style="font-size: 800%;color: #FF4500;"></i>
                                    <h6 style="font-size: 200%;color: #FF4500;">Formations</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 25%;">
                                <p>Les formations sont destinées aux professionnels, aux demandeurs d’emploi, mais aussi
                                    aux candidats individuels …</p>
                                <a class="btn  btn-round btn-danger btn-outline" href="Formations.php">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: black;">
                                <div style=" padding: 25%;">
                                    <i class="fas fa-play" style="font-size: 800%;color: #FF4500;"></i>
                                    <h6 style="font-size: 200%;color: #FF4500;">Activités</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 25%;">
                                <p>En parallèle des études, l'école EMSET-P proposes aussi à ses étudiants des activités
                                    scolaires telles que les visites d'entreprises.. et des activités parascolaires
                                    telles que les excursions, les tournoies de foot, les accompagnes de don de sang …
                                </p>
                                <a class="btn  btn-round btn-danger btn-outline" href="Activités.php">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------------>
    <section class="section section-inverse bg-img " id="section-contact"
        style="background-image: url(assets/img/bgaccred.jpg)" data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                    <h2>POURQUOI EMSET-P ?</h2>
                    <br>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Un établissement reconnu et accrédité par l’Etat</span>
                        </li>
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Un établissement ouvert aux métiers de
                                l’entreprise</span>
                        </li>
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Assure un accompagnement permanent et un encadrement
                                personnalisés des étudiants</span>
                        </li>
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Offre des conditions de formation modernisées</span>
                        </li>
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Forme des profils recherchés par les recruteurs dès leur
                                diplôme en main</span>
                        </li>
                        <li>
                            <span class="icon-list-icon">
                                <i aria-hidden="true" class="far fa-check-square" style="color: orangered;"></i> </span>
                            <span class="icon-list-text">&nbsp;Assure une vie associative dynamique et une ambiance
                                parfaite</span>
                        </li>
                    </ul>
                    <br>
                    <br>
                </div>
                <div class="col-12 offset-md-1 col-md-5 text-center" style=" padding-top: 10%;">
                    <hr class="hidden-md-up">
                    <img src="assets/img/acre.png" alt="..." data-aos="fade-up" class="aos-init aos-animate">
                </div>
            </div>
        </div>
    </section>
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer" style="background-color: black;">
        <div class="container">
            <p class="text-center text-md-center">Groupe EMSET-P, Copyright © 2020 | Réalisé par Walid BOURAYA</p>
        </div>
    </footer>
    <!-- END Footer -->
</body>

</html>