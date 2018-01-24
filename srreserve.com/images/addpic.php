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
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
<font face="Agency FB" size="4px">
<?php session_start(); error_reporting(0); include "nav1.php";?>
<center>
<button style="float: left; margin: 20px 30px 20px 30px; width: 300px; height: 450px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><h2><font size="6" >Set a New <br>Profile Picture!!</font></h2><br><br>
<img src="<?php echo $_SESSION["name"]."/".$_SESSION["name"].".jpg"?>" alt="<?php echo $_SESSION["name"]; ?>" width="80" height="80"/>
<br><br><br><br>
<form action="upload.php" method="post" enctype="multipart/form-data" target="_parent">
<input type="file" class="sai" name="file"/><br><br>
<input type="submit" value="Upload"/>
</form>
<form action="../home.html" target="_parent">
<input type="submit" value="Cancel"/>
</form></button>
<br>
<button style="float: left; margin: -10px 30px 20px 30px; width: 300px;" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><h2><font size="6" >Upload new <br> ID card!!</font></h2><br><br>
<img src="<?php echo $_SESSION["name"]."/".$_SESSION["name"]."id.jpg"?>" alt="<?php echo $_SESSION["name"]; ?>" width="200" height="150"/>
<br><br><br><br>
<form action="upload1.php" method="post" enctype="multipart/form-data" target="_parent">
<input type="file" class="sai" name="file"/><br><br>
<input type="submit" value="Upload"/>
</form>
<form action="../home.html" target="_parent">
<input type="submit" value="Cancel"/>
</form></button>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
Designed by <a href="www.gradleworks.com">Gradle Works</a>
</center>
</font>
<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>