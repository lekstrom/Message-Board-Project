
<?php


include "connect.php";


    $query = "SELECT EmailAddress FROM user_accounts WHERE EmailAddress='$emailaddress'";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();					
	$existingEmail = 0;                
					
    if(count($row)!=0 )
    {
       $existingEmail  = 1;     
    }
 



?>