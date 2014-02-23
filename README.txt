* このプロジェクトの使い方
- apacheのdocument_rootに一式をダウンロードするなりcloneするなりする
- documentroot/sample/ の配下に、cache/twigディレクトリを作る（ここにTwigのコンパイル済みテンプレートが配置される）
- documentroot/sample/twig/test.php にアクセスするとsample/sample/twig/templates/test.htmlを処理した結果が表示されるはず

- composer.phar
http://getcomposer.org/
PHPのライブラリインストーラー。ついでに依存関係も解消してくれるらしい

composer自体のインストールは
curl -sS https://getcomposer.org/installer | php
curlが入っていなかったら上のURLからダウンロードしてきてね

使い方は、composer.jsonでインストールしたいライブラリを記述して
php composer.phar install

- silex.phar
Symfonyの作者の人が作ったマイクロフレームワーク
詳しくはこっち
http://silex-users-jp.phper.jp/

ですって

ついでに依存関係も解消してくれるらしい。。

ライブラリを記述してみます。

-- readme end --
