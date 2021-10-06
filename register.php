
<?php

//Connection till databas:

include "connect.php";

// Data ifrån registreringsformuläret:
// real_escape_string() stoppar SQL-injection - attacker. Om användaren skriver in SQL-kod ses detta nu inte som giltig SQL-kod, utan som text i databasen.

$regName = $connection->real_escape_string($_POST["regName"]);
$emailaddress = $connection->real_escape_string($_POST["emailaddress"]);
$regPassword = $connection->real_escape_string($_POST["regPassword"]);

//Server-side validering av registreringsformulärets data:
				
$errors = 0;

// Kontrollera om valt användarnamn och email är upptagna

include "checkUserName.php";
include "checkUserEmail.php";


if(preg_match("/\S+/", $_POST["regName"]) != 1)
{
    $errors = 1;
}

if(preg_match("/.+@.+\..+/", $_POST["emailaddress"]) != 1)
{
    $errors = 1;
}


if(preg_match("/\S+/", $_POST["regPassword"]) != 1)
{
    $errors = 1;
}

//Kontrollerar om valt lösenord är minst 8 tecken. strlen-funktionen kontrollerar antalet tecken i en sträng, i detta fall $regPassword.

if(strlen($regPassword)<8)
{
  $errors = 1;
    
}


if($existingUser == 1)
{
    header("Location: takenUsername.php");
}

else if($existingEmail == 1)
{
    header("Location: takenEmailAdress.php");
}


// Om inga fel finns, skapas en ny användare

if($errors == 0 && $existingUser == 0 && $existingEmail == 0)
{
    // Hashning och saltning:

    $salt = substr(sha1(mt_rand()),0,22);
    
    //Lösenordet och $salt hashas med funktionen sha1()

    $h_password = sha1($regPassword.$salt);
    
    // Uppgifterna förs in i databasen 

    $query = "INSERT INTO user_accounts (Username, EmailAddress, Password, Salt) VALUES('$regName', '$emailaddress', '$h_password','$salt')";
   
    $connection->query($query);

    header("Location: regSuccess.php");
}






?>