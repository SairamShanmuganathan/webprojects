<html>
<head>
<title>SR Reservations</title>
<!--<style>
fieldset {background : rgb(38,38,38);
width : 500;
border-radius : 100px;
}
.sai{
border-radius : 30px;
background : orange;
}
body{
background : rgb(235,97,25);
}
</style>-->
<style type="text/css">
	.colo{
		background-color: white;
	}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<font face="Agency FB" size="4px">
<?php include "nav.php";?>
<center><div class="jumbotron"><h1>Login</h1><br><button style="width: 50%; float: center; " type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
	<form action="ins.php" method="post">
	<div class="form-group"> 
  <input class="form-control" type="text" placeholder="Username" name="un" onfocus="func(this)" class="colo">
</div>
<div class="form-group">
  <input class="form-control" type="Password" placeholder="Password" name="logpass" onfocus="func(this)" class="colo">
</div>
<div class="form-group">
  <div class="input-group">
  <input type="hidden" name="c" value="2">
      <input type="submit" class="btn btn-default" value="Login"/>
  </div>
</div>
</button>

</button><br><br></div>

Designed by <a href="www.gradleworks.com">Gradle Works</a></center>
</font>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	function func(a){
		a.style.background="yellow";
	}
</script>
</body>
</html>