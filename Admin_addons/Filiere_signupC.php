<?php
  require '../required.php';
  isadmin();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $filiere = $_POST['filiere'];
        clearStoredResults();
        $query = sprintf("INSERT INTO filiere(filiere) VALUES('%s')", $filiere);
        $table = mysqli_query($connection, $query);
        if ($table)
        {
                        header("Location: filiere_signup.php?login=true");
                        exit();
                    }
                    else
                    {
                        echo "Error: <br>" . mysqli_error($connection);
                    }
        }
   
mysqli_close($connection); // Closing Connection

?>