<?php

// Inialize session
session_start();

// Include database connection settings
include('config.inc');

$myusername= mysql_real_escape_string($_POST['username']);
$mypassword=mysql_real_escape_string(md5($_POST['password'])) ;

//To protect MySQL injection (more detail about MySQL injection)
// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM user WHERE `username` = '$myusername' && `password` = '$mypassword'");

// Check username and password match
$checked=mysql_fetch_array($login);
if ($checked>0) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location:upload.form.php');
}
else {
// Jump to login page

header('Location: admin.php'); 
 
}

?>
