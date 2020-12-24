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

          <style>
          .btnes {
              background-color: black;
              border: 1;
              color: white;
              width: 200px;
              padding: 16px 32px;
              text-align: center;
              font-size: 16px;
              font-family: themify;
              text-transform: uppercase;
              margin: 4px 2px;
              opacity: 0.9;
              transition: 0.3s;
          }

          .btnes:hover {
              opacity: 1
          }

          .btne {
              background-color: transparent;
              border: 1;
              color: black;
              width: 200px;
              padding: 16px 32px;
              text-align: center;
              font-size: 16px;
              font-family: themify;
              text-transform: uppercase;
              margin: 4px 2px;
              opacity: 0.6;
              transition: 0.3s;
          }

          .btne:hover {
              opacity: 1
          }

          hr.rounded {
  border-top: 8px solid blue;
  border-radius: 5px;
}
          </style>
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
                          <li class="nav-item"><a class="nav-link" href="Formations.php">Formations</a></li>
                          <li class="nav-item"><a class="nav-link active">Activités</a></li>
                          <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                      </ul>
                      <div class="d-inline-flex ml-30"> <a class="btn btn-sm btn-primary mr-4" href="page-login.php">Se
                              Connecter</a> </div>
                  </div>
              </div>
          </nav>
          <!-- END Topbar -->
          <!-- Header -->
          <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/activite.jpg);"
              data-overlay="8">
              <div class="container text-center">

                  <div class="row h-full">
                      <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

                          <blockquote class="blockquote" style="color: whitesmoke;">
                              <p>L'enseignement devrait être ainsi : celui qui le reçoit le recueille comme un don inestimable mais jamais comme une contrainte pénible.</p>
                              <footer>Albert Einstein</footer>
                          </blockquote>
                          <br><br><br>

                      </div>
                      <div class="col-12 align-self-end text-center">
                          <a class="scroll-down-1 scroll-down-inverse" href="#"
                              data-scrollto="section-contact"><span></span></a>
                      </div>
                  </div>

              </div>
          </header>

          <!-- END Header -->


          <!-- Main container -->

          <section class="section">

              <section class="Scolaire-form">
                  <div class="container text-center">

                      <div class="form-group"><a class="show-Scolaire-form">
                              <button type="button" name="Scolaire"
                                  class="btne btn-round btn-outline">Scolaire</button></a>
                          <a class="show-ParaScolaire-form"><button type="button" name="ParaScolaire"
                                  class="btnes btn-round">ParaScolaire</button></a>
                      </div>
                      
                              <?php
                                $sel = "SELECT * FROM `Activite` where type = 'Scolaire' ";
                                $qrydisplay = mysqli_query($connection, $sel);
                                $y = 0;
                                while($row = mysqli_fetch_array($qrydisplay))
                                {
                                    $id  =  $row['id'];
                                    $Titre  =  $row['titre'];
                                    $descrip = $row['descrip'];
                                    $URL = "";
                                    $y = $y + 1;
                                   echo "<div class='container' style ='border: 12px solid #fb7424;
                                   border-radius: 10px;
                                   margin-top: 15px;
                                   margin-bottom: 15px;'>
                          <div class='row' ><div class='col-md-6 align-self-center text-center text-md-left' style='border: 3px solid blue;margin-left: 15px; '>
                                  <h2>".$Titre."</h2><br>
                                  <p>".$descrip."</p></div>";

                                  echo "<div class='col-md-5 mx-auto text-center mt-8 mt-md-0'>
                                          <div class='swiper-container swiper-container-horizontal'>
                                             <div class='swiper-wrapper'
                                          style='transform: translate3d(-1350px, 0px, 0px); transition-duration: 0ms;'>";

                                    $sel2 = "SELECT * FROM `image` where id_image =".$id;
                                    $qrydisplay2 = mysqli_query($connection, $sel2);
                                    $x = 0;
                                    while($row2 = mysqli_fetch_array($qrydisplay2))
                                    {
                                      $Activite  =  $row2['image'];
                                      echo  "<div class='swiper-slide swiper-slide-duplicate-next'
                                      data-swiper-slide-index='".$x."' style='width: 450px;'><img
                                          src='Activite/".$Activite."' ></div>'";
                                
                                    $x = $x + 1;
                                  } 
                                
                                echo "</div>
                              


                                      

                                      <div
                                          class='swiper-pagination swiper-pagination-clickable swiper-pagination-bullets'>
                                          <span class='swiper-pagination-bullet'></span><span
                                              class='swiper-pagination-bullet'></span><span
                                              class='swiper-pagination-bullet swiper-pagination-bullet-active'></span>
                                      </div>

                                  </div>
                              </div></div></div><hr class='rounded'>";};?>

                          </div>
              </section>

              <section class="ParaScolaire-form" style="Visibility: none;">
                  <div class="container text-center">

                      <div class="form-group"><a class="show-Scolaire-form">
                              <button type="button" name="Scolaire"
                                  class="btnes btn-round btn-outline">Scolaire</button></a>
                          <a class="show-ParaScolaire-form"> <button type="button" name="ParaScolaire"
                                  class="btne btn-round">ParaScolaire</button></a>
                      </div>


                      <?php
                                $sel = "SELECT * FROM `Activite` where type = 'Parascolaire' ";
                                $qrydisplay = mysqli_query($connection, $sel);
                                while($row = mysqli_fetch_array($qrydisplay))
                                {
                                    $id  =  $row['id'];
                                    $Titre  =  $row['titre'];
                                    $descrip = $row['descrip'];
                                    $URL = "";
                                   echo "<div class='container' style ='border: 12px solid #fb7424;
                                   border-radius: 10px;
                                   margin-top: 15px;
                                   margin-bottom: 15px;'>
                          <div class='row' ><div class='col-md-6 align-self-center text-center text-md-left' style='border: 3px solid blue;margin-left: 15px; '>
                                  <h2>".$Titre."</h2><br>
                                  <p>".$descrip."</p></div>";

                                  echo "<div class='col-md-5 mx-auto text-center mt-8 mt-md-0'>
                                          <div class='swiper-container swiper-container-horizontal'>
                                             <div class='swiper-wrapper'
                                          style='transform: translate3d(-1350px, 0px, 0px); transition-duration: 0ms;'>";

                                    $sel2 = "SELECT * FROM `image` where id_image =".$id;
                                    $qrydisplay2 = mysqli_query($connection, $sel2);
                                    $z = 0;
                                    while($row2 = mysqli_fetch_array($qrydisplay2))
                                    {
                                      $Activite  =  $row2['image'];
                                      echo  "<div class='swiper-slide swiper-slide-duplicate-next'
                                      data-swiper-slide-index='".$z."' style='width: 450px;'><img
                                          src='Activite/".$Activite."' ></div>'";
                                
                                    $z = $z + 1;
                                  } 
                                
                                echo "</div>
                              


                                      

                                      <div
                                          class='swiper-pagination swiper-pagination-clickable swiper-pagination-bullets'>
                                          <span class='swiper-pagination-bullet'></span><span
                                              class='swiper-pagination-bullet'></span><span
                                              class='swiper-pagination-bullet swiper-pagination-bullet-active'></span>
                                      </div>

                                  </div>
                              </div></div></div><hr class='rounded'>";};?>



                  </div>
              </section>

          </section>
          <!-- END Main container -->

          <!-- Footer -->
          <footer class="site-footer" style="background-color: black;">
              <div class="container">
                  <p class="text-center text-md-center">Groupe EMSET-P, Copyright © 2020 | Réalisé par Walid BOURAYA</p>
              </div>
          </footer>
          <!-- END Footer -->

          <script type="text/javascript">
          //---------------------------------
          $('.ParaScolaire-form a.show-Scolaire-form').click(function() {
              $('.ParaScolaire-form').hide();
              $('.Scolaire-form').show();
          });
          $('.Scolaire-form a.show-ParaScolaire-form').click(function() {
              $('.Scolaire-form').hide();
              $('.ParaScolaire-form').show();
          });
          </script>
      </body>

      </html>