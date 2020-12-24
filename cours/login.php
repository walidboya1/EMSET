<?php
include 'config.php';
session_start(); // Starting Session
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['log_email']) || empty($_POST['log_passwd']))
    {
        echo "Username or Password is empty";
    }
    else
    {
        clearStoredResults();
        $email = $_POST['log_email'];
        $passwd = $_POST['log_passwd'];

        $email = stripslashes($email);
        $passwd = stripslashes($passwd);
        $passwd = md5($passwd);

        // SQL query to fetch information of registerd users and finds user match.
        $query = sprintf("CALL Login('%s','%s')", $email, $passwd);
        $table = mysqli_query($connection, $query);

        if ($table)
        {
            $rows = mysqli_num_rows($table);
            if ($rows == 1)
            {
                $row = mysqli_fetch_assoc($table);
                srand(microtime() * 10000);
                $str = rand();
                $result = md5($str);
                $_SESSION['login_user'] = $row['id'];
                $_SESSION['email_id'] = $row['email_id'];
                $_SESSION['User_Id'] = $result;
                $query = sprintf("UPDATE user set session='%s' where id=%d;", $result, $_SESSION['login_user']);
                clearStoredResults();
                if (mysqli_query($connection, $query))
                {
                    mysqli_close($connection);
                    header("location: index.php");
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }
            }
            else
            {
                header("Location: page-login.php?login=false");
                exit();
            }
        }
    }
}
?>