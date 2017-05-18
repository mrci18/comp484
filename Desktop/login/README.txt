home.html Overall function
This file contains the two forms. The first form under "<h1>Registered Users.."is the login form that sends information to login.php to match username and password with final.sql database after clicking the "Log In" button. Then, the second form under "<h1>New Users.." registers new users and inputs data such as First Name, Last name, and etc into final.sql after clicking the "Sign Up" button. 

home.html Javascript
The javascript within the file creates a <span> element with a warning message if the inputs for Password value and Retype Password value are not equal. This message disappears if values are equal, indicating passwords match

 login.php
This php file receives inputs from home.html form and matches user input of username and password with the data from final.sql. If the password is incorrect, it will output 'The username or password are incorrect!' If the password and username match then it will provide a Welcome message with the username provided.

signup.php
This php file is attempting to INSERT data into the auth table in final.sql database based on user inputs in the second form in home.html. Then it prints out a message saying that "You are registered now". showTable function is supposed to print a table of the data that was input. Could not figure out how to create this table and I do not think the data is being inserted into the database. 

final.sql
Contains a table that has data about registered users. This is the file that login.php compares username and password values and this is the file that signup.php is attempting to inser data
