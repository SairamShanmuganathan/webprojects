<!DOCTYPE html>
<html>
<head>
<title>Career Prediction</title>
<style>

</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head><body>
<center><br><br><br>
<h1 style="font-family:Hobo Std;font-style:54px;color:teal;">MCET-Career Prediction System</h1><br>
<input type="text" name="" id="name" placeholder="Enter your name" style="color : #0d87e9; border: 5px solid #ff9800; text-align: center; color: #ff9800;" /><br><br><div id="google_translate_element"></div><br><br>
<?php
error_reporting(0);
include "connect.php";
    $ran=rand(1,60);
    $ran1=0;
    if($ran>56){
        $ran1=$ran-5;
    }else{
        $ran1=$ran+5;
    }
    if($ran<$ran1){
        $temp=$ran1;
        $ran1=$ran;
        $ran=$temp;
    }
$i=0;
$j=1;
$k=1;
$result = mysql_query("SELECT * FROM questions where count between ".$ran1." and ".($ran-1));
while ($row=mysql_fetch_array($result)) {
	$i=$i+1;
	?><center>
<div class="jumbotron" style="width: 95%;">
	<h1 style="font-size: 50px;"><?php echo $row['question']; ?></h1>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="text-align:left;">
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
        
  </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
    </center>.
<?php $j=$j+4; } ?>  
<input type="submit" name="" class="btn btn-warning btn-lg" value="Submit" onclick="sai()" /><br><br>
<p class="btn btn-success btn-lg" id="res">Result</p>
    <p id="result" style="font-family:jokerman;font-size:54px;"></p>
<br><br>
 </center>
</body>
<script type="text/javascript">
	function sai(){
		var total=0;
		var i=1;
		var j=1;
while(i<=20){
	if(document.getElementById("c"+i).checked){
	var val=document.getElementById("c"+i).value;
    total=total+Number(val);
	}
	i++;
}
	document.getElementById("res").innerHTML=""+total;
    if(total>=11){
            document.getElementById("result").innerHTML="You have a good scope in the Career";
        }
        else{
            document.getElementById("result").innerHTML="We think you need a shift";
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