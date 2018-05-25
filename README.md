# 初期テーブル構築
=> sql 配下に *.sql ファイルを置けば、DB（mysql）コンテナ構築時にファイルを実行

# 起動（nginx, php, mysql）
$ docker-compose up -d nginx mysql workspace

# DB諸設定（laradockとlaravelの両方の設定が必要）
- laradock配下.envの以下を編集
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
MYSQL_VERSION=5.7
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- laravel配下.envの以下を編集
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# DBアクセス例
- DBコンテナに入って以下を実行  
$ mysql -udefault -psecret

# アクセス例
http://localhost # routes/web.php で直接 view をレンダリング  
http://localhost/user # userコントローラー

# テスト実行例（CUI）
- workspaceコンテナに入って以下を実行  
$ cd /var/www  
$ phpunit tests/Http

※以下参考までに
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
## tests配下全部実行(設定ファイルはphpunit.xml)
$ phpunit
## 指定ディレクトリ配下全部実行
$ phpunit tests/Http
## クラス名で絞り込んで実行
$ phpunit --filter=SampleTest
## メソッド名で絞り込んで実行
$ phpunit --filter=visit_top_page
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
