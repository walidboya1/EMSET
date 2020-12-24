<?php
  require '../required.php';
  isadmin();
         $getcadre = $_GET['cadre'];
         if (strcmp($getcadre,"2") == false)
         {
            $sel = "SELECT * FROM `cadre` where cadre = 2";
            $qrydisplay = mysqli_query($connection, $sel);
            while($row = mysqli_fetch_array($qrydisplay)){
             $id  =  $row['id'];
             $nom  =  $row['nom'];
             $CIN  =  $row['CIN'];
             $Tele  =  $row['tele'];
             $userid = $row['userid'];
             $query = "SELECT * FROM user WHERE id = ".$userid;
             $table =  mysqli_query($connection, $query);
             $row1 = mysqli_fetch_array($table);
             $email  =  $row1['email_id'];
             echo "<tr><th>".$id."</th><td>".$nom."</td><td>".$CIN."</td><td>".$Tele."</td><td>".$email."</td><td><a href='cadre_edit.php?edit=".$id."'  data-provide='lightbox'>Changer</a></td><td><a href='cadre_delete.php?userid=".$userid."&deleteid=".$id."'>Supprimer</a></td></tr>";
            }
           }
          else
          {
            $sel = "SELECT * FROM `cadre` where cadre = 1";
            $qrydisplay = mysqli_query($connection, $sel);
            while($row = mysqli_fetch_array($qrydisplay)){
             $id  =  $row['id'];
             $nom  =  $row['nom'];
             $CIN  =  $row['CIN'];
             $Tele  =  $row['tele'];
             $userid = $row['userid'];
             $query = "SELECT * FROM user WHERE id = ".$userid;
             $table =  mysqli_query($connection, $query);
             $row1 = mysqli_fetch_array($table);
             $email  =  $row1['email_id'];
             echo "<tr><td>".$id."</td><td>".$nom."</td><td>".$CIN."</td><td>".$Tele."</td><td>".$email."</td><td><a href='cadre_edit.php?edit=".$id."'  data-provide='lightbox'>Changer</a></td><td><a href='cadre_delete.php?userid=".$userid."&deleteid=".$id."'>Supprimer</a></td></tr>";
            }
           
          }
     ?>