      <section class='section bg-gray'>
        

          <?php
    require '../required.php';
    isetudiant();
    $sele2 = "SELECT filiere FROM `Etudiant` WHERE userid = ".$_SESSION['login_user'] ;
    $qrydisplay3 = mysqli_query($connection, $sele2);
    $row2 = mysqli_fetch_array($qrydisplay3);
    $nfiliere = $row2['filiere'];
    $sel = "SELECT * FROM `avis` where filiere = ".$nfiliere;
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $avis  =  $row['avis'];
        echo"<div class='container' style='text-align: center;'>
        <div class='hidden-sm-down'>
        <div class='col-12 col-md-8' style='margin-left: 15%;margin-right: 15%; margin-bottom: 2%;'>
          <div class='card-block' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);'>
            <p class='card-text'>".$avis."</p>
          </div>
        </div>
  </div>

  <div class='hidden-md-up'>
        <div class='col-12 col-md-8' style=' margin-bottom: 2%;'>
          <div class='card-block' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);'>
            <p class='card-text'>".$avis."</p>
          </div>
        </div>
  </div>  </div> ";
        
    };

?>

        
      </section>