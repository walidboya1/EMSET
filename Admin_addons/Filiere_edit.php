<?php
  require '../required.php';
  isadmin();
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `Filiere` WHERE `id` = '$getid'";
$qry = mysqli_query($connection, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id  =  $selassoc['id'];
$Filiere  =  $selassoc['Filiere'];
if(isset($_POST['updateedit'])) {
 $Filiere =  $_POST['Filiere'];
 
 $seleditt = "UPDATE `Filiere` SET `Filiere`='$Filiere' WHERE `id` = '$id'";
 $qry = mysqli_query($connection,$seleditt);

 if($qry) 
  {?>
        <script type="text/javascript">
        var x = document.getelementbyid('info');
        $('.info').show();
        </script>
   <?php
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
            <h2 class="text-white text-center">Changer les informations de la Filiere</h2>
            <br>

            <div class="row" style="padding-top: 10%;">
    <form method="POST" action="" class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" >

        <div class="form-group input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" name="Filiere" id="Filiere" placeholder="Filiere" value="<?php echo $Filiere; ?>">
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