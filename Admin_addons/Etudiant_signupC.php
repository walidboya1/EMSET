<?php
  require '../required.php';
  isadmin();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $Prenom  =  $_POST['prenom'];
    $Nom  =  $_POST['Nom'];
    $CIN  =  $_POST['CIN'];
    $Date  =  $_POST['Date_naissance'];
    $Lieu  =  $_POST['Lieu_naissance'];
    $niv  =  $_POST['niv_scolaire'];
    $adresse  =  $_POST['adresse'];
    $anne_univ  =  $_POST['anne_univ'];
    $mail  =  $_POST['mail'];
    $nationalité  =  $_POST['nationalité'];
    $phone  =  $_POST['phone'];
    $inscrip  =  $_POST['num_dincription'];
    $filiere = $_POST['filiere'];
    $email_id = $_POST['reg_email'];
    $password = $_POST['password'];
    $sele2 = "SELECT * FROM `filiere` WHERE filiere = '".$filiere."'" ;
    $qrydisplay3 = mysqli_query($connection, $sele2);
    $row2 = mysqli_fetch_array($qrydisplay3);
    $nfiliere = $row2['id'];
    clearStoredResults();
    $query = sprintf("SELECT * from user where email_id='%s'", $email_id);
    echo $query;
    if (!$testr = mysqli_query($connection, $query))
    {
        echo "Error: <br>" . mysqli_error($connection);
    }
    $numr = mysqli_num_rows($testr);
    if ($numr != 0)
    {
        header("Location: cadre_signup.php?login=false");
        exit();
    }
    clearStoredResults();
    $query = sprintf("INSERT INTO user(email_id,password,Stat) VALUES('%s','%s','0')", $email_id, md5($password));
    $table = mysqli_query($connection, $query);
    if ($table)
    {
        clearStoredResults();
        $query2 = sprintf("SELECT id FROM  user  where email_id = '%s' LIMIT 1", $email_id);
        $table2 = mysqli_query($connection, $query2);
        if ($table2)
        {
            $rows = mysqli_num_rows($table2);
            if ($rows == 1)
            {
                $row = mysqli_fetch_assoc($table2);
                $query = sprintf("INSERT INTO Etudiant(userid,Prenom,Nom,CIN,Date_naissance,Lieu_naissance,niv_scolaire,anne_univ,adresse,mail,nationalité,phone,num_dincription,filiere) VALUES(".$row['id'].",'$Prenom','$Nom','$CIN','$Date','$Lieu','$niv','$anne_univ','$adresse','$mail','$nationalité','$phone','$inscrip','$nfiliere')");
                $table = mysqli_query($connection, $query);
                if ($table)
                {
                  header("Location: Etudiant_signup.php?login=true");
                  exit();
                }
                else
                {
                  echo "Error: <br>" . mysqli_error($connection);
                }
            }
        }
    }
        
}
   
mysqli_close($connection); // Closing Connection

?>