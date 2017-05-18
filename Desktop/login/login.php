<?php

$servername = "localhost";

$username = "iw3htp";

$password = "password";

$database = mysqli_connect($servername, $username, $password);

$select = mysqli_select_db($database,"finaldb");

$sql = "SELECT username, password FROM auth";

$result = mysqli_query($database,$sql); 



if(isset($_POST["username"], $_POST["password"])) //Check if username and password are set
    {     

        $name = $_POST["username"]; 
        $password1 = $_POST["password"]; 
		

        $result1 = mysqli_query($database,"SELECT username, password FROM auth WHERE username = '".$name."' AND  password = '".$password1."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            	
	    print("<p>Welcome back ".$name."! Login was successful");
		
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

$name = stripslashes($_POST["username"]); 
$name = mysql_real_escape_string($_POST["username"]);

?>
