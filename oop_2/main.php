<?php

// ここに処理を1行追記
require_once __DIR__ . "/Taxi.php";
// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 2人乗車
echo $taxi1->pickUp(2);
echo $taxi1->information();
echo PHP_EOL;

// 1人乗車
echo $taxi1->pickUp(1);
echo $taxi1->information();
echo PHP_EOL;

// 2人降車
echo $taxi1->lower(2);
echo $taxi1->information();
echo PHP_EOL;

// 2人降車
// 1人しか乗っていないので降車できない
echo $taxi1->lower(2);
