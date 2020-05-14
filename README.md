# matsuri-plus

プロジェクト名：matsuri-plus

&nbsp;

製作者：kim-tairyu

&nbsp;

開発環境：PHP7

&nbsp;

動作環境：Windows、Macなど

&nbsp;

バージョン：1.0

&nbsp;

最終更新日：2018/07/18

&nbsp;

## 概要
	
外国人に日本の伝統的なお祭りの情報を提供するサービス

## 動作条件
	
・init.php

&nbsp;

・matsuri.sql

&nbsp;

・src/*

&nbsp;

・htdocs/*

&nbsp;

# 仕組み

・htdocs/はWEBに公開するファイルディレクトリ

&nbsp;

・src/は開発リソース、中身のControllerは機能実装処理、ModelはDB操作、Viewは表示処理

&nbsp;

・init.phpは環境変数、DB、クラスディレクトリなどを設定する初期化ファイル
  
&nbsp;

# 設計の流れ

・htdocs/index.phpからスタートし、init.php（初期化ファイル）を読み込み各種の初期化設定をする

&nbsp;

・UserControllerクラスをインスタンスし、画面遷移処理を行う

&nbsp;

・UserControllerはゲストユーザか会員かを判定し、各種処理を行い画面遷移を行うクラス

&nbsp;

・DB操作は、ModelディレクトリのBaseModelでDB接続をし、各種ModelでDB操作を行う

&nbsp;

・表示処理はSmartyというPHPのテンプレートエンジンを使用、src/View/templetes直下

&nbsp;

・aタグやformタグで画面遷移の際、init.phpファイルにある{_SCRIPT_NAME}という定数を使用するように

&nbsp;

・_SCRIPT_NAMEは現在のスクリプトが実行されているサーバーのホスト名を意味しているので、

&nbsp;

・これでまた最初の流れに戻るイメージ

&nbsp;
