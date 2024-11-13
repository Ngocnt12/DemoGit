<?php
session_start();
$_SESSION['mycart']=array();
$sq1=[1,"san pham1",100,2];
$sq2=[2,"san pham2",200,3];
$cart=[];
$cart[]=$sq1;
$cart[]=$sq2;
$_SESSION['mycart']=$cart;
echo '<h1>Session da tao</h1>';
echo '<a href="2.php">Show du lieu session</a>';
?>