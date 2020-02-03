<?php
// TESTES DE FRASES PARA SEREM CONVERTIDAS
//$frase = "mandic cloud solutions";
//$frase = "abcde123";
//$frase = "M#andic %%C#lo[}uád 123!SolutiÂonsÇç;:@#";
//$frase = "Thiago Alberto";
//$frase = "abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz";
$frase = "mandic";

// FORMATA AS LETRAS DA FRASE PARA MINUSCULO E REMOVE TUDO O QUE NÃO FOR LETRA OU ESPAÇO
$fraseFormatada = strtolower(preg_replace("/[^a-zA-Z_\s]/i", "", $frase));
// TAMANHO DA FRASE FORMATADA
$fraseFormatadaTamanho = strlen($fraseFormatada);
// SAIDA ESPERADA
$cima = $meio = $baixo = "";

// PERCORRE A FRASE FORMATADA CONSTRUINDO A FRASE NOVA
for ($i=0; $i < $fraseFormatadaTamanho; $i++) {
	converte($fraseFormatada[$i], $cima, $meio, $baixo);
}

// MOSTRA A SAÍDA PARA O USUÁRIO
echo $cima."<br>".$meio."<br>".$baixo;

// FUNÇÃO QUE CONVERTE LETRA DA FRASE ARTE ASCII
function converte($letra, $cima, $meio, $baixo){
	switch ($letra) {
		case 'a':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp&nbsp/&nbsp\&nbsp&nbsp";
			$GLOBALS['baixo'] .= "/~~\&nbsp";
			break;
		case 'b':
			$GLOBALS['cima'] .= "&nbsp__&nbsp&nbsp";
			$GLOBALS['meio'] .= "|__)&nbsp";
			$GLOBALS['baixo'] .= "|__)&nbsp";
			break;
		case 'c':
			$GLOBALS['cima'] .= "&nbsp __&nbsp&nbsp";
			$GLOBALS['meio'] .= "/&nbsp&nbsp&nbsp&nbsp&nbsp`&nbsp";
			$GLOBALS['baixo'] .= "\__,&nbsp&nbsp";
			break;
		case 'd':
			$GLOBALS['cima'] .= "&nbsp&nbsp__&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp\&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|__&nbsp/&nbsp&nbsp";
			break;
		case 'e':
			$GLOBALS['cima'] .= "&nbsp___&nbsp";
			$GLOBALS['meio'] .= "|__&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|___&nbsp";
			break;
		case 'f':
			$GLOBALS['cima'] .= "&nbsp___&nbsp";
			$GLOBALS['meio'] .= "|__&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			break;
		case 'g':
			$GLOBALS['cima'] .= "&nbsp&nbsp__&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "/&nbsp&nbsp&nbsp_`&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "\ __>&nbsp&nbsp";
			break;
		case 'h':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|__|&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp&nbsp&nbsp|&nbsp";
			break;
		case 'i':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp|&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp|&nbsp&nbsp&nbsp";
			break;
		case 'j':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp";
			$GLOBALS['baixo'] .= "\__/&nbsp&nbsp&nbsp";
			break;
		case 'k':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|__/&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp&nbsp&nbsp\&nbsp&nbsp";
			break;
		case 'l':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|___&nbsp&nbsp";
			break;
		case 'm':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp|&nbsp\/&nbsp|&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp|&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp";
			break;
		case 'n':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|&nbsp\&nbsp&nbsp|&nbsp&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp\&nbsp|&nbsp&nbsp";
			break;
		case 'o':
			$GLOBALS['cima'] .= "&nbsp&nbsp__&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "/&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\&nbsp&nbsp";
			$GLOBALS['baixo'] .= "\&nbsp__&nbsp/&nbsp&nbsp";
			break;
		case 'p':
			$GLOBALS['cima'] .= "&nbsp__&nbsp&nbsp";
			$GLOBALS['meio'] .= "|__)&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			break;
		case 'q':
			$GLOBALS['cima'] .= "&nbsp&nbsp__&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "/&nbsp&nbsp&nbsp&nbsp&nbsp\&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "\&nbsp__X&nbsp&nbsp";
			break;
		case 'r':
			$GLOBALS['cima'] .= "&nbsp__&nbsp&nbsp";
			$GLOBALS['meio'] .= "|__)&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp&nbsp&nbsp&nbsp\&nbsp";
			break;
		case 's':
			$GLOBALS['cima'] .= "&nbsp&nbsp__&nbsp&nbsp";
			$GLOBALS['meio'] .= "/__`&nbsp";
			$GLOBALS['baixo'] .= ".__/&nbsp";
			break;
		case 't':
			$GLOBALS['cima'] .= "___&nbsp";
			$GLOBALS['meio'] .= "&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp";
			break;
		case 'u':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp";
			$GLOBALS['baixo'] .= "\__/&nbsp&nbsp&nbsp";
			break;
		case 'v':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "\&nbsp&nbsp&nbsp/&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp\/&nbsp&nbsp&nbsp&nbsp";
			break;
		case 'w':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "|&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp";
			$GLOBALS['baixo'] .= "|&nbsp/\&nbsp|&nbsp";
			break;
		case 'x':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "\_/&nbsp&nbsp";
			$GLOBALS['baixo'] .= "/&nbsp&nbsp\&nbsp&nbsp";
			break;
		case 'y':
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "\&nbsp&nbsp/&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp";
			break;
		case 'z':
			$GLOBALS['cima'] .= "__&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp&nbsp/&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "/_&nbsp&nbsp&nbsp";
			break;
		default:
			$GLOBALS['cima'] .= "&nbsp&nbsp&nbsp";
			$GLOBALS['meio'] .= "&nbsp&nbsp&nbsp";
			$GLOBALS['baixo'] .= "&nbsp&nbsp&nbsp";
	}
}
?>