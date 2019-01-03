PlanOS(プラナス)
===
## 概要
黄銅12星座をモチーフにしたフレームアームズ制作コンテスト企画「プラナスフィア」の公式サイト
[http://ws-factory.hoyo.asia/plana/]([http://ws-factory.hoyo.asia/plana/] "プラナスフィア")
## 詳細
黄銅12星座をモチーフに,コトブキヤ社から発売されているプラモデル「フレームアームズ」を組み替えて,自分だけのフレームアームズ
「俺ームアームズ」を作るコンテスト企画「プラナスフィア」の公式サイト兼作品投稿サイトです.
「プラナスフィア」のルール・参加メンバーの一覧・完成した作品の写真・設定を見ることができます.
Twitterのサービスとの連携で,事前のユーザー登録無しで作品の投稿ができます.

## 作成目的
- 正確な情報の伝達(ルールを聞き返す人の人数・頻度が多くなってきた)
- 「プラナスフィア」の情報集約（SNSでは時間がたつと、探すのが困難で発言の根拠にしずらい）

## 工夫点
- MVCパターンを模した構造のページ生成システムを構築し,ページ・ロジックを分離させて,可読性と変更による影響範囲を抑えました.
- スマートフォンでも見られるように、スマートフォン用にレイアウトを用意しました.
- Twitterとの連携で,作品投稿時の面倒なユーザー登録作業の手間を省きました.
- Ajaxで画面変移無しでストレスの少ない高速なページ読み込みを実現しました。

### 使用言語
### サーバーサイド
 - PHP 5.5.9

### データベース
 - My SQL 14.14

### クライアントサイド
- JavaScript (jQuery 2.1.1)
- CSS3

### 通信技術
- Ajax

### ディレクトリ構造
```
planasphere ルートディレクトリ　※_mobileとついてるファイルはスマートフォン用
│  .gitattributes
│  .gitignore
│  bootanim.js PlanaOS起動演出用Javascriptファイル
│  Chippai.php テンプレートエンジン
│  index.html PlanaOS起動演出用ページ
│  jquery.cookie.js
│  login.html ログイン時のメニューの中身
│  logout.html 非ログイン時のメニューの中身
│  main.php トップ画面ページ
│  mainpage.css
│  mainpage.js
│  mainpage_mobile.css
│  main_mobile.php
│  Readme.md
│  sample.css
│  shapingPrint.php デバッグ情報の整形プログラム
│  upload.php
│  userMenu.php　
│  
├─app 各種コンテンツ
│  │  index.php リクエストの振り分け
│  │  model.php データベースアクセスその他内部処理
│  │  view.php　テンプレートファイルからページ生成
│  │  
│  ├─hanger 投稿作品一覧と詳細ページ
│  │      FAlist.js
│  │      FAlistTemplete.css
│  │      FAlistTempletehtml.php　投稿作品一覧ページテンプレートファイル
│  │      slider.css
│  │      slider.js
│  │      slider.php　作品詳細ページテンプレートファイル
│  │      
│  ├─home トップページ
│  │      history.html
│  │      home.css
│  │      home.html
│  │      home.js
│  │      home_m.html
│  │      
│  ├─member 参加メンバー一覧ページ
│  │      GetTwitterIcon.php
│  │      list.js
│  │      listTemplete.css
│  │      listTempletehtml.php　参加メンバーの一覧ページテンプレートファイル
│  │      listTemplete_mobile.css
│  │      
│  ├─mypage 作品投稿ページ
│  │      edit.css
│  │      edit.js
│  │      edit.php　作品投稿ページ
│  │      mypage.css
│  │      mypage.js
│  │      mypageTemplate.php　作品投稿ページテンプレートファイル（外枠）
│  │      
│  └─reglations 制作時のルールのページ
│          reg.css
│          reg.html
│          regulations.php reg.htmlを読み込んで表示
│          
├─bg　背景画像のディレクトリ
│      bg.png
│      
├─datas　投稿作品データのディレクトリ
│  ├─NSG-P01α
│  │      description.html　作品の設定ページテンプレートファイル
│  │      IMGP0499.jpg
│  │      IMGP0500.jpg
│  │      IMGP0501.jpg
│  │(似たような構成が続くため、省略しました)      
│          
├─img　アイコン画像のディレクトリ
│      abount.png
│      aquariusa.png
│      Ariesa.png
│      arrow-L.png
│      arrow-R.png
│      arrow.png
│      (以下略)
│      
└─login TwitterにOAuthでログインするためのページ
    │  anim.js
    │  callback.php　Twitterから帰ってくるページ
    │  callbackTemplete.css
    │  index.php　ユーザー登録処理・ページ生成
    │  login.php　Twitterへログイン準備ページ
    │  logout.php　ログアウト処理ページ
    │  setting.php　OAuth設定ファイル
    │  welcome.php ログイン演出ページテンプレートファイル
    │  
    └─twitteroauth TwitterにOAuthにログインするためのライブラリのディレクトリ
        │  .gitignore
        │  .travis.yml
        │  autoload.php
        │  composer.json
        │  LICENSE.md
        │  phpmd.xml
        │  phpunit.xml
        │  README.md
        │  
        └─src
            │  cacert.pem
            │  Config.php
            │  Consumer.php
            │  HmacSha1.php
            │  Request.php
            │  Response.php
            │  SignatureMethod.php
            │  Token.php
            │  TwitterOAuth.php
            │  TwitterOAuthException.php
            │  Util.php
            │  
            └─Util
                    JsonDecoder.php
```
