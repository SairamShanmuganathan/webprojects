<?php

error_reporting(0);


session_start();
include "connect.php";

$c=$_POST["c"];
echo $c;
if($c==1){
mysql_query("insert into users values(null,'$_POST[name]','$_POST[pwd]','$_POST[email]','$_POST[mn]')");

$_SESSION["name"]=$_POST["name"];
$_SESSION["email"]=$_POST["email"];
header("location:images/addpic.php");
}

if($c==2){
$conn = mysql_connect("localhost","root","");
mysql_select_db("sr",$conn);
$result = mysql_query("SELECT * FROM users WHERE username='$_POST[un]' and password = '$_POST[logpass]'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["name"] = $row[username];
$_SESSION["email"] = $row[email];
}
if(isset($_SESSION["name"])) {
header("location:index.php");
}else{
header("location:index1.php");
}
}

if($c==3){
mysql_query("insert into bus values(null,'$_POST[fplace]','$_POST[tplace]','$_POST[date]','$_POST[travels]','$_SESSION[name]')");

$res=mysql_query("SELECT * FROM busbackup WHERE op='$_POST[travels]'");
while ($row=mysql_fetch_array($res)) {
	$seat=$row['seats'];
}
$seat=$seat-1;
mysql_query("update busbackup set seats=".$seat." where op='$_POST[travels]'");
header("location:bkcnfrm.php");
}

if($c==4){
mysql_query("insert into users values(null,'$_POST[un]','$_POST[logpass]','$_POST[mail]','$_POST[mnum]')");

$_SESSION["name"]=$_POST["un"];
$_SESSION["email"]=$_POST["mail"];
header("location:index.php");
}
?>