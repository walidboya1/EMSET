<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `cours`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $cours  =  $row['URL'];
        $Date  =  $row['Date'];
        $Cadre  =  $row['Cadre'];
        $filiere = $row['filiere'];
        $sele = "SELECT * FROM `Cadre` WHERE id = ".$Cadre ;
        $qrydisplay2 = mysqli_query($connection, $sele);
        $row1 = mysqli_fetch_array($qrydisplay2);
        $nom = $row1['nom'];
        $sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
        $qrydisplay3 = mysqli_query($connection, $sele2);
        $row2 = mysqli_fetch_array($qrydisplay3);
        $nfiliere = $row2['Filiere'];

        $info = pathinfo("../cours/" . $cours);
        // get image size
        $size = ceil(filesize("../cours/" . $cours) / 1024);
        if ($cours != "." && $cours != ".." && $cours != "" && $cours != "_notes" && $info['extension'] != "")
        {
          $URL = "<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$cours."</a> | ".$size." kb<br>";
        }
        else
        {
          echo "<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        echo "<tr><td>".$id."</td><td>".$URL."</td><td>".$Date."</td><td>".$nfiliere."</td><td>".$nom."</td><td><a href='cours_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


