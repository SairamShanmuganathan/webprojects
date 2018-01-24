<!DOCTYPE html>
<html>
<head>
<title>Character Analysis</title>
<style>

</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head><body>
<center><br><br><br>
    <h1 style="font-family:Hobo Std;color:teal;">MCET Character Analysis System</h1><br>
    <input type="text" name="" id="name" placeholder="Enter your name" style="color : #0d87e9; border: 5px solid salmon;border-radius:10px; text-align: center; color: #ff9800;" /><br><br><br></center>
<?php
error_reporting(0);
include "connect.php";
$ran=rand(1,60);
$ran1=0;
if($ran>50){
    $ran1=$ran-10;
}else{
    $ran1=$ran+10;
}

$i=0;
$j=1;
$k=1;
$result = mysql_query("SELECT * FROM questions where count between ".$ran." and ".($ran1-1));
while ($row=mysql_fetch_array($result)) {
	$i=$i+1;
	?>
<div class="jumbotron" style="width: 95%;padding-right:0px;margin-right:0px;">
	<div class="inside" style="padding-left:500px;"><h1 style="font-size: 50px;"><?php echo $row['question']; ?></h1>
	<?php 
	echo "<br>";
	echo "<input type=\"radio\" id=\"c".$j."\" "."name=\"opt".$i."\" value=\"".$k."\">".$row['opt1'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+1)."\""."name=\"opt".$i."\" value=\"".($k+1)."\">".$row['opt2'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+2)."\""."name=\"opt".$i."\" value=\"".($k+2)."\">".$row['opt3'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+3)."\""."name=\"opt".$i."\" value=\"".($k+3)."\">".$row['opt4'];
	echo "<br><br>";
	
	?><br><br>
	<input type="hidden" name="" value=<?php echo $row['ans']; ?> id=<?php echo "\"ans".$i."\""?>/>
  </div></div>
<?php $j=$j+4; } ?>  
<input type="submit" name="" class="btn btn-warning btn-lg" value="Submit" onclick="sai()" /><br><br>
<p class="btn btn-success btn-lg" id="res">Result</p>
<br><br>
</body>
<script type="text/javascript">
	function sai(){
		var total=0;
		var i=1;
		var j=1;
while(i<=40){
	if(document.getElementById("c"+i).checked){
	var val=document.getElementById("c"+i).value;
    total=total+Number(val);
	}
	i++;
}
	document.getElementById("res").innerHTML=""+total;
}
</script>
</html>