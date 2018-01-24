<!DOCTYPE html>
<html>
<head>
<title>Quiz matematico</title>
<style>

</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head><body>
<center><br><br><br>
<p><a class="btn btn-warning btn-lg">Quiz matematico</a></p><br>
<p style="color: #ff9800; font-size: 30px;"></p><br>
<input type="text" name="" id="name" placeholder="Enter your name" style="color : #0d87e9; border: 5px solid #ff9800; text-align: center; color: #ff9800;" /><br><br><div id="google_translate_element"></div><br><br>
<?php
error_reporting(0);
include "connect.php";
$ran=rand(1,20);
$ran1=0;
if($ran>10){
$ran1=$ran-10;
}else{
	$ran1=$ran+10;
}
if($ran1<$ran){
	$temp=$ran1;
	$ran1=$ran;
	$ran=$temp;
}
$i=0;
$j=1;
$result = mysql_query("SELECT * FROM questions where count between ".$ran." and ".($ran1-1));
while ($row=mysql_fetch_array($result)) {
	$i=$i+1;
	?>
<div class="jumbotron" style="width: 95%;">
	<h1 style="font-size: 50px;"><?php echo $row['question']; ?></h1>
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4"><center>
	<?php 
	echo "<br>";
	echo "<input type=\"radio\" id=\"c".$j."\" "."name=\"opt".$i."\" value=\"".$row['opt1']."\">".$row['opt1'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+1)."\""."name=\"opt".$i."\" value=\"".$row['opt2']."\">".$row['opt2'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+2)."\""."name=\"opt".$i."\" value=\"".$row['opt3']."\">".$row['opt3'];
	echo "<br><br>";
	echo "<input type=\"radio\" id=\"c".($j+3)."\""."name=\"opt".$i."\" value=\"".$row['opt4']."\">".$row['opt4'];
	echo "<br><br>";
	?><br><br></center>
	</div>
	<div class="col-sm-4"></div>
	</div>
	<input type="hidden" name="" value=<?php echo $row['ans']; ?> id=<?php echo "\"ans".$i."\""?>/>
  </div>
<?php $j=$j+4; } ?>  
<input type="submit" name="" class="btn btn-warning btn-lg" value="Submit" onclick="sai()" /><br><br>
<p class="btn btn-success btn-lg" id="res">Result</p>
<br><br>
 </center>
</body>
<script type="text/javascript">
	function sai(){
		var total=0;
		var i=1;
		var j=1;
while(i<=40){
	if(document.getElementById("c"+i).checked){
	var val=document.getElementById("c"+i).value;
	var result=document.getElementById("ans"+j).value;
	if(val==result){
		total=total+1;
	}
	j++;
	}
	i++;
}
	if(Number(total)>5){
	document.getElementById("res").innerHTML="Your result is "+total+" you have awesome mathematical skills";
}if(Number(total)<=5){
	document.getElementById("res").innerHTML="Your result is "+total+" try to improve in Math";
}
}
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</html>