<div class="row gap-y">
            


          <?php
    require '../required.php';
    isetudiant();
    $sele2 = "SELECT filiere FROM `Etudiant` WHERE userid = ".$_SESSION['login_user'] ;
    $qrydisplay3 = mysqli_query($connection, $sele2);
    $row2 = mysqli_fetch_array($qrydisplay3);
    $nfiliere = $row2['filiere'];
    $sel = "SELECT * FROM `cours` where filiere = ".$nfiliere;
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $cours  =  $row['URL'];
        $Cadre  =  $row['Cadre'];
        $sele = "SELECT * FROM `Cadre` WHERE id = ".$Cadre ;
        $qrydisplay2 = mysqli_query($connection, $sele);
        $row1 = mysqli_fetch_array($qrydisplay2);
        $nom = $row1['nom'];


        $info = pathinfo("../cours/" . $cours);
        // get image size
        $size = ceil(filesize("../cours/" . $cours) / 1024);
        if ($cours != "." && $cours != ".." && $cours != "" && $cours != "_notes" && $info['extension'] != "")
        {
          $URL = "<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$cours."</a> | ".$size." kb<br>";
       echo "<div class='col-12 col-lg-4'>
        <div class='card'>
          <div class='card-block' style='text-align: center;'>
          <h5 class='card-title fw-600'>".$URL."</h5>
          <a class='btn btn-round btn-secondary' href='".$info['dirname']."/".$info['basename']."'Download' download>Telecharger</a>
            <p class='card-text'>Professeur :".$nom." </p>
          </div>
        </div>  
      </div>";
        }
        else
        {
          echo "<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        
    };

?>
          </div>