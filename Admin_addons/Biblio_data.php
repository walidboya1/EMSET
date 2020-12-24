<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `biblio`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $biblio  =  $row['URL'];
        $Date  =  $row['Date'];
        $Cadre  =  $row['Cadre'];
        $sele = "SELECT * FROM `Cadre` WHERE id = ".$Cadre ;
        $qrydisplay2 = mysqli_query($connection, $sele);
        $row1 = mysqli_fetch_array($qrydisplay2);
        $nom = $row1['nom'];
    

        $info = pathinfo("../Biblio/" . $biblio);
        // get image size
        $size = ceil(filesize("../Biblio/" . $biblio) / 1024);
        if ($biblio != "." && $biblio != ".." && $biblio != "" && $biblio != "_notes" && $info['extension'] != "")
        {
          $URL = "<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$biblio."</a> | ".$size." kb<br>";
        }
        else
        {
          echo "<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        echo "<tr><td>".$id."</td><td>".$URL."</td><td>".$Date."</td><td>".$nom."</td><td><a href='biblio_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


