<?php
// DEFINE VARIÁVEIS
$mandic = "www.mandic.com.br";
$google = "www.google.com";
$interromper = false;
$porta = 80;
$timeout = 5;
// NUMERO E STRING DO ERRO DE CONEXÃO
$conectado = $errno = $errstr = "";

do {
	$conectado = fsockopen($mandic, $porta, $errno, $errstr, $timeout);
	// CONDIÇÃO QUE VERIFICA CONEXÃO COM A INTERNET
	if (!$conectado) {
		// CASO NÃO CONECTADO, É FEITA UMA NOVA CHAMADA PARA UM DOMINIO DIFERENTE
		$conectado = fsockopen($google, $porta, $errno, $errstr, $timeout);
	}
} while ($conectado);

// MOSTRA PARA O USUARIO O ERRO
echo "Você não está conectado na internet.<br>$errstr ($errno)<br><br>";

// É FEITA UMA NOVA CHAMADA PARA PEGAR UM POSSÍVEL NOVO ERRO DE CONEXÃO
$conectado = fsockopen($mandic, $porta, $errno, $errstr, $timeout);

// MOSTRA PARA O USUARIO O ERRO
echo "Você não está conectado na internet.<br>$errstr ($errno)<br>";
?>