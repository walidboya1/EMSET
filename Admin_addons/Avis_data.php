<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `Avis`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $Avis  =  $row['avis'];
        $Date  =  $row['Date'];
        $filiere = $row['Filiere'];
        $sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
        $qrydisplay3 = mysqli_query($connection, $sele2);
        $row2 = mysqli_fetch_array($qrydisplay3);
        $nfiliere = $row2['Filiere'];

        echo "<tr><td>".$id."</td><td>".$Avis."</td><td>".$Date."</td><td>".$nfiliere."</td><td><a href='Avis_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


