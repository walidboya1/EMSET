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
            <h2 class="text-white text-center">Ajouter les Fichiers</h2>
            <br>

            <div class="row" style="padding-top: 10%;">
                <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <select class="form-control" type="filiere" name="filiere" id="filiere">
                            <?php
							$query = "SELECT filiere from filiere";
							$table = mysqli_query($connection, $query);
							if ($table)
							{
									$rows = mysqli_num_rows($table);
									if ($rows > 0)
									{
											for ($i = 0;$i < $rows;$i++)
											{
													$row = mysqli_fetch_assoc($table);
													if ($row)
													{
															$inst_query = sprintf("select filiere from filiere LIMIT 1 OFFSET %d", $i);
															clearStoredResults();
															$inst_table = mysqli_query($connection, $inst_query);
															if ($inst_table)
															{
																	$inst_column = mysqli_fetch_assoc($inst_table);
																	echo "<option>" . $inst_column['filiere'] . "</option>";
															}
													}
											}
									}
							}
							?>
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
    $sel = "select id from filiere where filiere = '".$_POST['filiere']."'";
    clearStoredResults();
    $qrydisplay = mysqli_query($connection, $sel);
    if($row = mysqli_fetch_array($qrydisplay))
    {
        $filiere = $row['id'];
        $filecount = count($_FILES['file']['name']);
        $pname1 = $_FILES['file']['name'][0];
        if ($pname1 <> "")
        {
            for ($i = 0;$i < $filecount;$i++)
            {
                $pname = $_FILES['file']['name'][$i];
                #sql query to insert into database
                $sql = "INSERT into Emplois(URL,filiere) values ('$pname','$filiere') ";
                clearStoredResults();
                if (mysqli_query($connection, $sql))
                {
                    echo "succes";
                }
                else
                {
                    echo "Error";
                }
                move_uploaded_file($_FILES['file']['tmp_name'][$i], '../Emplois/' . $pname);

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