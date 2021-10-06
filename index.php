<!DOCTYPE html>
<?php


// Endast om sessionvariabeln kallad "username" har satts kan denna sida visas. Detta görs endast då en inloggning lyckats.


session_start();

if(!isset($_SESSION["username"]))
{
	header("Location: block.php");
}

include "connect.php";

?>

<html>
	<head>
		<title>A page to discuss web programming</title>
		<link rel="stylesheet" href="assets/style.css">
		<meta charset="utf-8">
		
	</head>
	<body>	
		<div id="container">
			<div id="firstheader">
				<h1>The Programmer's Forum</h1>
			</div>	
			<div id="secondheader">
		  			  <h2>You are now logged in and can post comments below:</h2>
     	 	</div> 
		<div id="comments">	
			 <h2>Comments:</h2>		
			<?php
				// skriver ut kommentarer med författarnamn tills dess att inga fler rader finns att hämta från $result.
   		 			$query = "SELECT Name, Comment FROM userdata";
  		  			$result = $connection->query($query);

					while($row = $result->fetch_assoc())
					{
						
    				echo $row["Name"], "<b> says: </b>", $row["Comment"];
                	echo "<br/>";
    				}
					
			?>
  		</div> 
		 <div id = "commentForm">
				<h4> Use the form to post a comment:</h4>
				<form action="SaveComment.php" method="POST" name="commentForm" onSubmit="return validateComment();">
					<textarea id="comment" name="comment" placeholder="Write your comment here..."></textarea><br/><br/>
					<input type="submit" value="Post comment" id="submit">
				</form>
		</div>	
		<div id="logoutForm">		
			<form action="logout.php">
	    		<button>Log out</button>
			</form>	
   		</div>		
	</div>
		<script src="assets/jscr.js"></script>
					
	</body>										
												
</html>

