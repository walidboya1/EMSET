<?php
    require '../required.php';
    isadmin();
    $sel = "SELECT * FROM `etudiant`";
    $qrydisplay = mysqli_query($connection, $sel);
    while($row = mysqli_fetch_array($qrydisplay))
    {
        $id  =  $row['id'];
        $userid = $row['userid'];
        $Prenom  =  $row['Prenom'];
        $Nom  =  $row['Nom'];
        $CIN  =  $row['CIN'];
        $Date  =  $row['Date_naissance'];
        $Lieu  =  $row['Lieu_naissance'];
        $niv  =  $row['niv_scolaire'];
        $univ  =  $row['anne_univ'];
        $adresse  =  $row['adresse'];
        $mail  =  $row['mail'];
        $nationalité  =  $row['nationalité'];
        $phone  =  $row['phone'];
        $inscrip  =  $row['num_dincription'];
        $filiere = $row['filiere'];
        $userid = $row['userid'];
        $sele2 = "SELECT * FROM `filiere` WHERE id = ".$filiere ;
        $qrydisplay3 = mysqli_query($connection, $sele2);
        $row2 = mysqli_fetch_array($qrydisplay3);
        $nfiliere = $row2['Filiere'];
        $query = "SELECT * FROM user WHERE id = ".$userid;
        $table =  mysqli_query($connection, $query);
        $row1 = mysqli_fetch_array($table);
        $email  =  $row1['email_id'];

        echo "<tr><td>".$id."</td><td>".$Prenom."</td><td>".$Nom."</td><td>".$CIN."</td><td>".$Date."</td><td>".$Lieu."</td><td>".$niv."</td><td>".$univ."</td><td>".$adresse."</td><td>".$mail."</td><td>".$email."</td><td>".$nationalité."</td><td>".$phone."</td><td>".$inscrip."</td><td>".$nfiliere."</td><td><a  data-provide='lightbox' href='Etudiant_edit.php?edit=".$id."'>Changer</a></td><td><a href='cadre_delete.php?userid=".$userid."&deleteid=".$id."'>Supprimer</a></td></tr>";
    };

?>


