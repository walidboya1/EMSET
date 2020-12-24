<?php

  include 'login.php';
  if (!empty($_SESSION['login_user'])){
    header("location: index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>TELERADIO - Connexion</title>
    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="icon" href="assets/img/logo.png">
</head>

<body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg-girl.jpg);">
    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
        <h5 class="text-uppercase text-center">Se Connecter</h5>
        <br>
        <br>
        <form id="form_login" name="form_login" action="login.php" method="POST">
            <div class="form-group">
                <input type="email" id="log_email" name="log_email" class="form-control" required class="input"
                    placeholder="Email" required="" /> </div>
            <div class="form-group">
                <input type="password" id="log_passwd" class="form-control" name="log_passwd" required class="input"
                    minlength="4" maxlength="32" placeholder="Mot de Passe" required="" /> </div>
            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" id="submit" value="Sign in" type="submit">Se
                    Connecter</button>
            </div>
        </form>
        <?php
          $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($fullurl,"login=false") == true)
          {
             echo "<p style='text-align: center;color:red;'>Nom d'utilisateur ou Mot de passe Invalide</p>";
          }
        ?>
    </div>
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>