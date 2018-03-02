<?php
// Array $pessoa -> Nome, Idade, Email
// Exibir na tela o conteudo de cada informação seguindo o exemplo: Meu nome é:
//																	Tenho $x anos;
//																	Meu email é;



echo "<pre>";

$pessoa = ['Fulano', '20', 'fulano@de.tal'];

print_r($pessoa);

echo '<hr>';

$pessoas =[

	'nome' => 'Fulano',
 	'idade' => '20',
	 'email' => 'fulano@de.tal'

];

print_r($pessoas);
echo"<hr>";

echo "Meu Nome é: " . ($pessoas['nome']);
echo "<br>";
echo "Tenho " .($pessoas['idade']) . " anos";
echo "<br>";
echo "Meu email é: " . ($pessoas['email']);

echo "<br>";
echo "<br>";
echo "<hr>";

//Array pessoas onde teremos 3 pessoas.
//cada pessoa possui Nome, Idade e Email.
//Exibir na tela o conteúdo de cada informação seguindo o exemplo: 
//			Meu nome é:
//			Tenho $x anos;
//			Meu email é;

$pessoaa = [
	[
		'nome' => 'Fulano',
		'idade' => '20',
		'email' => 'fulano@de.tal'

	],
	[

		'nome' => 'Beltrano',
		'idade' => '22',
		'email' => 'beltrano@de.tal'

	],
	[

		'nome' => 'Cicrano',
		'idade' => '21',
		'email' => 'cicrano@de.tal'
	]
];

print_r($pessoaa);

echo "<hr>";

foreach ($pessoaa as $pessoa) {

	echo "Meu Nome é: " . ($pessoa["nome"]);
	echo "<br>";
	echo "Tenho " .($pessoa['idade']) . " anos";
	echo "<br>";
	echo "Meu email é: " . ($pessoa['email']);
};
	





?>