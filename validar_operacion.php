<?php 
include('funciones.php');
$x=$_GET['a'];
$y=$_GET['signo'];
$z=$_GET['b'];

$r=operacion($x,$y,$z);

 	echo "= ".$r;



 ?>