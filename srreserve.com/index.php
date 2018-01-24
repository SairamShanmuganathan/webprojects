<html>
<head>
<title>SR Reservations</title>
<style>

</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body onload="init()">
<div id=loadimg style="position:absolute; width:100%; text-align:center; top:300px;">
<img src="udde.gif" border=0></div>

  <script>
 var ld=(document.all);
  var ns4=document.layers;
 var ns6=document.getElementById&&!document.all;
 var ie4=document.all;
  if (ns4)
 	ld=document.loadimg;
 else if (ns6)
 	ld=document.getElementById("loadimg").style;
 else if (ie4)
 	ld=document.all.loadimg.style;
  function init()
 {
 if(ns4){ld.visibility="hidden";}
 else if (ns6||ie4) ld.display="none";
 }
 </script>
<font face="Agency FB" size="4px">
<?php 
session_start();
error_reporting(0);
if(!isset($_SESSION["name"])){
  include "nav.php";
  }else{
    include "nav1.php";
    }
  ?>
  <center>
<div class="jumbotron" style="width: 95%;">
  <h1>Welcome to SR Reservations</h1>
  <p>Welcome to the new roof of reservations!! , book a bus!!, a train!! , a flight!! , or even a hotel room!!... we will be sure that we RESERVE what you DESERVE!!!</p>
  <p><a class="btn btn-primary btn-lg">Learn more</a></p>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Our Bus Travel Partners</h3>
  </div>
  <div class="panel-body">
    <center><button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/abt.jpg"/><br>ABT Travels</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/srm.png"/><br>SRM Travels</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/kpn.png"/><br>KPN Travels</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/srs.jpg"/><br>SRS Travels</button></center>
  </div>
</div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Our Hotel Partners</h3>
  </div>
  <div class="panel-body">
    <center><button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/lm.png"/><br>Le Meridian</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/leela.png"/><br>The Leela Palace</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/download.png"/><br>Taj Coramendal</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/lalit.png"/><br>The Lalit Ashok</button></center>
  </div>
</div>

<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Our Flight Partners</h3>
  </div>
  <div class="panel-body">
    <center><button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/emi.png"/><br>Emirates</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/ai.png"/><br>Air India</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/ja.png"/><br>Jet Airways</button>
<button style="width:220px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><img src="assets/images/spi.png"/><br>SpiceJet</button></center>
  </div>
</div>

<!--<div class="nav">
<h1>SR Reservations</h1><h3>we Reserve what you Deserve</h3><a href="index1.php" class="nav_item1">Login</a><a href="home1.html" class="nav_item2">About Us</a>
</div><br><br><br><br><br>-->
</center>
<center><br><br><br><br>Designed by <a href="www.gradleworks.com">Gradle Works</a></center>
</font>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>