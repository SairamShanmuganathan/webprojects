<html>
<head>
<title>Aalayam TokenGenDesk</title>
<style>
li{
	border: 1px solid #2196f3;
	width: 150px;
	align-items: center;
}
ul{
	
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<script type="text/javascript">
	var i=0;
	var j=0;
	var k=0;
	var l=0;
	var tot=0;
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
<div class="jumbotron" style="width: 50%;">
  <h1>Welcome <?php echo $_SESSION["name"];?></h1>
  <p><a href="#" onclick="add5()" class="btn btn-primary btn-lg">+</a><a href="#"class="btn btn-primary btn-lg">Rs. 5/-<span class="badge"  id="five" style="margin-left: 10px; ">0</span></a><a href="#" onclick="sub5()" class="btn btn-primary btn-lg">-</a></p>
  <p><a href="#" onclick="add10()" class="btn btn-primary btn-lg">+</a><a href="#"class="btn btn-primary btn-lg">Rs. 10/-<span class="badge"  id="ten" style="margin-left: 10px; ">0</span></a><a href="#" onclick="sub10()" class="btn btn-primary btn-lg">-</a></p>
  <p><a href="#" onclick="add35()" class="btn btn-primary btn-lg">+</a><a href="#"class="btn btn-primary btn-lg">Rs. 35/-<span class="badge"  id="thifi" style="margin-left: 10px; ">0</span></a><a href="#" onclick="sub35()" class="btn btn-primary btn-lg">-</a></p>
  <p><a href="#" onclick="add45()" class="btn btn-primary btn-lg">+</a><a href="#"class="btn btn-primary btn-lg">Rs. 45/-<span class="badge"  id="fofi" style="margin-left: 10px; ">0</span></a><a href="#" onclick="sub45()" class="btn btn-primary btn-lg">-</a></p>
  <a href="#" class="btn btn-default btn-lg btn-block" id="tot">Rs 0/-</a>
</div>

<!--<div class="nav">
<h1>SR Reservations</h1><h3>we Reserve what you Deserve</h3><a href="index1.php" class="nav_item1">Login</a><a href="home1.html" class="nav_item2">About Us</a>
</div><br><br><br><br><br>-->
<br><br>Designed by <a href="www.ibevy.org">iBevy Forte Pvt. Ltd.</a></center>
</font>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	function add5(){
		i=i+1;
		document.getElementById("five").innerHTML=i;
		tot=tot+5;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	function add10(){
		j=j+1;
		document.getElementById("ten").innerHTML=j;
		tot=tot+10;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	function add35(){
		k=k+1;
		document.getElementById("thifi").innerHTML=k;
		tot=tot+35;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	function add45(){
		l=l+1;
		document.getElementById("fofi").innerHTML=l;
		tot=tot+45;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	function sub5(){
		if(i!=0){
		i=i-1;
		document.getElementById("five").innerHTML=i;
		tot=tot-5;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	}
	function sub10(){
		if(j!=0){
		j=j-1;
		document.getElementById("ten").innerHTML=j;
		tot=tot-10;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	}
	function sub35(){
		if(k!=0){
		k=k-1;
		document.getElementById("thifi").innerHTML=k;
		tot=tot-35;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	}
	function sub45(){
		if(l!=0){
		l=l-1;
		document.getElementById("fofi").innerHTML=l;
		tot=tot-45;
		document.getElementById("tot").innerHTML='Rs '+tot+'/-';
	}
	}
</script>
</html>