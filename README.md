# DMND
### API仕様書
https://app.swaggerhub.com/apis-docs/tooooofu24/DMND/1.0.0

## 説明
モバイルアプリ用のAPIです。  メルカリの逆版みたいなイメージです（ジモティの商品版）。  
来月からまた開発を再開する予定です。

## 引き継ぎ用コメント
- Larvel8.x, php7.3?, ローカルはMAMP
- 今は千葉のVPSでWEBサーバとDBサーバ一緒にして動かしてます。
- [この記事](https://zenn.dev/mpyw/articles/ce7d09eb6d8117)のなんちゃってクリーンアーキテクチャを参考にして作っています。
- Auth周りはLaravelの[sunctum](https://readouble.com/laravel/8.x/ja/sanctum.html)を使っています。
- 画像のアップロードの機構については未定。未実装なのでそのあたりもお任せします。
- Docker使ってないので使った方いいなと思ったり、、

## 使い方

```bash
cp .env.sample .env
# 初回はsailを含めた依存関係をインストールするために以下を実行
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
./vendor/bin/sail up
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --force
```
