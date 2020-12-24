<?php
  require '../required.php';
  isadmin();
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `Etudiant` WHERE `id` = '$getid'";
$qry = mysqli_query($connection, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id  =  $selassoc['id'];
$Prenom  =  $selassoc['Prenom'];
$Nom  =  $selassoc['Nom'];
$CIN  =  $selassoc['CIN'];
$Date_naissance  =  $selassoc['Date_naissance'];
$Lieu_naissance  =  $selassoc['Lieu_naissance'];
$niv_scolaire  =  $selassoc['niv_scolaire'];
$anne_univ  =  $selassoc['anne_univ'];
$adresse  =  $selassoc['adresse'];
$mail  =  $selassoc['mail'];
$nationalité  =  $selassoc['nationalité'];
$phone  =  $selassoc['phone'];
$num_dincription  =  $selassoc['num_dincription'];
$filiere = $selassoc['filiere'];
$userid = $selassoc['userid'];
$query = "SELECT * FROM user WHERE id = ".$userid;
$table =  mysqli_query($connection, $query);
$row1 = mysqli_fetch_array($table);
$email_id  =  $row1['email_id'];
$sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
$qrydisplay3 = mysqli_query($connection, $sele2);
$row2 = mysqli_fetch_array($qrydisplay3);
$nfiliere = $row2['Filiere'];
if(isset($_POST['updateedit'])) {
    $Prenomup  =  $_POST['Prenom'];
    $Nomup  =  $_POST['Nom'];
    $CINup  =  $_POST['CIN'];
    $Date_naissanceup  =  $_POST['Date_naissance'];
    $Lieu_naissanceup  =  $_POST['Lieu_naissance'];
    $niv_scolaireup  =  $_POST['niv_scolaire'];
    $anne_univup  =  $_POST['anne_univ'];
    $adresseup  =  $_POST['adresse'];
    $mailup  =  $_POST['mail'];
    $nationalitéup  =  $_POST['nationalité'];
    $phoneup  =  $_POST['phone'];
    $num_dincriptionup  =  $_POST['num_dincription'];
    $filiereup = $_POST['filiere'];
    $selectfil = "SELECT * FROM `Filiere` WHERE `Filiere` = '$filiereup'";
    $query = mysqli_query($connection, $selectfil);
    $row3 = mysqli_fetch_assoc($query);
    $nfiliereup = $row3['id'];
    $email_idup =  $_POST['email_id'];
 
 
 $seleditt = "UPDATE `Etudiant` SET `Prenom`= '$Prenomup',`Nom`= '$Nomup',`CIN`= '$CINup',`Date_naissance`= '$Date_naissanceup',`Lieu_naissance`= '$Lieu_naissanceup',`niv_scolaire`= '$niv_scolaireup', `anne_univ` = '$anne_univup' ,`adresse`= '$adresseup',`mail`= '$mailup',`nationalité`= '$nationalitéup',`phone`= '$phoneup',`num_dincription`= '$num_dincriptionup',`filiere`= '$nfiliereup'  WHERE `id` = '$id'";
 $qry = mysqli_query($connection,$seleditt);
 $seledit = "UPDATE `user` SET `email_id`= '$email_idup' WHERE `id` = '$userid'";
 $query = mysqli_query($connection,$seledit);

 }
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
        <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">
<div class="container">
            <h2 class="text-white text-center">Ajouter les informations de l'Etudiant</h2>
            <br>

            <div class="row">
            <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST" action="">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Prenom" value="<?php echo $Prenom; ?>">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom" value="<?php echo $Nom; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="Date" class="form-control" name="Date_naissance" id="Date_naissance"
                                placeholder="Date de Naissance" value="<?php echo $Date_naissance; ?>">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="Lieu_naissance" id="Lieu_naissance"
                                placeholder="Lieu de Naissance" value="<?php echo $Lieu_naissance; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="niv_scolaire" id="niv_scolaire"
                                placeholder="Niveau Scolaire" value="<?php echo $niv_scolaire; ?>">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse" value="<?php echo $adresse; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="Email" class="form-control" name="mail" id="mail" placeholder="Mail"value="<?php echo $mail; ?>">
                        </div>

                        <div class="form-group col-12 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="Email" class="form-control" name="email_id" id="email_id" placeholder="EMSET Mail" value="<?php echo $email_id; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nationalité" id="nationalité"
                                placeholder="nationalité" value="<?php echo $nationalité; ?>">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="CIN" id="CIN"
                                placeholder="CIN" value="<?php echo $CIN; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone" value="<?php echo $phone; ?>">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="num_dincription" id="num_dincription"
                                placeholder="Numero d'Incription" value="<?php echo $num_dincription; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input type="text" class="form-control" name="anne_univ" id="anne_univ"
                                placeholder="Année Universitaire" value="<?php echo $anne_univ; ?>">
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control" type="filiere" name="filiere" id="filiere" value="<?php echo $filiere; ?>">
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
                                                                if (!strcmp($inst_column['filiere'],$nfiliere))
                                                                {
                                                                    echo "<option selected>" . $inst_column['filiere'] . "</option>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<option>" . $inst_column['filiere'] . "</option>";
                                                                }
															}
													}
											}
									}
							}
							?>
                        </select>
                    </div>
                    <input class="btn btn-block btn-lg btn-success" type="submit" name="updateedit" value="Changer">
                </form>
    </div>

</div>
    </section>
</body>
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src= '../assets/js/icons.js'></script>
</html>