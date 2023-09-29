<?php

$cijelibroj = 5;

$realnibroj = 3.5;

$text = 'Hello World!';

$logic = true;

echo "$cijelibroj<br>";
echo "$realnibroj<br>";
echo "$text<br>";
var_dump($logic);

define ("KONSTANTA", "Ovo je konstanta!");

echo "<br><br>";

echo KONSTANTA;

echo "<br><br>";


echo pi();

$a = 5;
$b = $a;
$a = 6;
echo "<br><br>";

echo "$a<br>$b";
echo "<br><br>";

$a = 5;
$b = &$a;
$a = 6;

echo "$a<br>$b";