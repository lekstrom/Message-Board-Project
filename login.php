
<?php
session_start();

//Connection till databas

include "connect.php";

// Data ifrån loginformuläret:

$username = $connection->real_escape_string($_POST["username"]);
$loginPassword = $connection->real_escape_string($_POST["loginPassword"]);

// Server - side validering av loginformulärets data:

$errors = 0;


if(preg_match("/\S+/", $_POST["username"]) != 1)
{
    $errors = 1;
}
if(preg_match("/\S+/", $_POST["loginPassword"]) != 1)
{
    $errors = 1;
}

if($errors == 0)
{
   
// Kontroll av inmatat lösenord:

    $query = "SELECT Password, Salt FROM user_accounts WHERE Username='$username'";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();					
	$enc_password = sha1($loginPassword.$row["Salt"]);	
                        
					
    if($enc_password == $row["Password"])
    {
        
        $_SESSION["username"] = $username;
        header("Location: index.php");
       
    }
    else
    {
        header("Location: LoginFail.php");
    }
}


?>