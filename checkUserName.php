
<?php


include "connect.php";


// Hämtar ut det valda användarnamnet från DB. En referens till datan som hämtas ut sparas i $result. För att använda datan
// måste den hämtas med fetch_assoc()-funktionen. Denna hämtar datan i form av en array. Varje rad blir ett element i arrayen.
// count() räknar antalet element i arrayen $row. Är denna inte tom finns redan namnet i DB och är upptaget.


    $query = "SELECT Username FROM user_accounts WHERE Username='$regName'";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();					
	$existingUser = 0;                
					
    if(count($row)!=0 )
    {
        $existingUser = 1;     
    }
 



?>