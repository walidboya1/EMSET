<?php
include 'config.php';
function valid_user($profi)
{
    global $connection;
    $user_id = $_SESSION['User_Id'];
    $user_id = stripslashes($user_id);
    $query = sprintf("select stat from user where session='%s'", $_SESSION['User_Id']);
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
        if ($row['stat'] == $profi)
        {
            return true;
        }
    }
}
function isetudiant()
{
    if (valid_user(1))
    {
        header("location: Prof_addons/prof_Cours.php");
        exit();
    }
    if (valid_user(2))
    {
        header("location: Admin_addons/Admin_Etudiant.php");
        exit();
    }
}
function isprof()
{
    if (valid_user(0))
    {
        header("location: Etudiant_addons/Etudiant_avis.php");
        exit();
    }
    if (valid_user(2))
    {
        header("location: Admin_addons/Admin_Etudiant.php");
        exit();
    }

}
function isadmin()
{
    if (valid_user(0))
    {
        header("location: Etudiant_addons/Etudiant_avis.php");
        exit();
    }
    if (valid_user(1))
    {
        header("location: Prof_addons/prof_Cours.php");
        exit();
    }
}
clearStoredResults();
clearstatcache();
session_start();
?>
