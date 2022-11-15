<?php

$money = 0.0;
settype($money, "Double");

$year = 0;
while($year <= 20){
    $money += 7.5;
    $money *= 1.02;
    echo $money;
    echo "</br>";
    $year++;
}