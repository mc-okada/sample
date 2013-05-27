元ネタ
http://propelorm.org/documentation/09-inheritance.html

動作させるには
 $ ./propel-gen 
  - build以下のファイルをgenerate
 $ mysql -u root bookstore < build/sql/schema.sql
  - bookstoreデータベース内のテーブルを作る
 $ php test.php
  - test.phpを実行してみる
