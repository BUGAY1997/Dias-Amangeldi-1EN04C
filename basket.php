<?php 
$connect = mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db("users",$connect);
session_start();
include 'functions.php';
?>
<!Doctype html>
<html>
<head>
<meta charset = "windows-1251">
<link rel="stylesheet" type ="text/css" href="kids.css">
</head>
<body>
<div>
  <div class="iconka">
    <div class="image">
      <img src="dasd.jpg" alt="zna4ok" style="width:250px;height:75px;">
    </div>
  <div>
    <ul>
   <li class="dropdown">
    <a href="#" class="dropbtn">Men</a>
    <div class="dropdown-content">
      <a href="men.html">Shoes</a>
      <a href="#">T-shirt</a>
      <a href="#">Jacket</a>
    </div>
     <li class="dropdown">
    <a href="#" class="dropbtn">Women</a>
    <div class="dropdown-content">
      <a href="Women.html">Shirt</a>
      <a href="#">Trousers</a>
      <a href="#">Jacket</a>
    </div>
     <li class="dropdown">
    <a href="#" class="dropbtn">Kids</a>
    <div class="dropdown-content">
      <a href="kids.php">Boys</a>
      <a href="#">Girls</a>
      <a href="#">Jacket</a>
    </div>


     <li class="dropdown">
    <a href="#" class="dropbtn">Help</a>
    <div class="dropdown-content">
      <a href="about.html">About us!</a>
      <a href="#">Deliver</a>
      <a href="#">Jacket</a>
    <div>
      <li style ="float:right"><a class="Login"href="login.php">Log in</a>
      <li style="float:right"><a class="karzina" href="basket.php">Basket</a>
  </li>

<div class="other">
  <?php 
    show_box($_SESSION['id']);
       ?>
  </div>

</div>
  <div class="img-with-text">
    <img src="visa.jpg" alt="sometext" style="width:100;height:50px" >
    <p>Payment method</p>
</div>
<div class="forbeS">
  <img src="forbes.jpg" alt="sometext" style="width:100;height:50px" >
  <img src="palec.jpg" alt="sometext" style="width:100;height:50px" >
</div>
