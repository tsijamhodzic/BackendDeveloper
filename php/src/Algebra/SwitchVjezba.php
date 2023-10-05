<?php

$today = date ('l');

switch ($today) {
    case "Monday":
        echo "Danas je ponedjeljak";
        break;
    case "Tuesday":
        echo "Danas je utorak";
        break;
    case "Wednesday":
        echo "Danas je srijeda";
        break;
    case "Thursday":
        echo "Danas je četvrtak";
        break;
    case "Friday":
        echo "Danas je petak";
        break;
    case "Saturday":
        echo "Danas je subota";
        break;
    case "Sunday":
        echo "Danas je nedjelja";
        break;
    default:
        echo null;
}
