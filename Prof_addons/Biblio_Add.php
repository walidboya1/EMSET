<?php
  require '../required.php';
  isprof();
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
    <title>EMSET-P | Prof</title>
</head>

<body style="background-color: cadetblue;">
    <section class="section" style="background-color: cadetblue;">

        <div class="container">
            <h2 class="text-white text-center">Ajouter les Fichiers</h2>
            <br>

            <div class="row" style="padding-top: 10%;">
                <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST"  enctype="multipart/form-data">
                    <input class='btn btn-white btn-block file-browser' type='File' name='file[]'
                        id='file' multiple></input><br>

                    <button class="btn btn-block btn-lg btn-success" id="submit" name="submit" type="submit">Ajouter</button>
                </form>

            </div>

        </div>
    </section>

<?php
if (isset($_POST["submit"]))
{
        $filecount = count($_FILES['file']['name']);
        $pname1 = $_FILES['file']['name'][0];
        if ($pname1 <> "")
        {
            for ($i = 0;$i < $filecount;$i++)
            {
                $sel = "select id from Cadre where userid = '".$_SESSION['login_user']."'";
                clearStoredResults();
                $qrydisplay = mysqli_query($connection, $sel);
                if($row = mysqli_fetch_array($qrydisplay))
                {
                $Cadre = $row['id'];
                $pname = $_FILES['file']['name'][$i];
                #sql query to insert into database
                $sql = "INSERT into biblio(URL,Cadre) values ('$pname','$Cadre') ";
                clearStoredResults();
                if (mysqli_query($connection, $sql))
                {
                    echo "succes";
                }
                else
                {
                    echo "Error";
                }
                move_uploaded_file($_FILES['file']['tmp_name'][$i], '../biblio/' . $pname);
            }
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