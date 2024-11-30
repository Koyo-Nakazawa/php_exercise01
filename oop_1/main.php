<?php

// 以下を実行した時にエラーがでないようにして下さい。

require_once __DIR__ . '/Car.php';

// Carクラスのインスタンスを生成
// 引数 : 車名(車種)、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo PHP_EOL;

// 車体番号を取得
echo $car1->getNumber();
echo PHP_EOL;

// カラーを取得
echo $car1->getColor();
echo PHP_EOL;

// 車の情報を表示
echo $car1->information();
echo PHP_EOL;

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo PHP_EOL;

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo PHP_EOL;

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo PHP_EOL;

// 車の情報を表示
echo $car1->information();
