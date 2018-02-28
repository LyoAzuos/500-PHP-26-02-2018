<?php

echo "<pre>";
$a = "1,2,3"; // Desta forma  com aspas duplas existe o comando lógico.
echo  "Testando $a";
echo "<hr>";
echo 'Testando $a'; // Com aspas simples não existe comando apenas texto.
echo "<hr>";
echo 'Testando ' . $a.' !';
echo "<hr>";
$carro = "Gol";
$meuCarro = "Meu carro é um:";
echo "$meuCarro " . "$carro";

?>