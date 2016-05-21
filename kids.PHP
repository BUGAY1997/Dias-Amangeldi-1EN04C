<!Doctype html>
<html>
<head>
<meta charset = "windows-1251">
<script src="jquery-1.12.3.min.js"></script>

<link rel="stylesheet" type ="text/css" href="kids.css">
</head>
<body>
<?php 
include 'functions.php';
$connect = mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db("users",$connect);
session_start();
$id=$_SESSION['id'];
$user=select_all($id);
 ?>
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
      <a href="men.php">Shoes</a>
      <a href="#">T-shirt</a>
      <a href="#">Jacket</a>
    </div>
     <li class="dropdown">
    <a href="#" class="dropbtn">Women</a>
    <div class="dropdown-content">
      <a href="Women.php">Shirt</a>
      <a href="#">Trousers</a>
      <a href="#">Jacket</a>
    </div>
     <li class="dropdown">
    <a href="kids.php" class="dropbtn">Kids</a>
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
      <li style="float:right;margin-right:20px;color:white;"><h3><?=$user['username']?></h3>
  </li>
</div>

<?php 
    show_products();
       ?>

<!-- </div>
<div class = "col-md-12" style = "border:1px solid black">
  <input type = "text" name = "search" id="search">  </input>
</div>
<div class = "col-md-12" id= "result"> -->

</div>
  <div class="img-with-text">
    <img src="visa.jpg" alt="sometext" style="width:100;height:50px" >
    <p>Payment method</p>
</div>
<div class="forbeS">
  <img src="forbes.jpg" alt="sometext" style="width:200;height300px" >
  <img src="palec.jpg" alt="sometext" style="width:100;height:50px" >
</div>
<script type="text/javascript">
// $(document).ready(function()
// {
//   $("#search").keyup(function()
//   {
//     var txt = $(this).val();
//     $('#result').html('');
//     $.ajax(
//      {
//       url:"friends_creating.php",
//       method : "post",
//       data:{"search":txt},
//       dataType:"text",
//       success:function(data)
//       {
//         $("#result").html(data);
//       }
//      }
//       );
//   }
//     );
// } );
// </script>
</body>
</html>
  