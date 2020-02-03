<?php
// DEFINIÇÃO DAS VARIÁVEIS
$altura = 1.83;
$peso = 103.27;

// DEFINIÇÃO DO IMC
$imc = $peso/pow($altura, 2);

// CONDIÇÃO QUE IMPRIME A SITUAÇÃO DA PESSOA CONFORME O IMC
if ($imc < 40) {
	if ($imc < 30) {
		if ($imc < 25) {
			if ($imc < 20) {
				if ($imc < 16) {
					echo "IMC = ".$imc."<br>Situação: Subpeso severo.";
					exit;
				}
				echo "IMC = ".$imc."<br>Situação: Subpeso.";
				exit;
			}
			echo "IMC = ".$imc."<br>Situação: Normal.";
			exit;
		}
		echo "IMC = ".$imc."<br>Situação: Sobrepeso.";
		exit;
	}
	echo "IMC = ".$imc."<br>Situação: Obeso.";
}else{
	echo "IMC = ".$imc."<br>Situação: Obeso Mórbido.";
}
?>