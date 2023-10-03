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

echo "<br><br>";

$users = [
    0 => [
        'ime' => 'Marko',
        'prezime' => 'Markić',
        'godine' => 28,
        'spol' => 'Muško'
    ],
    1 => [
        'ime' => 'Marija',
        'prezime' => 'Marić',
        'godine' => 32,
        'spol' => 'Žensko'
    ],
];

var_dump($users);

echo "<br><br>";

unset($users[0]['spol'] , $users[1]['spol']);

var_dump($users);

echo "<br><br>";

$users[2] = [
    'ime' => 'Marko',
    'prezime' => 'Markić',
    'godine' => 28,
    ];

//var_dump($users);

foreach ($users as $index => $user) {
    echo "$index user<br>";
    echo "-------------------<br><br>";
    foreach ($user as $key => $attribute) {
        echo "$key : $attribute<br>";
    }
}