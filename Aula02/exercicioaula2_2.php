<?php
//Nota 
//Frequencia
//Se aprovado - Nota >= 7 e Frequencia >=8
//Recuperação - Nota >= 5 ou < 7 e Frequencia >=8
//Se reprovado - Nota < 5 ou Frequencia < 8

echo "<pre>";

$nota = 5;
$frequencia = 7;

if ($nota >= 7 && $frequencia >= 8) {
	echo "Aprovado";
}else if ($nota >= 5 && $frequencia >= 8) {
	echo "Recuperação";
}else {
	echo "Reprovado";
}

/*========== USANDO SWITCH ========*/

switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		echo "Aprovado";
		break;
	case ($nota >= 5 && $frequencia >= 8):
		echo "Recuperação";
		break;
	case ($nota < 5 && $frequencia > 8):
		echo "Reprovado";
		break;
	
}


?>