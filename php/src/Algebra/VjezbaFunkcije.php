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