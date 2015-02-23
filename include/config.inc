
<?php

$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT 						necessary to change this even this script has already online on the internet.
$dbname   = 'catalina'; // Your database name.
$username = 'root';             // Your database username.
$password = 'toor';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE( mysql_error().'Database name is not available!');

?>
