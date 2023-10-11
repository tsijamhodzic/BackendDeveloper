<?php

function helloWorld(): string
{
    return "Hello World!";
}

$text = helloWorld();

echo $text;

echo "<br><br>";

function getFullName(string $name, string $surname): string
{
    $fullName = "$name " . " $surname";
    return strtoupper($fullName);
}

echo $solution = getFullName("Tin", "Sijamhodžić");

echo "<br><br>";

function randomNumberGenerator($number)
{
    static $result = 2;
    $result = $number + $result;
    echo $result . "<br>";
}

$func = 'randomNumberGenerator';

$func(rand(1, 10));
$func(rand(1, 10));
$func(rand(1, 10));
$func(rand(1, 10));
$func(rand(1, 10));