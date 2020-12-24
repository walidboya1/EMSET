<?php
  require '../required.php';
  isadmin();
  $cadre = $_GET['cadre'];
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
    <title>EMSET-P | Admin</title>
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">

        <div class="container">
            <h2 class="text-white text-center">Ajouter les informations du Cadre</h2>
            <br>

            <div class="row">
                <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" <?php echo"action='cadre_signupC.php?cadre=".$cadre."'";?> method="POST">
                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Complet">
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" name="CIN" id="CIN" placeholder="CIN">
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" name="upTele" id="upTele" placeholder="Telephone">
                    </div>
                    
                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="Email" class="form-control" name="reg_email" id="reg_email" placeholder="Email">
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Pass">
                    </div>

                    <button  class="btn btn-block btn-lg btn-success" id="submit" type="submit">Ajouter</button>
                    
                    <?php
          $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($fullurl,"login=false") == true)
          {
             echo "<p style='text-align: center;color:red;'>Utilisateur existe</p>";

          }
          if(strpos($fullurl,"login=true") == true)
          {
             echo "<p style='text-align: center;color:green;'>Utilisateur Ajouté</p>";
             
          }
        ?>
                </form>

            </div>

        </div>
    </section>
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src='../assets/js/icons.js'></script>
</body>

</html>