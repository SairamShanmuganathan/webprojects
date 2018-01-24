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
<?php session_start(); error_reporting(0); include "nav1.php";?>
<center>
<!--<br><br><br><br><h2><font size="6" >Book Bus</font></h2><br><br>
<form action="ins.php" method="post">
<input type="text" placeholder="From place" name="fplace"/>&nbsp&nbsp&nbsp&nbsp
<input type="text" placeholder="To place" name="tplace"/><br><br>
<input type="text" placeholder="dd/mm/yyyy" name="date"/><br><br>
<input type="hidden" name="c" value="3"/>
<select name="travels">
<option value="KPN travels">KPN travels</option>
<option value="SRM travels">SRM travels</option>
<option value="ABT travels">ABT travels</option>
</select>
<br><br><br>
<input type="submit" class="sai" value="Confirm Booking"/>
</fieldset>
<br><br><br>
</form>-->
<div class="jumbotron" style=" width: 50%;">
<form class="form-horizontal" action="ins.php" method="post">
  <fieldset>
    <legend>Book a Bus</legend>
    <div class="form-group" style=" width: 80%;">
           <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="From place" name="fplace" required>
      </div>
    </div>
     <div class="form-group" style=" width: 80%;">
           <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="To place" name="tplace" required>
      </div>
    </div>
     <div class="form-group" style=" width: 80%;">
        <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="date" required>
      </div>
    </div>
    <div class="form-group" style=" width: 80%;">
       <div class="col-lg-10">
        <select class="form-control" name="travels" required>
          <option value="KPN travels">KPN travels</option>
          <option value="SRM travels">SRM travels</option>
          <option value="ABT travels">ABT travels</option>
        </select>
      </div>
    </div>
    <div class="form-group" style=" width: 80%;">
      <div class="col-lg-10 col-lg-offset-2">
      <input type="hidden" name="c" value="3">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
<table class="table table-striped table-hover " style="width: 50%;">
  <thead>
    <tr>
      <th>Bus No.</th>
      <th>Travel Operator</th>
      <th>Seats Available</th>
    </tr>
  </thead>
  <tbody>
<?php
error_reporting(0);
include "connect.php";
$res=mysql_query("select * from busbackup");
while ($row=mysql_fetch_array($res)) {?>
<tr>
<td><?php echo $row['count']; ?></td>
<td><?php echo $row['op'];?></td>
<td><?php echo $row['seats'];?></td>
</tr><?php
}
?>
</tbody>
</table>
<br>
Designed by <a href="www.gradleworks.com">Gradle Works</a>
</center>
</font>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>