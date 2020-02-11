<?php
	
$valor = 3;

function tabuada($valor){
	$cont = 0;
	for ($i = 0; $i < 11 ; $i++) { 
		echo $valor.' x '.$i .' = '.($valor*$i).'<br>';
	}
}
tabuada($valor);

?>
