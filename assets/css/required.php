<?php
include 'config.php';
function valid_user($profi)
{
    global $connection;
    $user_id = $_SESSION['User_Id'];
    $user_id = stripslashes($user_id);
    $query = sprintf("select prof from user where session='%s'", $_SESSION['User_Id']);
    clearStoredResults();
    $result = mysqli_query($connection, $query);
    $numr = mysqli_num_rows($result);
    if (empty($_SESSION['User_Id']) || $numr == 0)
    {
        header("location: index.php");
        exit();
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
        if ($row['prof'] == $profi)
        {
            return true;
        }
    }
}
function isetudiant()
{
    if (valid_user(1))
    {
        header("location: technicien.php?user=" . $_SESSION['login_user']);
        exit();
    }
    if (valid_user(2))
    {
        header("location: page-register.php?user=" . $_SESSION['login_user']);
        exit();
    }
}
function isprof()
{
    if (valid_user(0))
    {
        echo "etudiant";
        header("location: etudiant.php?user=" . $_SESSION['login_user']);
        exit();
    }
    if (valid_user(2))
    {
        header("location: page-register.php?user=" . $_SESSION['login_user']);
        exit();
    }

}
function isadmin()
{
    if (valid_user(0))
    {
        header("location: etudiant.php?user=" . $_SESSION['login_user']);
        exit();
    }
    if (valid_user(1))
    {
        header("location: technicien.php?user=" . $_SESSION['login_user']);
        exit();
    }
}

session_start();
?>
