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
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<font face="Agency FB" size="4px">
<?php include "nav.php";?>
<center><div class="jumbotron"><h1>Sign UP</h1><br><button style="width: 50%; float: center; " type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
	<form action="ins.php" method="post" name="sai">
	<div class="form-group">
  <input class="form-control" type="text" placeholder="Username (only chars)" onkeyup="funct()" name="un" id="un" required>
</div>
<div class="form-group">
  <input class="form-control" type="Password" placeholder="Password" name="logpass" onkeyup="funct1()" id="logpass" required>
</div>
<div class="form-group">
  <input class="form-control" type="eMail" placeholder="eMail ID" name="mail" required>
</div>
<div class="form-group">
  <input class="form-control" type="number" placeholder="Mobile Number" name="mnum" onkeyup="funct2()" id="mnum" required>
</div>
<div class="form-group">
  <div class="input-group">
  <input type="hidden" name="c" value="4">
      <input type="submit" class="btn btn-default" value="Sign up" />
  </div>
</div>
</button>

</button><br><br></div>

Designed by <a href="www.gradleworks.com">Gradle Works</a></center>
</font>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
  function funct(){
    var letters=/^[A-Za-z]+$/;
   var x=document.forms["sai"]["un"].value;
    if(x.match(letters)){
      document.forms["sai"]["un"].style.color="green";
    }else{
      document.forms["sai"]["un"].style.color="red";
    }
  }

  function funct1(){
    var letters=/^[A-Za-z0-9_$]+$/;
   var x=document.forms["sai"]["logpass"].value;
    if(x.match(letters) && x.length>=7){
      document.forms["sai"]["logpass"].style.color="green";
    }else{
      document.forms["sai"]["logpass"].style.color="red";
    }
  }

    function funct2(){
   var x=document.forms["sai"]["mnum"].value;
    if(x>7000000000 && x<9999999999){
      document.forms["sai"]["mnum"].style.color="green";
    }else{
      document.forms["sai"]["mnum"].style.color="red";
    }
  }
</script>
</body>
</html>