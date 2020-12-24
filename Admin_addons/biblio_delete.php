<?php
require '../required.php';
isadmin();
$getid = $_GET['deleteid'];

$sel = "DELETE FROM biblio WHERE `id` = '".$getid."'";
$qry = mysqli_query($connection, $sel);
if($qry) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
}
 
?>