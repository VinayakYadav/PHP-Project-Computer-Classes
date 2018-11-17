<?php

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
//echo "<pre>";
$ra = randomGen(1,20,20);
//print_r($ra); 

?>