<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$age = 0;
$age = $age + 75;
$age = $age - 25;
$age = $age * 25;
$age = $age / 25;

if($age > 0 && $age < 5){
    echo "below average";
}
if($age > 5 && $age < 50){
    echo "average";
}
if($age > 50){
    echo "above average";
}

