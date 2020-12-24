<?php
require '../required.php';
isadmin();
$getid = $_GET['deleteid'];

$sel = "DELETE FROM activite WHERE `id` = '".$getid."'";
$qry = mysqli_query($connection, $sel);
$query = "DELETE FROM image WHERE `id_image` = '".$getid."'";
$table = mysqli_query($connection, $query);
if($table) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
}
 
?>