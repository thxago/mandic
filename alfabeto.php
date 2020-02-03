<?php
// TESTES DE FRASES PARA SEREM CONVERTIDAS
//$frase = "mandic cloud solutions";
//$frase = "abcde123";
$frase = "M#andic %%C#lo[}uád 123!SolutiÂonsÇç;:@#";

// FORMATA AS LETRAS DA FRASE PARA MINUSCULO E REMOVE TUDO O QUE NÃO FOR LETRA OU ESPAÇO
$fraseFormatada = strtolower(preg_replace("/[^a-zA-Z_\s]/i", "", $frase));
// TAMANHO DA FRASE FORMATADA
$fraseFormatadaTamanho = strlen($fraseFormatada);
// NOVA FRASE: SAIDA ESPERADA
$fraseNova = "";

// PERCORRE A FRASE FORMATADA CONSTRUINDO A FRASE NOVA
for ($i=0; $i < $fraseFormatadaTamanho; $i++) {
	$fraseNova .= converte($fraseFormatada[$i]);
}

// MOSTRA A SAÍDA PARA O USUÁRIO
echo "Frase: ".$frase."<br>Frase Nova: ".$fraseNova;

// FUNÇÃO QUE CONVERTE LETRA PELO MÚLTIPLO DE TRÊS
function converte($letra){
	switch ($letra) {
		case 'c':
			return 3;
		case 'f':
			return 6;
		case 'i':
			return 9;
		case 'l':
			return 12;
		case 'o':
			return 15;
		case 'r':
			return 18;
		case 'u':
			return 21;
		case 'x':
			return 24;
		default:
			return $letra;
	}
}
?>