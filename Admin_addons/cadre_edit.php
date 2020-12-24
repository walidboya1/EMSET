<?php
  require '../required.php';
  isadmin();
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `cadre` WHERE `id` = '$getid'";
$qry = mysqli_query($connection, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id  =  $selassoc['id'];
$nom  =  $selassoc['nom'];
$CIN  =  $selassoc['CIN'];
$Tele  =  $selassoc['tele'];
$userid = $selassoc['userid'];
$query = "SELECT * FROM user WHERE id = ".$userid;
$table =  mysqli_query($connection, $query);
$row1 = mysqli_fetch_array($table);
$email  =  $row1['email_id'];
if(isset($_POST['updateedit'])) {
 $upnom =  $_POST['upnom'];
 $upCIN =  $_POST['upCIN'];
 $upTele =  $_POST['upTele'];
 $upemail =  $_POST['upemail'];
 
 
 $seleditt = "UPDATE `cadre` SET `nom`='$upnom',`CIN`='$upCIN',`tele`='$upTele'  WHERE `id` = '$id'";
 $qry = mysqli_query($connection,$seleditt);
 $seledit = "UPDATE `user` SET `email_id`='$upemail' WHERE `id` = '$userid'";
 $query = mysqli_query($connection,$seledit);
 if($qry) 
  {
    if($query) {?>
        <script type="text/javascript">
        var x = document.getelementbyid('info');
        $('.info').show();
        </script>
   <?php }
    }
   }
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
        <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">
<div class="container">
            <h2 class="text-white text-center">Ajouter les informations du professeur</h2>
            <br>

            <div class="row">
    <form method="POST" action="" class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" >

        <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" name="upnom" id="upnom" placeholder="Nom Complet" value="<?php echo $nom; ?>">
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" name="upCIN" id="upCIN" placeholder="CIN" value="<?php echo $CIN ; ?>">
                    </div>
                    
                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" name="upTele" id="upTele" placeholder="Telephone" value="<?php echo $Tele ; ?>">
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="Email" class="form-control" name="upemail" id="upemail" placeholder="Email" value="<?php echo $email; ?>">
                    </div>
                    <input class="btn btn-block btn-lg btn-success" type="submit" name="updateedit" value="Changer">
                    <p style='text-align: center;color:green;display:none;' class='info'>INFORMATION CHANGER</p>


    </form>
    </div>

</div>
    </section>
</body>
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src='../assets/js/icons.js'></script>
</html>