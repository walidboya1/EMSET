<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `Emplois`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $Emplois  =  $row['URL'];
        $Date  =  $row['Date'];
        $filiere = $row['filiere'];
        $sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
        $qrydisplay3 = mysqli_query($connection, $sele2);
        $row2 = mysqli_fetch_array($qrydisplay3);
        $nfiliere = $row2['Filiere'];

        $info = pathinfo("../Emplois/" . $Emplois);
        // get image size
        $size = ceil(filesize("../Emplois/" . $Emplois) / 1024);
        if ($Emplois != "." && $Emplois != ".." && $Emplois != "" && $Emplois != "_notes" && $info['extension'] != "")
        {
          $URL = "<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$Emplois."</a> | ".$size." kb<br>";
        }
        else
        {
          echo "<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        echo "<tr><td>".$id."</td><td>".$URL."</td><td>".$Date."</td><td>".$nfiliere."</td><td><a href='Emplois_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


