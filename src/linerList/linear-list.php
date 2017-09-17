<?php

// 名簿リストを初期化
$list = [];

// 人を名簿に追加
$person = [
    "name" => "Nami",
    "age"  => 18,
];
array_push($list, $person);


// 人を名簿に追加
$person = [
    "name" => "Sanji",
    "age"  => 20,
];
array_push($list, $person);
// 人を名簿に追加
$person = [
    "name" => "Takeshi",
    "age"  => 23,
];
array_push($list, $person);

$r = rand(0, count($list) -1);
$p = $list[$r];
echo "name:" . $p["name"]. "\n";
echo "age:" . $p["age"]. "\n";

