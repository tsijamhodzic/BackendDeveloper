<?php

$a = 3;
$b = 5;
$c = 'Hello';
$d = 'World!';

echo "Zbrajanje = ", $a + $b;
echo "<br><br>";

echo "Oduzimanje = ", $a - $b;
echo "<br><br>";

echo "Množenje = ", $a * $b;
echo "<br><br>";

echo "Dijeljenje = ", $a / $b;
echo "<br><br>";

$f = "$c "." $d";

echo $f;

$a += 4;
$b -= 2;
echo "<br><br>";

echo $a, "<br>", $b;
echo "<br><br>";

var_dump(
$a >= $b
);
echo "<br><br>";

echo ++$a;
echo "<br><br>";
echo --$b;