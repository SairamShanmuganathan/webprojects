<html>
<?php session_start(); error_reporting(0);?>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="assets/images/logo.png" width="200" height="45" /></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#" onclick='alert("We are students of Dr.MCET doing this site for our WT mini project")'>About US</a></li>
        <li><a href="#" onclick='alert("Sairam Shanmuganathan (sairambond98@gmail.com), Raghul Prasath")'>Contact</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php if($_SESSION["name"]==''){echo 'index1.php';}else{echo 'home.php';} ?>"><?php if($_SESSION["name"]==''){echo Login;}else{ echo $_SESSION["name"];} ?></a></li>
        <li><a href="index2.php">Sign up</a>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</html>