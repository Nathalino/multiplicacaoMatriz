<?php 

error_reporting(E_ALL & ~ E_NOTICE);


define(Infinito, 2147483647);

$p = [30,35,15,5,10,20,25];
$matriz = array();
$s = array();

$stri;

$tamanho = count($p)-1;

for($z = 0; $z < $tamanho; $z++){
	$matriz[$z][$z] = 0;
}


for($l = 1; $l < $tamanho; $l++){

	for($i=0 ; $i < $tamanho-$l; $i++){

		$j = $i + $l;
		$matriz[$i][$j] = Infinito;

		for($k = $i; $k < $j; $k++){

			$q = $matriz[$i][$k] + $matriz[$k + 1][$j] + $p[$i] * $p[$k + 1] * $p[$j + 1];
			
			if($q < $matriz[$i][$j]){
				
				$matriz[$i][$j] = $q;
				$s[$i][$j] = $k+1;

			}
		}
	}
}

function otimaMultiplicacao($s, $i, $j){

	global $stri;

	if($i==$j){
		$stri .= "A".($i+1)." ";
	}else{
		$stri .= " ( ";
		otimaMultiplicacao($s, $i, $s[$i][$j] - 1, $stri);
		otimaMultiplicacao($s, $s[$i][$j], $j, $stri);	
		$stri .= " ) ";
	}

	return $stri;
}



//IMPRESSÕES:

for($x = 0; $x < $tamanho; $x++){
	for($y = 0; $y < $tamanho; $y++){
		if(isset($matriz[$x][$y]) != true){
			echo " - ";
		}else{
			echo $matriz[$x][$y]." ";
		}
	}
	echo "<br>";
}

echo "<br><br>";

for($x = 0; $x < $tamanho; $x++){
	for($y = 0; $y < $tamanho; $y++){
		if(isset($s[$x][$y]) != true){
			echo " - ";
		}else{
			echo $s[$x][$y]." ";
		}
	}
	echo "<br>";
}

echo "<br><br>";

echo otimaMultiplicacao($s, 0, $tamanho-1);

//echo teste();


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Multiplicação de Matriz</title>
        <link rel="stylesheet" type href="">
    </head>
    <body>
    </body>
</html>