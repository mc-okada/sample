<?php
/**
  * Using Inherited Objects
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
BookPeer::doDeleteAll();

$book = new Book();
$book->setTitle('War And Peace');
$book->save();
$essay = new Essay();
$essay->setTitle('On the Duty of Civil Disobedience');
$essay->save();
$comic = new Comic();
$comic->setTitle('Little Nemo In Slumberland');
$comic->save();

$comic = ComicQuery::create()
  ->findOne();
echo get_class($comic) . ': ' . $comic->getTitle() . "\n";
