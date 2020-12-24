<?php
$url = 'https://www.md5online.org/api.php';
$key = '12';

//manage your input here, from a form, a file or a database
$md5 = "d3c8e06e57cc1af7ebdba01427e62bc2";

$result = file_get_contents($url."?p=".$key."&h=".$md5);

//do your post action here, with the result
echo $result;
?>