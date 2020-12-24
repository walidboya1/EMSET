<div class="row gap-y">
            


          <?php
    require '../required.php';
    isetudiant();
    $sel = "SELECT * FROM `biblio`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $biblio  =  $row['URL'];
        $Cadre  =  $row['Cadre'];
        $sele = "SELECT * FROM `Cadre` WHERE id = ".$Cadre ;
        $qrydisplay2 = mysqli_query($connection, $sele);
        $row1 = mysqli_fetch_array($qrydisplay2);
        $nom = $row1['nom'];


        $info = pathinfo("../biblio/" . $biblio);
        // get image size
        $size = ceil(filesize("../biblio/" . $biblio) / 1024);
        if ($biblio != "." && $biblio != ".." && $biblio != "" && $biblio != "_notes" && $info['extension'] != "")
        {
          $URL = "<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$biblio."</a> | ".$size." kb<br>";
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