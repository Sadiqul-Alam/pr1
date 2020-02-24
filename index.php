<?php

$pkg = [
    [
        'Lotion' => 300,
        'Facewash' => 150,
        'Soap' => 50,
    ], [
        'Cream' => 100,
        'Paste' => 100,
        'Powder' => 50,
    ], [
        'Brush' => 30,
        'Comb' => 20,
        'Oil' => 70,
    ],
];

foreach ($pkg as $key => $value){
foreach ($value as $product => $price){
    echo "$product = $price<br>";
};
};
