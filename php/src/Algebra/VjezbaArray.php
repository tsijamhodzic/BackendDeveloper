<?php

$primeNumbers = [1,2,3,4,5];

if (isset($primeNumbers[2])){
    echo $primeNumbers[2];
} else {
    echo "Treći element u nizu ne postoji";
}

echo "<br><br>";

$primeNumbers[] = 6;

echo count($primeNumbers);

echo "<br><br>";

var_dump($primeNumbers);

echo "<br><br>";

arsort($primeNumbers);

echo implode(', ' , $primeNumbers);