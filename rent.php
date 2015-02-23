


<?php include("header.php"); ?>
<?php include("include/slider.html"); ?> 



<style type="text/css">
	#main{
		padding-left: 10%;
		color: black;
		padding-top: 2%;
		padding-right: 10%;
		font-size: 1.4em;
	}
	p{
		color: black;
		padding-top: 1%;
		font-family: Times;
		margin-left: 2%;
	}
	#logo{
		width:50px;
	}	
	ul,li{
		font-size: 21px;
	}
</style>
<div id="main">
	<link rel="stylesheet" type="text/css" href="include/gallery.css">
	<?php
	require("include/config.inc");
	if(isset($_POST['location'])){

		$location = $_POST["location"];

     // get the image from the db


     // the result of the query
		$result = mysql_query("SELECT * FROM images WHERE `location` LIKE '$location%'") or die(mysql_error()); 
		
		$num_results = mysql_num_rows($result);
		if($num_results == 0){
			echo "We have no property in ". $location;
		
		}else{
			
			while($row = mysql_fetch_array($result))
			{


				echo '<section class="image-gallery group">';

				echo '<figure tabindex="1">';
				echo  '<img src="include/'.$row['image'].'" height="180" width="320">';
				echo  '	<figcaption><p >'.$row['details'].'<br />'.$row['location'].'<br /> $'.$row['price'].'</p></figcaption>';
				echo  '	</figure>';
			}
			}
	}else{


     // get the image from the db

		$sql = "SELECT * FROM images";

     // the result of the query
		$result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

		while($row = mysql_fetch_array($result))
		{


			echo '<section class="image-gallery group">';

			echo '<figure tabindex="1">';
			echo  '<img src="include/'.$row['image'].'" height="180" width="320">';
			echo  '	<figcaption><p >'.$row['details'].'<br />'.$row['location'].'<br /> $'.$row['price'].'</p></figcaption>';
			echo  '	</figure>';
		}
	}
	?>



</div>
<?php include("include/footer.php"); ?>