
<?php


// koppling till databas. Om kopplingen misslyckas termineras försöket genom die och ett felmeddelande visas.

$username_db = "dbtrain_656";
$password_db = "zdkdfe";
$host = "dbtrain.im.uu.se";
$database = "dbtrain_656";

$connection = new mysqli($host, $username_db, $password_db, $database);

if ($connection->connect_error)
{
    die("Connection failed: ".$connection.connect_error);
}

?>