<?php
/**
  * Class Table Inheritance
  */
/*
使い方
./propel-gen
 - これで、build/以下のファイルが出来る
 */

// composerのautoloaderの読み込み
require '../../vendor/autoload.php';

// Propelのautoloaderが絶対パスでは無いのでinclude_pathを追加する
set_include_path(__DIR__. '/build/orm'. PATH_SEPARATOR. get_include_path());
// 接続その他の設定読み込み
Propel::init(__DIR__. '/build/config/bookstore-conf.php');

// 実行する度に増えていくから最初に消しておく
BasketballerPeer::doDeleteAll();

$basketballer = new Basketballer();
$basketballer->setPoints(101);
$basketballer->setFieldGoals(47);
$basketballer->setThreePointsFieldGoals(7);
// set player identity via delegation
$basketballer->setFirstName('Michael');
$basketballer->setLastName('Giordano');
// same as
$player = new Player();
$player->setFirstName('Michael');
$player->setLastName('Giordano');
$basketballer->setPlayer($player);

// save basketballer and player
$basketballer->save();

// retrieve delegated data directly from the main object
echo $basketballer->getFirstName(). "\n"; // Michael
