<?php 
/*
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
*/

//IMPRESSÕES:
/*
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

*/

//echo teste();


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Programação Dinâmica - Multiplicação de cadeia de matriz</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    	<header>
    		<h1>Programação Dinâmica - Multiplicação de cadeia de matriz</h1>
    	</header>
    	<section>
    		<h2>Painel do usuário</h2>
    		<p>Insira os dados para gerar a quantidade de multiplicação mínima.</p>
    		<form action="#" method="get">
    			<p>Digite as dimensões das matrizes:</p>
    			A1<input type="number" name="v1" for="v1"> X <input type="number" name="v1_2" for="v1_2">
    			<input type="submit" value="Gerar">
    		</form>
    	</section>
    </body>
</html>