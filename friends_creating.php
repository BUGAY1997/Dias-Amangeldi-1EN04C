<?php 
$connect = mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db("users",$connect);
$zapros = mysql_query("SELECT * FROM vewi WHERE price LIKE '$".$_POST['search']."$'") or die("logushki");
$output= "";
while($res = mysql_fetch_array($zapros))
{
	$output.='<div class="img">';
	$output.='<a target="_blank" href="kids2.jpg">';
	$output.='<img src="';
	$output.= $res['image'].'" alt="Forest" width="600" height="400">';
	$output.='</a>';

	$output.=' <div class="desc">Cost : '.$res['price'].' kzt </div><a href="add_to_basket.php?id='.$res['id'];
	$output.='" class="button">add to basket</a>
            </div>';
}
echo $output;