<?php

$cijelibroj = 5;

$realnibroj = 3.5;

$text = 'Hello World!';

$logic = true;

$niz = ['niz'];

echo "$cijelibroj<br>";
echo "$realnibroj<br>";
echo "$text<br>";
var_dump($cijelibroj);
echo "<br><br>";
var_dump($realnibroj);
echo "<br><br>";
var_dump($text);
echo "<br><br>";
var_dump($niz);
echo "<br><br>";
var_dump($logic);
echo "<br><br>";

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