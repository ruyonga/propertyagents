<!Doctype html>

<html>
<head>
  <title>Estate Owner</title>
  <link rel="stylesheet" type="text/css" href="include/darkly.css" media="screen">
  <link rel="stylesheet" type="text/css" href="include/estatestyle.css" media="screen">
  <link href="include/2/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="include/2/js-image-slider.js" type="text/javascript"></script>
  <script src="include/jquery.js"></script>
  <script src="include/bootstrap.js"></script>
  
  <script src="include/lightbox.js" type="text/javascript"></script>
  <link href="include/generic.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--   <link rel="stylesheet" href="include/bootstrap.css" > -->
  <style type="text/css">
    html{
      font-family:Arial;
    }
  </style>
</head>
<body>

  <div class="navbar navbar-inverse" style="font-size:1.9em; font-weight:bold;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img id="logo"src="include/img/top.png">Estate Owner</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>

        <li><a href="rent.php">Gallery</a></li>
        <li class="dropdown"><a href="morgage.php"  class="dropdown-toggle" data-toggle="dropdown" >
          Estates <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="butabika.php">Butabika</a></li>

            <li><a href="bugos.php">Bugolobi</a></li>
            <li><a href="naalya.php">Naalya</a></li>

            <li><a href="ntida.php">Ntinda</a></li>
          </ul>
        </li>
        <li><a href= "contactus.php">Contact Us</a></li>
        <form class="navbar-form navbar-left" action="rent.php" method="post">
          <input class="form-control col-lg-8" placeholder="Search by Location" type="text" name="location">
        </form>

      </ul>
    </li>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li><a href="include/admin.php">Admin</a></li>
  </ul>
</div>
</div>

