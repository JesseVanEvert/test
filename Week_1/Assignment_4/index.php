<?php

$money = 0.0;
settype($money, "Double");

for ($year = 0; $year <= 20; $year++) {
    $money += 7.5;
    $money *= 1.02;
    echo $money;
    echo "</br>";
}