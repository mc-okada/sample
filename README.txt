ここに何か具体的なwebappを作ってみるよ！

- composer.phar
http://getcomposer.org/
PHPのライブラリインストーラー。ついでに依存関係も解消してくれるらしい

composer自体のインストールは
curl -sS https://getcomposer.org/installer | php
curlが入っていなかったら上のURLからダウンロードしてきてね

使い方は、composer.jsonでインストールしたいライブラリを記述して
php composer.phar install

