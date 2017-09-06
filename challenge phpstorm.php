<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$moyenne = array_sum($students)/count($students);

foreach ($students as $key => $value){
    echo $key . ": " .$value ."<br>";
    echo "<br>";
}


echo "Age moyen des étudiants est de " .$moyenne. "ans.";