<?php

echo "<pre>";

$boolean = true;
$int = 10;
$float = 22.3;
$string = "4Linux";
$array = ['a',1,1.1];
$null = null;

var_dump($boolean);
var_dump($int);
var_dump($float);
var_dump($string);
var_dump($array);
var_dump($null);

echo "<hr>";

// Type Casting

$var = 10;

$cast = (boolean)$var;
var_dump($cast);
$cast = (int)$var;
var_dump($cast);
$cast = (float)$var;
var_dump($cast);
$cast = (string) $var;
var_dump($cast);
$cast = (array) $var;
var_dump($cast);
$cast = (object) $var;
var_dump($cast);

echo "<hr>";

// Type Juggling

$var = "0";
var_dump($var);

$var += 2;
var_dump($var);

$var = $var + 1.3;
var_dump($var);

$var = 5 + "10 carros";
var_dump($var);

$var = "10 carros" + "10 carros";
var_dump($var);

echo "<hr>";

// Constantes

const PROD = "true";
echo PROD;

?>