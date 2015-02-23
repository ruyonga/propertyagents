<?php

// Inialize session

session_start();
if(!isset($_SESSION['username'])){
  header("Location:admin.php?var='login please!!'");
}

$username =  $_SESSION['username'];

// Check, if username session is NOT set then this page will jump to login page
?>
<!DOCTYPE html>
<html>
<head>
  <title>Estate Owner</title>
  <link rel="stylesheet" type="text/css" href="signin.css" media="screen">
  <link rel="stylesheet" type="text/css" href="darkly.css" media="screen">
  
  <link href="../include/2/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="../include/2/js-image-slider.js" type="text/javascript"></script>
  <script src="jquery.js"></script>

  <script src="bootstrap.js" type="text/javascript"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    body{
      margin-right: 10%;
      margin-left: 10%; 
    }
    p{
      color:white;
    }
    h1{
      margin-top: -1%;
    }
  </style>
</head>
<body>
  <a><h1>Seno Properties</h1></a>
<!--   <table>
    <tr style="width:80%;">
      <td>
        <div class="alert alert-dismissable alert-success" style="margin-top:2%; width:80%;">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Welcome <?php echo $username; ?></strong> You successfully logged in. <a href="#" class="alert-link">All Activities are being monitored</a>.
        </div>
      </td><td>
     
    </td>

  </tr>
</table> -->
<style type="text/css">
  td{
    width:0.1%;
  }
</style>
<table style="margin-bottom:2%;">
  <tr>
    <td ><a href="../index.php" > 
      <button type="button"  class="btn btn-default" >Home</button></a>
    </td>
    <td ><a href="../rent.php" > 
      <button type="button"  class="btn btn-default" >View</button></a>
    </td>
    <td><a href="http://localhost/phpmyadmin" > 
      <button type="button"  class="btn btn-default" >Advance</button></a>
    </td>
    <td><a href="logout.php" > 
      <button type="button"  class="btn btn-default" >Logout</button></a>
    </td>
  </tr>
</table>

<div class="well">
  <?php
  if(isset($_POST['upload'])){
    include("config.inc");
    if (!isset($_FILES['image']['tmp_name'])) {
      echo "No image attached";
    }else{
      $file=$_FILES['image']['tmp_name'];
      $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $image_name= addslashes($_FILES['image']['name']);

      $location =  mysql_real_escape_string($_POST['location']);
      $type =  mysql_real_escape_string($_POST['type']);
      $details = mysql_real_escape_string($_POST['details']);
      $price =  mysql_real_escape_string($_POST['price']);
      
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
      
      $image="uploads/" . $_FILES["image"]["name"];
      

      $query = "INSERT INTO images(id,type,location,price,details,image) 
      VALUES('','$type','$location',$price,'$details','$image')";
      mysql_query($query) or die(mysql_error());  
     // $save=mysql_query("INSERT INTO photos (location, caption) VALUES ('$location','$caption')");
      header("location: upload.form.php?okay='successfully uploaded'");
      exit();         
    }
  }
  ?>

  <?php if(isset($_POST['okay'])){
    $msg = $_POST['okay'];
    echo $msg;
  }?>

  <a><h2>Admin Pannel</h2></a>


  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Add New Property</h3>
    </div>
    <div class="panel-body">
      <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <div class="form-group">
         <label class="control-label" for="focusedInput">Type</label>
         <input class="form-control"autofocus="" required= "" id="focusedInput" name="type" placeholder="land, house, building" type="text">
       </div>
       <div class="form-group">
         <label class="control-label" for="focusedInput">Location</label>
         <input class="form-control" required= "" id="focusedInput" name="location" placeholder="where is it located" type="text">
       </div>
       <div class="form-group">
         <label class="control-label">Price</label>
         <div class="input-group">
          <span class="input-group-addon">$</span>
          <input class="form-control" required= "" placeholder="Amount in dolars" type="text" name="price">           
        </div>
      </div>
      <div class="form-group">
        <label for="textArea" class="control-label">Details</label>

        <textarea class="form-control" required= ""rows="3" name="details" ></textarea>

      </div>
      <div class="input-group">
       <label class="control-label">Image</label>
       <input type="file" name="image" id="file">
     </div>
     <div class="modal-footer">
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button class="btn btn-default" type="reset">Cancel</button>
          <button type="submit" name="upload" class="btn btn-primary">Submit</button>
        </div>
      </div> 
    </div>
  </div>     
</form>
</div>
</div>
</div>
</body>
</html>
