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
    return $fullName;
}

echo getFullName("Tin", "Sijamhodžić");