<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <style>
.sai{
border-radius : 30px;
background : orange;
}
img{

}
a{
  margin-top: 12px;
}
</style>
</head>
<?php session_start(); error_reporting(0);?>
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
        <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#" onclick='alert("We are students of Dr.MCET doing this site for our WT mini project")'>About US</a></li>
        <li><a href="#" onclick='alert("Sairam Shanmuganathan (sairambond98@gmail.com), Raghul Prasath")'>Contact</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
<li>
  <a href="../bookbus.php" target="_parent">Book a Bus
  </a></li><li>
  <a href="../booktrain.php" target="_parent">Book a Train
  </a></li><li>
  <a href="../bookflight.html" target="_parent">Book a Flight
  </a></li><li>
  <a href="../bookhotel.html" target="_parent">Book a Hotel
  </a></li><li>
  <a href="../reservations.php" target="_parent">Previous Reservations
  </a></li><li>
  <a href="../logout.php" target="_parent">Logout
  </a></li>
  <li><img src="<?php echo $_SESSION["name"]."/".$_SESSION["name"].".jpg"?>" alt="<?php echo $_SESSION["name"]; ?>" width="50" height="50" style="border-radius : 100px;
float: right;
margin-top: 10px;
margin-right: 10px;">
<map name="profile">
  <area shape="rect" coords="0,0,40,80" href="images/addpic.php" target="sairam">  
</map></li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
</html>