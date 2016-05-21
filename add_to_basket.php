<?php
	$connect = mysql_connect('localhost','root','')or die(mysql_error());
	mysql_select_db("users",$connect);
	session_start();
	$my_id=$_SESSION['id'];
	$prod_id=$_GET['id'];
	$res=mysql_query("SELECT `basket` FROM `user` WHERE id='$my_id'");
	$arr=mysql_fetch_array($res);
	$basket=unserialize($arr['basket']);
	$basket[]=$prod_id;
	$basket=serialize($basket);
	mysql_query("UPDATE `user` SET `basket`='$basket' WHERE id='$my_id'");	
	header("location: kids.php");
 ?>