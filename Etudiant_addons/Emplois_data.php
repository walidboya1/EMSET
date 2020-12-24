<div class="row gap-y">
            


          <?php
    require '../required.php';
    isetudiant();
    $sele2 = "SELECT filiere FROM `Etudiant` WHERE userid = ".$_SESSION['login_user'] ;
    $qrydisplay3 = mysqli_query($connection, $sele2);
    $row2 = mysqli_fetch_array($qrydisplay3);
    $nfiliere = $row2['filiere'];
    $sel = "SELECT * FROM `emplois` where filiere = ".$nfiliere;
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $emplois  =  $row['URL'];

        // get image size
        if ($emplois != "." && $emplois != ".." && $emplois != "" && $emplois != "_notes")
        {
         echo"<img src='../emplois/".$emplois."' class='figure-img img-fluid' alt='...' style='width: 100%;height: 50%;'>";
        }
        else
        {
          echo "<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        
    };

?>
          </div>