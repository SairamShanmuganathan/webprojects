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
<center><h1>Reserved Bus Bookings</h1>
<fieldset>
	<table class="table table-striped table-hover " style="width: 50%;">
  <thead>
    <tr>
      <th>Booking No.</th>
      <th>Journey</th>
      <th>Date</th>
      <th>Travel Operator</th>
      <th>Print Ticket</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	include "connect.php";
	$res=mysql_query("select * from bus where user='".$_SESSION["name"]."'");
	while($row=mysql_fetch_array($res)){?>
<tr>
<td><?php echo $row['count']; ?></td>
<td><?php echo $row['fplace']."-".$row['tplace']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['travels']; ?></td>
<td><form action="busres.php" target="_parent" method="post">
<input type="hidden" value="<?php echo $row['count'];?>" name="co">
<input type="submit" value="Print Ticket"/>
</form></td></tr><?php 
	}	?>
</tbody>
	</table>
</fieldset>
<br>
Designed by <a href="www.gradleworks.com">Gradle Works</a>
</center>
</font>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>