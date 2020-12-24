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
    <title>EMSET-P | Admin</title>
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">

        <div class="container">
            <h2 class="text-white text-center">Ajouter la Etudiant</h2>
            <br>

            <div class="row" style="padding-top: 10%;">
                <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7"
                    action="Etudiant_signupC.php" method="POST">
                    
                   <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom">
                        </div>
                    </div>
                    
                   <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="Date" class="form-control" name="Date_naissance" id="Date_naissance"
                                placeholder="Date de Naissance">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="Lieu_naissance" id="Lieu_naissance"
                                placeholder="Lieu de Naissance">
                        </div>
                    </div>
                    
                   <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="niv_scolaire" id="niv_scolaire"
                                placeholder="Niveau Scolaire">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse">
                        </div>
                    </div>

                    
                   <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nationalité" id="nationalité"
                                placeholder="nationalité">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="CIN" id="CIN"
                                placeholder="CIN">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="Email" class="form-control" name="mail" id="mail" placeholder="Mail">
                    </div>
                    <div class="form-group col-12 col-md-6">
                    <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="anne_univ" id="anne_univ"
                                placeholder="Année Universitaire">
                        </div>
                    </div>
                    
                   <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="Email" class="form-control" name="reg_email" id="reg_email" placeholder="EMSET Mail">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Pass">
                    </div>
                    </div>
                    
                   <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="num_dincription" id="num_dincription"
                                placeholder="Numero d'Incription">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" type="filiere" name="filiere" id="filiere">
                            <?php
							$query = "SELECT filiere from filiere";
							$table = mysqli_query($connection, $query);
							if ($table)
							{
									$rows = mysqli_num_rows($table);
									if ($rows > 0)
									{
											for ($i = 0;$i < $rows;$i++)
											{
													$row = mysqli_fetch_assoc($table);
													if ($row)
													{
															$inst_query = sprintf("select filiere from filiere LIMIT 1 OFFSET %d", $i);
															clearStoredResults();
															$inst_table = mysqli_query($connection, $inst_query);
															if ($inst_table)
															{
																	$inst_column = mysqli_fetch_assoc($inst_table);
																	echo "<option>" . $inst_column['filiere'] . "</option>";
															}
													}
											}
									}
							}
							?>
                        </select>
                    </div>
                    <button class="btn btn-block btn-lg btn-success" id="submit" type="submit">Ajouter</button>

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