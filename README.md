# baserCMS用テーマ「ratio_3_2」

「ratio3_2」は、個人事業主・小規模店舗向けに、不要な機能を取り払い、必要な機能の自由度を強化したテーマです。  
コンテンツ作成・更新の、負荷軽減を考慮しています。

## 対応バージョン

baserCMS 3.0.7以降

バージョン3.0.9以降で、ロリポップなどの一部サーバーでは下記の不具合が生じます。詳しくはリンク先を参照ください。

- [baserCMSバージョン 3.0.9にしたら、固定ページの保存ができなくなりました。｜フォーラム｜baserCMSユーザーズ](http://forum.basercms.net/modules/newbb/viewtopic.php?viewmode=thread&topic_id=2041&forum=5)
- [baserCMSバージョン 3.0.9＋ロリポップで、固定ページを保存すると403エラーになる｜フォーラム｜baserCMSユーザーズ](http://forum.basercms.net/modules/newbb/viewtopic.php?topic_id=2046&forum=8)

## デモサイト

[http://ratio32-baser.cms-skill.net/](http://ratio32-baser.cms-skill.net/)

## 利用方法

管理画面の「テーマ管理」でこのテーマを適用後、必ず「初期データ読込」を実行してください。

### 初期データについて

このテーマは、テーマの特徴・カスタマイズ解説などが書かれた「default」データと、ページやナビゲーションが空となっている「blank」データがあります。

バージョン3.0.9で、「blank」データを読み込めない不具合が発生しています。「blank」データを読み込む方法は下記リンク先を参照ください。

[baserCMSバージョン3.0.9で、複数の初期データがあると「default」しか読み込めない｜フォーラム｜baserCMSユーザーズ](http://forum.basercms.net/modules/newbb/viewtopic.php?viewmode=flat&topic_id=2053&forum=8)

### マニュアル

このテーマは、「default」データ内の解説を複製した、PDF版のマニュアルを同梱しています。  
詳しい導入手順、カスタマイズについては、テーマ内の「ratio_3_2_manual_(日付).pdf」を参照ください。

## 各ファイルの説明

- /Blog/ --- ブログのテンプレート
- /Config/ --- 初期データ等
- /Contents/ --- サイト内検索のテンプレート
- /css/ --- スタイルシート
- /Elements/ --- 各テンプレートより呼び出される部品となるテンプレート
- /Emails/ --- メールのテンプレート
- /Erros/ --- Not Found 等エラー用のテンプレート
- /Feed/ --- フィード読込のテンプレート
- /files/ --- ブログ記事のアイキャッチ画像
- /fonts/ --- テーマ内のアイコン等に使用しているフォントファイル
- /Helper/ --- テーマ内で利用する表示用関数
- /img/ --- 画像ファイル
- /js/ --- Javascriptファイル
- /Layouts/ --- 大枠となるテンプレート
- /Mail/ --- メールフォームのテンプレート
- /Pages/ --- 固定ページのテンプレート
- /LICENCE.txt --- ライセンス
- /README.txt --- テーマの利用方法
- /VERSION.txt --- テーマのバージョン
- /screenshot.png --- テーマのスクリーンショット
- /ratio_3_2_manual_YYYYmmdd.pdf --- テーマの導入マニュアル

## フレームワークについて

このテーマは、世界標準のWeb制作フレームワーク「bootstrap」のバージョン3をベースとしています。

スライドショー・タブなど、テーマにはないパーツを追加したい場合は、公式サイトのドキュメントを参照ください。

[bootstrap公式サイト](http://getbootstrap.com/)

## スマートフォン対応について

このテーマでは、レスポンシブウェブデザインを採用しています。アクセスした端末の画面幅に応じて、自動的にレイアウトを変更します。

モバイル用のテンプレートは利用していないため、管理画面の 「システム設定 > サイト基本設定」にある、「モバイル」「スマートフォンの項目の「対応する」のチェックボックスを、オフにしてご利用ください。

## 開発者の方へ

GitHub内で、Sass、gulpfile.jsを含む完全なリポジトリを公開しています。本格的なカスタマイズはこちらをご利用ください。

https://github.com/webbingstudio/baser_theme_ratio_3_2

