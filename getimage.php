<?php

require("include/config.inc");

     // get the image from the db
$sql = "SELECT * FROM images";

     // the result of the query
$result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
$myimage;
$db_img;
$type;
while($row = mysql_fetch_array($result)){

	$db_img = $row['img'];
	
	$type = $row['imagetype'];
}

$db_img = base64_decode(base64_encode($db_img));  //print_r($db_img );<br/><br/>			
$db_img = imagecreatefromstring($db_img);
if ($db_img !== false) {	
	switch ($type) {
		case "jpg":
		header("Content-Type: image/jpeg");
		echo $myimage = imagejpeg($db_img);
		break;
		case "gif":
		header("Content-Type: image/gif");
		echo $myimage =imagegif($db_img);
		break;
		case "png":
		header("Content-Type: image/png");
		echo $myimage =imagepng($db_img);
		break;
	}
}
imagedestroy($db_img);
$db_img = base64_decode($db_img); 
?>
