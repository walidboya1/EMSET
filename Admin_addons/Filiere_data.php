<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `Filiere`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $Filiere  =  $row['Filiere'];
        echo "<tr><td>".$id."</td><td>".$Filiere."</td><td><a href='Filiere_edit.php?edit=".$id."'  data-provide='lightbox'>Changer</a></td><td><a href='Filiere_delete.php?deleteid=".$id."'>Supprimer</a></td></tr>";
    };
?>