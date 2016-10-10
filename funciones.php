<?php 
function operacion($x,$y,$z)
{
	if ($y=='+') {
		$r=$x+$z;

	}else if($y=='-'){
		$r=$x-$z;
	}else if($y=='*'){
		$r=$x*$z;
	}else if($y=='/'){
		if($z==0){
			$r="El denominador debe ser mayor que cero";
		}else
		$r=$x/$z;
	}
	return $r;
}



 ?>