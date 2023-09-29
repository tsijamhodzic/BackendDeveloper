<?php

$listOfIntegers = [2, 10, 17, 98, 324, 1, 19];

foreach ($listOfIntegers as $key => $value) {
    echo "$key => $value<br>";
}

$humans = [
    0 => [
        'name' => 'marko',
        'surname' => 'markic',
        'age' => 28,
    ],
    1 => [
        'name' => 'slavko',
        'surname' => 'slavkic',
        'age' => 32,
    ],
];

foreach ($humans as $index => $human) {
    echo "$index human<br>";
    echo "-------------------<br>";
    foreach ($human as $key => $attribute) {
        echo "$key : $attribute<br>";
    }
}

$multiListOfIntegers = [
    [1, 2, 3, 4, 5, 6],
    ['name1'=>'marko', 'name2'=>'jura', 'name3'=>'stanko', 'name4'=>'kremenko']
];

foreach ($multiListOfIntegers as $value) {
    foreach ($value as $key => $broj){
        echo "$key - $broj<br>";
    }
}

$cars = [
    [
        'brand'=> 'skoda',
        'model'=>'octavia',
        'year'=>'2018',
    ],
    [
        'brand'=>'toyota',
        'model'=>'corolla',
        'year'=>'2017',
        ]
];

foreach ($cars as $index => $autokuca) {
    echo "$index autokuca<br>";
    echo "-------------------<br>";
    foreach ($autokuca as $key => $auti){
        echo "$key - $auti<br>";
    }
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];


foreach ($array1 as $i => $value){
    $sum = $value + $array2[$i];
    echo "$value + $array2[$i] = $sum <br>--------------<br>";
}

foreach ($array1 as $i => $value) {
    foreach ($array2 as $attribute) {
        $sum = $value + $attribute;
        echo "$value + $attribute = $sum <br>--------------<br>";
    }
}
