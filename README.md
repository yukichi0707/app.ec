
### ローカル環境
###### docker構成
- nginx
- php
- mysql
- node

## 環境構築手順

1. ./直下の.env.exampleから.envをコピーして作成

1. ./backend/直下の.env.exampleから.envをコピーして作成

1. ./nuxt/直下の.env.exampleから.envをコピーして作成

1. ./でmake upを叩く

1. ./でmake sh-phpを叩き、composer install

1. ./でmake sh-nodeを叩き、yurn installのあとに、yarn dev run （以降このウィンドウは閉じない運用）



## 参考

環境構築参考
https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

フロント追加　参考
https://qiita.com/tpywao/items/bd119f0075e40d47c88b
