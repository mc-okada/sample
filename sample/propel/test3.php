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

// create a new Category
$cat = new Category();
$cat->setName('Movie');
$cat->save();
// create a new Article
$art = new Article();
$art->setTitle('Avatar Makes Best Opening Weekend in the History');
$art->setCategory($cat);
$art->setBody('With $232.2 million worldwide total, Avatar had one of the best-opening weekends in the history of cinema.');
$art->save();
// create a new Video
$vid = new Video();
$vid->setTitle('Avatar Trailer');
$vid->setCategory($cat);
$vid->setResourceLink('http://www.avatarmovie.com/index.html');
$vid->save();

$articles = ArticleQuery::create()
  ->filterByCategoryName('Movie')
  ->find();
foreach ($articles as $article) {
    echo $article->getTitle(). "(". $article->getBody(). ")\n";
}
