"<?php

// Operadores Lógicos

echo "<pre>";
// Os dois
var_dump(true and true);
var_dump(true and false);
var_dump(true && true);
var_dump(true && false);
echo "<hr>";
// Um ou o outro
var_dump(true or true);
var_dump(true or false);
var_dump(true || true);
var_dump(true || false);
var_dump(false || false);
echo "<hr>";
// ou um, ou o outro
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);
echo "<hr>";
// Negativa
var_dump(!false);
var_dump(!true);
echo "<hr>";





?>"