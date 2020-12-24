<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `Activite`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $Titre  =  $row['titre'];
        $descrip = $row['descrip'];
        $type = $row['type'];
        $URL = "";
        
        $sel2 = "SELECT * FROM `image` where id_image =".$id;
        $qrydisplay2 = mysqli_query($connection, $sel2);
        while($row2 = mysqli_fetch_array($qrydisplay2))
        {
        $Activite  =  $row2['image'];
        $info = pathinfo("../Activite/" . $Activite);
        // get image size
        $size = ceil(filesize("../Activite/" . $Activite) / 1024);
        if ($Activite != "." && $Activite != ".." && $Activite != "" && $Activite != "_notes" && $info['extension'] != "")
        {
          $URL = $URL."<a href='".$info['dirname']."/".$info['basename']."'Download' download>".$Activite."</a> | ".$size." kb<br>";
        }
        else
        {
            $URL = $URL."<span class='text-danger d-inline-block w-full'>FICHIER CORROMPU.</span>";
        }
        }
        echo "<tr><td>".$id."</td><td>".$Titre."</td><td>".$descrip."</td><td>".$URL."</td><td>".$type."</td><td><a href='Activite_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


