<?php
error_reporting(0);
session_start();
include "connect.php";
$co=$_POST["co"];
$res=mysql_query("select * from bus where user='".$_SESSION["name"]."' and count=".$co);
?>
<html>
<head>
<title>SR Reservations</title>
<style>
.sai{
border-radius : 30px;
background : orange;
}
body{
background : rgb(235,97,25);
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<font face="Agency FB" size="4px">
<?php session_start(); error_reporting(0); include "nav1.php"; ?>
<center>
<div class="jumbotron" style="width: 60%;">
<u><h2><font size="6" >Reserved Bus Ticket</font></h2></u><br><br>
<fieldset>
	<?php
	while ($row=mysql_fetch_array($res)) {?>
	From Place : <?php echo $row['fplace']; ?><br>
	To Place : <?php echo $row['tplace']; ?><br>
	Date : <?php echo $row['date']; ?><br>
	Travel Operator : <?php echo $row['travels']; ?>	<br>
	Reserved by : <?php echo $row['user'];
	}?>
</fieldset>
<hr>
<br>
<fieldset>
	Attached Id <br>
	<img src="<?php echo "images/".$_SESSION["name"]."/".$_SESSION["name"]."id.jpg"?>" alt="<?php echo $_SESSION["name"]; ?>" width="200" height="150"/>
</fieldset>
<br>
<a href="#" class="btn btn-primary btn-lg" onclick="func()" id="print">Print</a>
</form>
</div>
<br>
Designed by <a href="www.gradleworks.com">Gradle Works</a>
</center>
</font>
<script type="text/javascript">
	function func(){
document.getElementById("print").style.display='none';
window.print();
	}
</script>
</body>
</html>