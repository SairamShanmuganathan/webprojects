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
<!--<br><br><br><br><h2><font size="6" >Book Train</font></h2><br><br>
<form action="bkcnfrm.html">
<fieldset>
<br>
<input type="text" placeholder="From place"/>&nbsp&nbsp&nbsp&nbsp
<input type="text" placeholder="To place"/><br><br>
<input type="text" placeholder="dd/mm/yyyy"/><br><br>
<select>
<option value="1">Rajdhani Express</option>
<option value="2">Duronto Express</option>
<option value="3">Sathapthi Express</option>
<option value="4">Coimbatore Express</option>
<option value="5">Chennai Express</option>
<option value="6">Lokmanya Tilak Express</option>
</select><br><br>
<select>
<option value="1">I AC</option>
<option value="2">II AC</option>
<option value="3">III AC</option>
<option value="4">Second Class</option>
<option value="5">Chair Car AC</option>
<option value="6">Chair Car</option>
</select>
<br><br><br>
<input type="submit" class="sai" value="Conform Booking"/>
</fieldset>
<br>
</form>-->
<div class="jumbotron" style=" width: 50%;">
<form class="form-horizontal" method="post">
  <fieldset>
    <legend>Book a Train</legend>
    <div class="form-group" style=" width: 80%;">
           <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="From place" name="fplace">
      </div>
    </div>
     <div class="form-group" style=" width: 80%;">
           <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="To place" name="tplace">
      </div>
    </div>
     <div class="form-group" style=" width: 80%;">
        <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="date">
      </div>
    </div>
    <div class="form-group" style=" width: 80%;">
       <div class="col-lg-10">
        <select class="form-control" name="train">
          <option value="Rajdhani Express">Rajdhani Express</option>
<option value="Duronto Express">Duronto Express</option>
<option value="Sathapthi Express">Sathapthi Express</option>
<option value="Coimbatore Express">Coimbatore Express</option>
<option value="Chennai Express">Chennai Express</option>
<option value="Lokmanya Tilak Express">Lokmanya Tilak Express</option>
        </select>
      </div>
    </div>
     <div class="form-group" style=" width: 80%;">
       <div class="col-lg-10">
        <select class="form-control" name="class">
          <option value="I AC">I AC</option>
<option value="II AC">II AC</option>
<option value="III AC">III AC</option>
<option value="Second Class">Second Class</option>
<option value="Chair Car AC">Chair Car AC</option>
<option value="Chair Car">Chair Car</option>
        </select>
      </div>
    </div>
    <div class="form-group" style=" width: 80%;">
      <div class="col-lg-10 col-lg-offset-2">
      <input type="hidden" name="c" value="3">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" onclick='alert("Feature Will Be Availabe Soon!!")'>Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
<br>
Designed by <a href="www.gradleworks.com">Gradle Works</a>
</center>
</font>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>