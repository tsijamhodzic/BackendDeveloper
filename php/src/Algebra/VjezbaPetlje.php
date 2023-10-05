<?php

$a = 15;
$b = 10;
$c = 5;

if ($b > $a && $b < $c || $b < $a && $b > $c){
    echo "b je između a i c";
} else {
    echo "b nije između a i c";
}