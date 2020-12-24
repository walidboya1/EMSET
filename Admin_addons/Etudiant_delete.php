<?php
require '../required.php';
isadmin();
$getid = $_GET['deleteid'];
$userid = $_GET['userid'];

$sel = "DELETE FROM Etudiant WHERE `id` = '".$getid."'";
$qry = mysqli_query($connection, $sel);
$query = "DELETE FROM user WHERE `id` = '".$userid."'";
$table = mysqli_query($connection, $query);
if($qry) {
    if($table) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;}
}
?>