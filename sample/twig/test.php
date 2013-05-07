<?php
header('Content-type: text/html; charset=utf-8');

$base_dir	= realpath(__DIR__. '/../..');
// composerを使った場合のライブラリのロード方法
require $base_dir. '/vendor/autoload.php';
// cacheディレクトリ - 空ディレクトリはレポジトリに入れられないので、自分で作ること
$cache_dir	= realpath($base_dir. '/cache/twig');
// templateディレクトリ
$templates_dir	= realpath(__DIR__. '/templates');

// http://twig.sensiolabs.org/doc/intro.html
// のサンプル。
// ここらへん書いてある箇所は
// http://twig.sensiolabs.org/doc/api.html
$str_loader	= new Twig_Loader_String();
$str_twig	= new Twig_Environment($str_loader);
echo	$str_twig->render('Hello {{name}}!', array('name' => 'Fabien'));

$file_loader	= new Twig_Loader_Filesystem($templates_dir);
$file_twig		= new Twig_Environment($file_loader, array(
	'debug'		=> true,
	'cache'		=> $cache_dir,
	)
);

// templateで使う変数の設定
$foo1		= new stdClass();
$foo1->bar	= 'Yes!';
$foo1->{'data-foo'} = 'data-foo1 value';

$foo2		= array(
	'bar'	=> 'No!',
	'data-foo'	=> 'data-foo2 value',
	);

$vars	= array(
	'name'	=> 'Fabien',
	'foo1'	=> $foo1,
	'foo2'	=> $foo2,
	);

echo	$file_twig->render('test.html', $vars);
