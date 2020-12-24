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
    <title>EMSET-P | Diplome</title>
    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/tab.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link active">Diplomes</a></li>
                    <li class="nav-item"><a class="nav-link" href="Formations.php">Formations</a></li>
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
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/backdoc.jpg);"
        data-overlay="8">
        <div class="container text-center">

            <div class="row h-full">
                <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

                    <h1 class="display-4">Diplômes Accrédités Et Reconnues Par L'état</h1>
                    <br>
                    <p class="lead text-white fs-20"><span class=" mark-border" style="color: red;">Possibilité De La Contribution De L'état
                            Aux Frais De Scolarité.</span></p>

                    <br><br><br>
                    <div class="hidden-sm-down">
                        <a class="btn btn-lg btn-round  btn-outline btn-white hidden-sm-down" href="#"
                            data-scrollto="TS">Technicien Spécialisé</a>
                        <a class="btn btn-lg btn-round w-200 btn-outline btn-white hidden-sm-down" href="#"
                            data-scrollto="T">Technicien</a>
                        <a class="btn btn-lg btn-round w-200 btn-outline btn-white hidden-sm-down" href="#"
                            data-scrollto="Qualif">Qualification</a>
                    </div>
                    <div class="hidden-md-up">
                        <a class="btn btn-lg btn-round btn-outline btn-white w-250" href="#"
                            data-scrollto="TS">Technicien
                            Spécialisé</a><br><br>
                        <a class="btn btn-lg btn-round btn-outline btn-white w-250" href="#"
                            data-scrollto="T">Technicien</a><br><br>
                        <a class="btn btn-lg btn-round btn-outline btn-white w-250" href="#"
                            data-scrollto="Qualif">Qualification</a>
                    </div>
                </div>

            </div>

        </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <section class="section" id="TS">
        <div class="container">
            <header class="section-header">
                <h2>Technicien Spécialisé</h2>
                <hr>
                <p class="lead" style="color: orangered;font-size: x-large;">Conditions d'admission : <a
                        style="color: black;">Titulaire d’un BAC ou Diplôme de Technicien</a></p><br>
                <p class="lead" style="color: orangered;font-size: x-large;">Durée de la formation : <a
                        style="color: black;">2 ANS</a></p>
                <p class="lead" style="color: orangered;font-size: x-large;">Objectifs professionnels : <br>

                </p>
            </header>
            <div class="row gap-5">


                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'GDE')" id="defaultOpen">Gestion des
                        Entreprises</button>
                    <button class="tablinks" onclick="openCity(event, 'DI')">Développement Informatique</button>
                    <button class="tablinks" onclick="openCity(event, 'CI')">Commerce International</button>
                    <button class="tablinks" onclick="openCity(event, 'SR')">Systèmes et Réseaux</button>
                    <button class="tablinks" onclick="openCity(event, 'GTL')">Gestion en Transport et
                        Logistique</button>
                    <button class="tablinks" onclick="openCity(event, 'FC')">Financier Comptable</button>
                </div>

                <div id="GDE" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’exécution des tâches de gestion des entreprises.
                                </li>
                                <li>Les compétences nécessaires pour l’utilisation de l’outil informatique.</li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Exécuter des tâches de techniques de gestion des entreprises</li>
                        <li>Maitriser l’outil informatique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Métier et processus de formation</li>
                        <li>Organisation d’Entreprise</li>
                        <li>Comptabilité Générale</li>
                        <li>Statistiquese</li>
                        <li>Mathématiques Financières</li>
                        <li>Action Commerciale</li>
                        <li>Informatique 1 : Traitements de Textes</li>
                        <li>Informatique 2 : Tableur</li>
                        <li>Communication en français</li>
                        <li>Communication en anglais</li>
                        <li>Stage I ou PFA</li>
                        <li>Comptabilité Analytique</li>
                        <li>Administration et Ressources Humaines</li>
                        <li>Gestion des approvisionnements</li>
                        <li>Gestion Prévisionnelle</li>
                        <li>Gestion Financière</li>
                        <li>Législation Fiscale et des Affaires</li>
                        <li>Législation du travail</li>
                        <li>Techniques de Recherche d’Emploi</li>
                        <li>Techniques d’expression et de communication</li>
                        <li>Communication Professionnelle en Araben</li>
                        <li>Informatique 3 : PréAO, Internet & Messagerie</li>
                        <li>Informatique 4 : BD & Logiciel de Gestion</li>
                        <li>Projet de Fin de Formation</li>
                        <li>Stage en Entreprise</li>
                    </ul>
                </div>

                <div id="DI" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques.
                                </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences nécessaires pour l’exécution des tâches de techniques de
                                    développement informatique.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Maîtriser l’outil informatique et les techniques de développement informatique.</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>étier et formation</li>
                        <li>L’entreprise et son environnement</li>
                        <li>Notions de mathématiques appliquées à l’informatique</li>
                        <li>Gestion du temps</li>
                        <li>Veille technologique</li>
                        <li>Production de documents</li>
                        <li>Communication interpersonnelle</li>
                        <li>Logiciels d’application</li>
                        <li>Techniques de programmation structurée</li>
                        <li>Langage de programmation structurée</li>
                        <li>Programmation événementielle</li>
                        <li>Installation d’un poste informatique</li>
                        <li>Système d’exploitation « open source »</li>
                        <li>Introduction aux réseaux informatiques</li>
                        <li>Communication en anglais dans un contexte de travail</li>
                        <li>Soutien technique en milieu de travail (Stage.I)</li>
                        <li>Système de gestion de bases de données I</li>
                        <li>Conception et modélisation d’un système d’information</li>
                        <li>Analyse et conception orientée objet</li>
                        <li>Programmation orientée objet</li>
                        <li>Programmation Client-serveur</li>
                        <li>Déploiement d’applications</li>
                        <li>Système de gestion de base de données II</li>
                        <li>Applications hypermédias</li>
                        <li>Programmation de sites Web dynamiques</li>
                        <li>Assistance technique à la clientèle</li>
                        <li>Initiation à la gestion de projets informatiques</li>
                        <li>Recherche d’emploi</li>
                        <li>Projet de conception de fin de formation</li>
                        <li>Intégration au milieu du travail (Stage II)</li>
                    </ul>
                </div>

                <div id="CI" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>les compétences nécessaires à l’application des techniques commerciales, et de
                                    marketing international
                                </li>
                                <li>les compétences nécessaires au contrôle des risques et à l’analyse des opérations
                                    financières</li>
                                <li>les compétences nécessaires permettant de traiter la logistique juridique et
                                    administrative des opérations d’import/export</li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Exécuter des tâches de techniques de commerce international</li>
                        <li>Maîtriser l’outil informatique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Marketing Fondamental</li>
                        <li>Commerce International</li>
                        <li>Statistiques & Probabilités Appliquées</li>
                        <li>Organisation des entreprises</li>
                        <li>Economie Générale</li>
                        <li>Bureautique</li>
                        <li>Comptabilité Générale</li>
                        <li>Environnement Juridique De L’entreprise</li>
                        <li>Communication en français</li>
                        <li>Communication en anglais</li>
                        <li>Stage En Entreprise (1ère année)</li>
                        <li>Marketing International</li>
                        <li>Logistique</li>
                        <li>Finances Internationales</li>
                        <li>Mathématiques Financières</li>
                        <li>Informatiques & multimédias</li>
                        <li>Comptabilité Analytique</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Communication Professionnelle en arabe</li>
                        <li>Stage en Entreprise (2ème année)</li>
                    </ul>
                </div>
                <div id="SR" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>les compétences nécessaires pour la mise en œuvre et l’administration des réseaux
                                    informatiques. </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences nécessaires pour l’utilisation de l’outil informatique.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Exécuter des tâches de techniques de réseaux informatiques</li>
                        <li>Maîtriser l’outil informatique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>étier et formation</li>
                        <li>L’entreprise et son environnement</li>
                        <li>Notions de mathématiques appliquées à l’informatique</li>
                        <li>Gestion du temps</li>
                        <li>Veille technologique</li>
                        <li>Production de documents</li>
                        <li>Communication interpersonnelle</li>
                        <li>Logiciels d’application</li>
                        <li>Installation d’un poste informatique</li>
                        <li>Système d’exploitation « open source »</li>
                        <li>Architecture et fonctionnement d’un Réseau Informatique</li>
                        <li>Technique de programmation structurée</li>
                        <li>Langage de programmation structurée</li>
                        <li>Programmation événementielle</li>
                        <li>Communication en anglais dans un contexte de travail</li>
                        <li>Soutien technique en milieu de travail (Stage.I)</li>
                        <li>Configuration d’un routeur</li>
                        <li>Conception de réseaux locaux commutés</li>
                        <li>Installation de serveurs</li>
                        <li>Administration de Réseaux Informatiques</li>
                        <li>Supervision de Réseaux Informatiques</li>
                        <li>Diagnostic et résolution de problèmes</li>
                        <li>Optimisation d’un poste de travail</li>
                        <li>Notions de sécurité des Réseaux Informatiques</li>
                        <li>Introduction à l’implantation de Réseaux Informatiques Interconnectés</li>
                        <li>Installation d’applications propres à Internet</li>
                        <li>Assistance technique à la clientèle</li>
                        <li>Initiation à la gestion de projets informatiques</li>
                        <li>Recherche d’emploi</li>
                        <li>Projet de conception de fin d’études</li>
                        <li>Intégration au milieu du travail (Stage II)</li>
                    </ul>
                </div>
                <div id="GTL" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques.
                                </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>les compétences nécessaires pour l’utilisation des outils appropriés au transport et
                                    à la logistique.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Exécuter les tâches de gestion en transport et logistique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li> globale</li>
                        <li>Approche des transports routiers, ferroviaires et fluviaux</li>
                        <li>Réglementation Douanière et de Change</li>
                        <li>Géographie des flux</li>
                        <li>Économie des transports</li>
                        <li>Transport de voyageurs</li>
                        <li>Outils de gestion logistique : Gestion d’entrepôt et conditionnement</li>
                        <li>Organisation des Entreprises</li>
                        <li>Environnement Juridique des Entreprises</li>
                        <li>Marketing</li>
                        <li>Mathématiques et statistiques</li>
                        <li>Économie générale</li>
                        <li>Comptabilité générale</li>
                        <li>Informatique Bureautique</li>
                        <li>Techniques de Communication et d’Expression en Français</li>
                        <li>Techniques de Communication et d’Expression en Anglais</li>
                        <li>Projet ou Stage tuteuré</li>
                        <li>Techniques du commerce international</li>
                        <li>Outils de gestion logistique : Gestion de production</li>
                        <li>Outils de gestion logistique : gestion des stocks et des approvisionnements</li>
                        <li>Contrôle de gestion logistique</li>
                        <li>Import – Export</li>
                        <li>Qualité</li>
                        <li>Approche des transports aériens et maritimes</li>
                        <li>Systèmes logistiques</li>
                        <li>Informatique Appliquée à la logistique</li>
                        <li>Marketing International</li>
                        <li>Négociation commerciale</li>
                        <li>Gestion des Ressources Humaines</li>
                        <li>Gestion Financière</li>
                        <li>Droit privé des transports</li>
                        <li>Législation de Travail</li>
                        <li>Techniques de Recherche d’Emploi</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Arabe</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Projet de Fin de Formation</li>
                        <li>Stage en Entreprise</li>
                    </ul>
                </div>
                <div id="FC" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques. </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences nécessaires pour l’exécution des tâches du financier comptable.</li>
                                <li>Les compétences nécessaires pour l’utilisation des outils appropriés à la
                                    comptabilité et aux finances</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>Exécuter des tâches du financier comptable</li>
                        <li>Maîtriser l’outil informatique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul style="color: black;" class="list-unstyled">
                        <li>é Générale</li>
                        <li>Organisation des entreprises</li>
                        <li>Mathématiques financières</li>
                        <li>Statistiques</li>
                        <li>Economie & commerce</li>
                        <li>Fiscalité</li>
                        <li>Législation</li>
                        <li>Bureautique</li>
                        <li>Internet</li>
                        <li>Techniques de communication et d’expression en Français</li>
                        <li>Techniques de communication et d’expression en Anglais</li>
                        <li>Stage En Entreprise (1ère année)</li>
                        <li>é analytique</li>
                        <li>Gestion financière</li>
                        <li>Gestion prévisionnelle et budgétaire</li>
                        <li>Introduction au contrôle de gestion</li>
                        <li>é des sociétés</li>
                        <li>Analyse financière et comptable</li>
                        <li>Techniques de banque et de crédit</li>
                        <li>Notions en gestion de trésorerie</li>
                        <li>Informatique & Multimédias</li>
                        <li>Techniques de recherche d’emploi</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en arabe</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Projet de Fin de Formation</li>
                        <li>Stage en Entreprise (2ème année)</li>
                    </ul>
                </div>

            </div>


        </div>
    </section>
    <!------------------------------------------------------------------------------>
    <section class="section section-inverse" id="T">
        <div class="container">
            <header class="section-header">
                <h2 style="color: white;">Technicien</h2>
                <hr>
                <p class="lead" style="color: orangered;font-size: x-large;">Conditions d'admission : <a
                        style="color: white;">Niveau Baccalauréat ou Diplôme de Qualification professionnelle</a></p>
                <br>
                <p class="lead" style="color: orangered;font-size: x-large;">Durée de la formation : <a
                        style="color: white;">2 ANS</a></p>
            </header>


            <div class="row gap-5">


                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'ETL')" id="defaultOpen">Exploitation en Transport
                        et Logistique</button>
                    <button class="tablinks" onclick="openCity(event, 'GI')">Gestion Informatisée</button>
                    <button class="tablinks" onclick="openCity(event, 'Commercial')">Commercial</button>
                    <button class="tablinks" onclick="openCity(event, 'Comptable')">Comptable</button>
                </div>

                <div id="ETL" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques. </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>les compétences nécessaires pour l’utilisation des outils appropriés à
                                    l’exploitation en transport et logistique.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Exécuter les tâches d’exploitation en transport et logistique</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Introduction à la logistique</li>
                        <li>Techniques des transports routiers</li>
                        <li>Techniques des transports ferroviaires et fluviaux</li>
                        <li>Géographie des flux</li>
                        <li>Économie des transports</li>
                        <li>Transport de voyageurs</li>
                        <li>Outils de gestion d’entrepôt et conditionnement</li>
                        <li>Mathématiques Financières</li>
                        <li>L’Entreprise et son Environnement</li>
                        <li>Droit Commercial</li>
                        <li>Économie Générale</li>
                        <li>Comptabilité générale</li>
                        <li>Outils Bureautique</li>
                        <li>Techniques de Communication et d’Expression en Français</li>
                        <li>Techniques de Communication et d’Expression en Anglais</li>
                        <li>Projet ou Stage en entreprise I</li>
                        <li>Techniques des transports aériens</li>
                        <li>Techniques des transports maritimes</li>
                        <li>Systèmes logistiques</li>
                        <li>Informatique Appliquée à la logistique</li>
                        <li>Outils de gestion des stocks et des approvisionnements</li>
                        <li>Informatiques & Multimédias</li>
                        <li> à la Gestion des Ressources Humaines</li>
                        <li>Gestion Financière</li>
                        <li>Droit privé des transports</li>
                        <li>Législation de Travail</li>
                        <li>Techniques de Recherche d’Emploi</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Arabe</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Projet de Fin de Formation</li>
                        <li>Stage en entreprise II</li>
                    </ul>
                </div>

                <div id="GI" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques appliqués au
                                    commerce et à la gestion.</li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences relatives aux domaines la communication et des NTIC spécifiques au
                                    commerce et à la gestion des relations clients fournisseurs.</li>
                                <li>Les compétences nécessaires à la mise en œuvre et au suivi de la gestion des ventes
                                    et des approvisionnements.</li>
                                <li>Les compétences nécessaires pour participer activement à une action de prospection
                                    et négociation commerciale.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Exécuter des tâches du technicien commercial</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul class="list-unstyled">
                        <li> fondamental</li>
                        <li>Techniques de prospection commerciale</li>
                        <li>Action commerciale</li>
                        <li>Environnement Economique</li>
                        <li>Droit Social & Droit Commercial</li>
                        <li>Comptabilité Générale</li>
                        <li>Mathématiques financières</li>
                        <li>Bureautique</li>
                        <li>Communication en Français</li>
                        <li>Communication en Anglais</li>
                        <li>Stage En Entreprise (1ère année)</li>
                        <li>Techniques De Ventes</li>
                        <li>Gestion de la force de vente</li>
                        <li>Commerce International</li>
                        <li>Gestion des stocks et approvisionnements</li>
                        <li>Comptabilité Analytique</li>
                        <li>Statistiques Appliquées</li>
                        <li>Droit des Affaires</li>
                        <li>Informatique & Multimédias</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Communication Professionnelle en arabe</li>
                        <li>Stage En Entreprise (2ème année)</li>
                    </ul>
                </div>

                <div id="Commercial" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques appliqués au
                                    commerce et à la gestion.</li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences relatives aux domaines la communication et des NTIC spécifiques au
                                    commerce et à la gestion des relations clients fournisseurs.</li>
                                <li>Les compétences nécessaires à la mise en œuvre et au suivi de la gestion des ventes
                                    et des approvisionnements.</li>
                                <li>Les compétences nécessaires pour participer activement à une action de prospection
                                    et négociation commerciale.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Exécuter des tâches de technicien commercial</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul class="list-unstyled">
                        <li> fondamental</li>
                        <li>Techniques de prospection commerciale</li>
                        <li>Action commerciale</li>
                        <li>Environnement Economique</li>
                        <li>Droit Social & Droit Commercial</li>
                        <li>Comptabilité Générale</li>
                        <li>Mathématiques financières</li>
                        <li>Bureautique</li>
                        <li>Communication en Français</li>
                        <li>Communication en Anglais</li>
                        <li>Stage En Entreprise (1ère année)</li>
                        <li>Techniques De Ventes</li>
                        <li>Gestion de la force de vente</li>
                        <li>Commerce International</li>
                        <li>Gestion des stocks et approvisionnements</li>
                        <li>Comptabilité Analytique</li>
                        <li>Statistiques Appliquées</li>
                        <li>Droit des Affaires</li>
                        <li>Informatique & Multimédias</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Anglais</li>
                        <li>Communication Professionnelle en arabe</li>
                        <li>Stage En Entreprise (2ème année)</li>
                    </ul>
                </div>
                <div id="Comptable" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques appliqués à
                                    la gestion. </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences nécessaires pour analyser et contrôler l’activité de l’entreprise.
                                </li>
                                <li>Les compétences nécessaires pour l’exécution des tâches de technicien comptable à
                                    savoir tenir la comptabilité de l’entreprise.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Exécuter des tâches du technicien comptable</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Comptabilité Générale</li>
                        <li>Statistiques Appliquées</li>
                        <li>Mathématiques financières</li>
                        <li>Economie &Organisation des entreprises</li>
                        <li>Droit Social & Droit Commercial</li>
                        <li>Bureautique</li>
                        <li>Communication en Français</li>
                        <li>Communication en Anglais</li>
                        <li>Stage En Entreprise (1ère année)</li>
                        <li>Comptabilité de Sociétés</li>
                        <li>Comptabilité Analytique</li>
                        <li>Contrôle de Gestion</li>
                        <li>Finance d’entreprise</li>
                        <li>Gestion des Stocks</li>
                        <li>Fiscalité Des Entreprises</li>
                        <li>Informatique & Multimédias</li>
                        <li>Communication Professionnelle en Français</li>
                        <li>Communication Professionnelle en Arabe</li>
                        <li>Stage En Entreprise (2ème année)</li>
                    </ul>
                </div>


            </div>


        </div>
    </section>
    <!------------------------------------------------------------------------------>
    <section class="section" id="Qualif">
        <div class="container">
            <header class="section-header">
                <h2>Qualification</h2>
                <hr>
                <p class="lead" style="color: orangered;font-size: x-large;">Conditions d'admission : <a
                        style="color: black;">Niveau 9<span style="font-size: small;">ème</span> année</a></p><br>
                <p class="lead" style="color: orangered;font-size: x-large;">Durée de la formation : <a
                        style="color: black;">1 ANS</a></p>
            </header>
            <div class="row gap-5">


                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'ODS')" id="defaultOpen">Opérateur de
                        Saisie</button>
                </div>

                <div id="ODS" class="tabcontent">
                    <h5 style="color: blue;">Objectifs professionnels : </h5>
                    <ul class="list-unstyled">
                        <li>Rendre le stagiaire efficace dans l’exercice d’une profession</li>
                        <li>Assurer l’intégration harmonieuse du stagiaire à la vie professionnelle</li>
                        <li>Favoriser l’évolution et l’approfondissement des savoirs professionnels à savoir :<ul>
                                <li>Les compétences nécessaires pour l’utilisation des outils informatiques. </li>
                                <li>Les compétences nécessaires pour communiquer en milieu de travail.</li>
                                <li>Les compétences nécessaires pour l’exécution des tâches de techniques d’opérateur de
                                    saisie.</li>
                            </ul>
                        </li>
                        <li>Assurer la mobilité professionnelle et permettre de se préparer à la recherche dynamique
                            d’un emploi</li>
                    </ul>
                    <h5 style="color: blue;">Objectifs de la formation : </h5>
                    <ul class="list-unstyled">
                        <li>Maîtriser l’outil informatique</li>
                        <li>Exécuter des tâches du technicien comptable</li>
                        <li>Communiquer et connaitre l’entreprise</li>
                        <li>Se préparer à la vie professionnelle</li>
                    </ul>
                    <h5 style="color: blue;">Programme de la formation : </h5>
                    <ul class="list-unstyled">
                        <li> de communication et d’expression</li>
                        <li>Anglais Commercial</li>
                        <li>Structure et fonctionnement des ordinateurs et de leurs périphériques</li>
                        <li>Système d’exploitation</li>
                        <li>Logiciels de traitement de texte</li>
                        <li>Réseaux informatiques et Internet</li>
                        <li>Applications Informatiques : Site Web</li>
                        <li>Comptabilité Générale</li>
                        <li>Législation du travail</li>
                        <li>Gestion des Entreprises et Commerce</li>
                        <li>Exploitation des bases de données (Access)</li>
                        <li>Tableurs/Grapheurs</li>
                        <li>Outils de PAO</li>
                        <li>Applications Informatiques : Programmation</li>
                        <li>Comptabilité Générale Informatisée</li>
                        <li> de recherche d’emploi</li>
                        <li>Mathématiques Financières & Statistiques Appliquées</li>
                        <li>Installation et Assemblage</li>
                        <li>Projet de Fin de Formation</li>
                        <li>Stage en Entreprise</li>
                    </ul>
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






    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>

</html>