<?php
  require '../required.php';
  isadmin();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/logo.png">
    <link rel="icon" href="../assets/img/logo.png">


    <title>EMSET-P | Admin</title>
</head>

<body>
    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Topbar
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">
            <div class="topbar-left">
                <button class="topbar-toggler">&#9776;</button>
                <a class="topbar-brand" href="index.php"> <img class="logo-default" src="../assets/img/logo.png"
                        alt="logo"> <img class="logo-inverse" src="../assets/img/logo.png" alt="logo"> </a>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav nav">
                    
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Etudiant.php">Etudiant</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Professeur.php">Professeur</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Cours.php">Cours</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Biblio.php">Biblio</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Filiere.php">Filiere</a></li>
                    <li class="nav-item"><a class="nav-link  active" style="color: blue;">Avis</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Emplois.php">Emplois</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Activite.php">Activite</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: blue;" href="Admin_Admin.php">Admin</a></li>
                </ul>
                <div class="d-inline-flex ml-30"> <a class="btn btn-sm btn-danger mr-4" href="../logout.php">Se
                        deconnecter</a> </div>
            </div>
        </div>
    </nav>
    <!---- END topbar---->
    <!-- Header -->
    <header class="header header-inverse h-fullscreen">
        <div class="header-overlay opacity-90" style="background-color: #5BFF62;"></div>
        <div class="container text-center">
            <div class="row h-full">
                <div class="col-12 col-lg-8 offset-lg-2 align-self-center">
                    <h5 class="display-4">Avis</h5>
                </div>
            </div>
        </div>
    </header>
    <!-- END Header -->
    <!-- Main container -->
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Avis</th>
                <th>Date</th>
                <th>Filiere</th>
            </tr>
        </thead>
        <tbody id="output">
            <script src="../assets/js/jquery.min.js"></script>
            <script>
            $(document).ready(function() {
                function getData() {
                    $.ajax({
                        type: 'POST',
                        url: 'Avis_data.php',
                        success: function(data) {
                            $('#output').html(data);
                        }
                    });
                }
                getData();
                setInterval(function() {
                    getData();
                }, 1000); // it will refresh your data every 1 sec

            });
            </script>

        </tbody>
    </table>
    <a class='btn btn-primary' href='Avis_Add.php' data-provide='lightbox'>Ajouter Avis</a>
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer" style="background-color: black;">
        <div class="container">
            <p class="text-center text-md-center">Groupe EMSET-P, Copyright © 2020 | Réalisé par Walid BOURAYA</p>
        </div>
    </footer>
    <!-- END Footer -->
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.min.js"></script>
    <script src="../assets/js/script.js"></script>


</body>

</html>