<?php
function clearStoredResults()
{
    global $connection;

    do
    {
        if ($res = $connection->store_result())
        {
            $res->free();
        }
    }
    while ($connection->more_results() && $connection->next_result());

}
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'emset');
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$connection)
{
    echo "help";
    die("Connection failed: " . mysqli_connect_error());
}
?>
