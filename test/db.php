<?php
$connection = mysqli_connect("localhost", "root", "");
if ($connection) {
echo "<br/> Connected to server";
}else{
die("<br />Connection error ". mysqli_connect_error());
}
$selectdb = mysqli_select_db($connection, "insertdeleteedit");
if ($selectdb) {
echo "<br />Existing Database Selected";
} else {
$sqlcreatedb = "CREATE DATABASE IF NOT EXISTS `insertdeleteedit`";
if (mysqli_query($connection, $sqlcreatedb)) {
echo "<br />New database created";
$selectdb2 = mysqli_select_db($connection, "insertdeleteedit");
if ($selectdb2) {
echo "<br />Created database selected";
$sqlcreatetable = "
CREATE TABLE IF NOT EXISTS `insertdeleteedittable` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`firstname` varchar(100) NOT NULL,
`lastname` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
if (mysqli_query($connection,$sqlcreatetable)) {
echo "<br />New table created";
} else {
echo "<br />No table created";
}
}
} else {
echo "<br />No database created";
} 
}
?>