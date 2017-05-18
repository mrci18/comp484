<?php

$servername = "localhost";

$username = "iw3htp";

$password = "password";

$database = mysqli_connect($servername, $username, $password);

$select = mysqli_query($database, "finaldb");

$sql = "INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES (".$_POST['username'].", ".$_POST['password'].", ".$_POST['firstname'].", ".$_POST['lastname'].", ".$_POST['email'].", ".$_POST['phone'].")";



echo "You are registered now";

function showTable ()
{
$servername = "localhost";

$username = "root";

$password = "newPass";

$database = mysqli_connect($servername, $username, $password);

	if ($select=mysqli_query($database,"finaldb"))
  	{
  	// Fetch one and one row
  	while ($row=mysqli_fetch_row($select))
    	{
    		printf ("%s (%s)\n",$row[0],$row[1]);
    	}
  	// Free result set
  	mysqli_free_result($select);
	}	
}

showTable();

?>
