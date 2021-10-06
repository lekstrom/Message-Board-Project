
<?php
session_start();
//Connection till databas

include "connect.php";

$comment = $connection->real_escape_string($_POST["comment"]);

//php validering:
// För comment kontrolleras om minst ett non-whitespace tecken finns (dvs att strängen inte är tom eller endast består av mellanslag.)

$errors = 0;

if(preg_match("/\S+/", $_POST["comment"]) != 1)
{
    $errors=1;
}

if($errors==0)
{
    //Användarens input förs in i databasen. Sedan laddas förstasidan om igen:
    
    $user = $_SESSION["username"];

    $query = "INSERT INTO userdata (Name, Comment) VALUES('$user', '$comment')";
    $connection->query($query);

    header("Location: index.php");
}










?>



