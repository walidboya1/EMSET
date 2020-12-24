<?php
  require '../required.php';
  isadmin();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <title>EMSET-P | Admin</title>
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">

        <div class="container">
            <h2 class="text-white text-center">Ajouter l'activite</h2>
            <br>

            <div class="row" style="padding-top: 10%;">
                <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control" name="titre" id="titre"
                            placeholder="Titre de l'évenement">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="descrip"
                            placeholder="La description de l'évenement"></textarea>
                    </div>



                    <div class="form-group">
                        <select class="form-control form-control-sm" name="type">
                            <option>Scolaire</option>
                            <option>Parascolaire</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class='btn btn-white btn-block file-browser' type='File' name='file[]' id='file'
                            multiple></input>
                    </div>

                    <button class="btn btn-block btn-lg btn-success" id="submit" name="submit"
                        type="submit">Ajouter</button>
                </form>

            </div>

        </div>
    </section>

    <?php
if (isset($_POST["submit"]))
{
        $titre = $_POST['titre'];
        $descrip = $_POST['descrip'];
        $type = $_POST['type'];
        $filecount = count($_FILES['file']['name']);
        $pname1 = $_FILES['file']['name'][0];
        if ($pname1 <> "")
        {
            $sql = "INSERT into Activite(titre,descrip,type) values ('$titre','$descrip','$type') ";
            clearStoredResults();
            if (mysqli_query($connection, $sql))
            {
            
            for ($i = 0;$i < $filecount;$i++)
            {
                $pname = $_FILES['file']['name'][$i];
                #sql query to insert into database

                $sel = "SELECT * FROM `Activite` ORDER BY id DESC LIMIT 1";
                $qrydisplay = mysqli_query($connection, $sel);
                $row = mysqli_fetch_array($qrydisplay);
                $id  =  $row['id'];
                $sql2 = "INSERT into image(id_image,image) values ('$id','$pname') ";
                clearStoredResults();
                if (mysqli_query($connection, $sql2))
                {
                echo "Succes";
                }
                else
                {
                echo "Error";
                }
                
                move_uploaded_file($_FILES['file']['tmp_name'][$i], '../Activite/' . $pname);

            }
        }
            else
            {
                echo "Error";
            }
        }
    
}
?>
    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src='../assets/js/icons.js'></script>
</body>

</html>