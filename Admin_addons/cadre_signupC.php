<?php
include '../required.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $cadre = $_GET['cadre'];
        $nom = $_POST['nom'];
        $tele = $_POST['upTele'];
        $email_id = $_POST['reg_email'];
        $password = $_POST['password'];
        $cin = $_POST['CIN'];
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
        if (strcmp($cadre,"2") == false)
        {
        $query = sprintf("INSERT INTO user(email_id,password,Stat) VALUES('%s','%s','2')", $email_id, md5($password));
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
                    $query1 = sprintf("INSERT INTO cadre(nom,userid,CIN,tele,Cadre) values('%s','%d','%s','%s','2')", $nom, $row['id'], $cin, $tele);
                    echo $query1;
                    clearStoredResults();
                    $table1 = mysqli_query($connection, $query1);
                    if ($table1)
                    {
                        header("Location: cadre_signup.php?login=true&cadre=2");
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
    else
    {
        $query = sprintf("INSERT INTO user(email_id,password,Stat) VALUES('%s','%s','1')", $email_id, md5($password));
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
                    $query1 = sprintf("INSERT INTO cadre(nom,userid,CIN,tele,Cadre) values('%s','%d','%s','%s','1')", $nom, $row['id'], $cin, $tele);
                    echo $query1;
                    clearStoredResults();
                    $table1 = mysqli_query($connection, $query1);
                    if ($table1)
                    {
                        header("Location: cadre_signup.php?login=true&cadre=1");
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
}
mysqli_close($connection); // Closing Connection

?>
