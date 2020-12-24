<?php
  include 'required.php';
  if (!empty($_SESSION['login_user'])){
  
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="Diplomes.php">Diplomes</a></li>
                    <li class="nav-item"><a class="nav-link  active">Formations</a></li>
                    <li class="nav-item"><a class="nav-link" href="Activités.php">Activités</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                </ul>
                <div class="d-inline-flex ml-30"> <a class="btn btn-sm btn-primary mr-4" href="page-login.php">Se
                        Connecter</a> </div>
            </div>
        </div>
    </nav>
    <!-- END Topbar -->
    <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/form.jpg);"
        data-overlay="8">
        <div class="container text-center">

            <div class="row h-full">
                <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

                    <blockquote class="blockquote" style="color: whitesmoke;">
                        <p>Investir dans la formation c'est conjuguer au présent mais aussi au futur le souci des hommes
                            et le souci des résultats.</p>
                        <footer>Philippe Bloch</footer>
                    </blockquote>
                    <br><br><br>

                </div>
                <div class="col-12 align-self-end text-center">
                    <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="formation"><span></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- END Header -->


    <!-- Main container -->
    <section id="formation">
        <div class="container mb-70">
            <div class="text-center mb-70">
                <h1>Voici les formations proposées par le groupe Emset-P</h1>
            </div>
            <div class="row gap-y">
                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/Photoshop.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 200%;color:  #a9a9a9;">PHOTOSHOP</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style="padding-top: 10%;background-color: orangered;">
                                <p>Toutes vos idées peuvent prendre vie avec Photoshop, la meilleure application de
                                    design graphique au monde. Créez et enrichissez des photos, des illustrations et des
                                    objets 3D. Concevez des sites web et des applications mobiles. Éditez des vidéos,
                                    simulez des peintures plus vraies que nature, et faites bien plus encore. Photoshop
                                    vous aide à passer de l’idée à la réalité.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/autocad.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 200%;color:  #a9a9a9;">AUTOCAD</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style="padding-top: 25%;background-color: orangered;">
                                <p>AutoCAD est un logiciel de dessin assisté par ordinateur.Si AutoCAD est le leader
                                    incontesté dans le domaine de la CAO depuis des années désormais ce n'est pas pour
                                    rien. Ce logiciel est très complet et répondra à tous les besoins des
                                    professionnels.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/vis.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 150%;color:  #a9a9a9;">LANGAGES DE PROGRAMMATION</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 25%;background-color: orangered;">
                                <p>En informatique, un langage de programmation est une notation conventionnelle
                                    destinée à formuler des algorithmes et produire des programmes informatiques:
                                    VB.NET, Python, Java, C/C+++, JavaScript, Kotlin, CSS, HTML …</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/GESTION.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 200%;color:  #a9a9a9;">GESTION</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 15%;background-color: orangered;">
                                <p>La gestion d'entreprise ou la gestion est, d'après le Plan comptable général, la mise
                                    en œuvre des ressources de l'entreprise en vue d'atteindre les objectifs
                                    préalablement fixés (chiffre d'affaires, parts de marché, etc.) dans le cadre d'une
                                    politique déterminée: comptabilité générale, comptabilité analytique, statistiques,
                                    marketing..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/LANGUE.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 150%;color:  #a9a9a9;">LANGUES VIVANTES</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 25%;background-color: orangered;">
                                <p>Une langue est dite vivante lorsqu'elle a des locuteurs qui l'utilisent spontanément
                                    pour la communication interpersonnelle: Anglais, Français, Espagnol, Allemand..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/eco.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 150%;color:  #a9a9a9;">SCIENCES ECONOMIQUES</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style=" padding-top: 7%;background-color: orangered;">
                                <p>Les sciences économiques est une discipline des sciences humaines et sociales qui
                                    étudie de façon scientifique le fonctionnement de l'économie c'est-à-dire la
                                    description et l'analyse de la production, des échanges et de la consommation des
                                    biens et des services: Economie, Commerce, Fiscalité, Législation, Gestion
                                    prévisionnelle et budgétaire, Analyse financière et comptable</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/reseau.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 150%;color:  #a9a9a9;">RESEAUX INFORMATIQUES</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style="background-color: orangered;">
                                <p>Un réseau informatique est un ensemble d'ordinateurs reliés entre eux qui échangent
                                    des informations: Installation d’un poste informatique Système d’exploitation « open
                                    source » Architecture et fonctionnement d’un Réseau Informatique,
                                    Administration de Réseaux Supervision de Réseaux Informatiques Diagnostic et
                                    résolution de problèmes Optimisation d’un poste de travail Notions de sécurité des
                                    Réseaux Informatiques</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/office.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 200%;color:  #a9a9a9;">BUREAUTIQUE</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style="padding-top: 25%;background-color: orangered;">
                                <p>La bureautique est un terme qui regroupe les logiciels qui aident l'entreprise dans
                                    la rédaction de documents. Microsoft Office est une suite bureautique : Word,
                                    EXCEL,PowerPoint,Outlook..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" style="background-color: purple;">
                                <div style=" padding: 25%;">
                                    <img src="assets/img/Formation/job.png" style="width: 200px;height:150px">
                                    <h6 style="font-size: 100%;color:  #a9a9a9;">TECHNIQUES DE RECHERCHE D'EMPLOI</h6>
                                </div>
                            </div>
                            <div class="flip-card-back" style="padding-top: 10%;background-color: orangered;">
                                <p>Une recherche d'emploi efficace doit être préparée : vous allez devoir créer vos
                                    propres outils, comme le CV ou la lettre de motivation, mais aussi vous imprégner
                                    des réalités du marché du travail, savoir identifier les entreprises à démarcher,
                                    vous préparer à l'entretien d'embauche, négocier avec un futur employeur.
                                    En bref: Réussir un entretien</p>
                            </div>
                        </div>
                    </div>
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