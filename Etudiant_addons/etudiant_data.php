<section class="section bg-gray py-120">
<div class='container' style='text-align: center;'>
<div class='card-block' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);'>
              <h3>Fiche d'étudiant</h3>

              <br>

              <div class="row gap-y gap-3">

                
      <?php
    require '../required.php';
    isetudiant();
    $sel = "SELECT * FROM `etudiant` WHERE userid = ".$_SESSION['login_user'];
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $userid = $row['userid'];
        $Prenom  =  $row['Prenom'];
        $Nom  =  $row['Nom'];
        $CIN  =  $row['CIN'];
        $Date  =  $row['Date_naissance'];
        $Lieu  =  $row['Lieu_naissance'];
        $niv  =  $row['niv_scolaire'];
        $univ  =  $row['anne_univ'];
        $adresse  =  $row['adresse'];
        $mail  =  $row['mail'];
        $nationalité  =  $row['nationalité'];
        $phone  =  $row['phone'];
        $inscrip  =  $row['num_dincription'];
        $filiere = $row['filiere'];
        $userid = $row['userid'];
        $sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
        $qrydisplay3 = mysqli_query($connection, $sele2);
        $row2 = mysqli_fetch_array($qrydisplay3);
        $nfiliere = $row2['Filiere'];

echo"<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Prenom</h6>
<p>$Prenom</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Nom</h6>
<p>$Nom</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>CIN</h6>
<p>$CIN</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Date de Naissance</h6>
<p>$Date</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Lieu de Naissance</h6>
<p>$Lieu</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Niveau Scolaire</h6>
<p>$niv</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Année Universitaire</h6>
<p>$univ</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Adresse</h6>
<p>$adresse</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Mail</h6>
<p>$mail</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Nationalité</h6>
<p>$nationalité</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Telephone</h6>
<p>$phone</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Numéro d'Incription</h6>
<p>$inscrip</p>
</div>

<div class='col-12 col-md-6'>
<h6 class='heading-alt'>Filiere</h6>
<p>$nfiliere</p>
</div>";
    };
?>

</div>
</div>

        </div>
      </section>