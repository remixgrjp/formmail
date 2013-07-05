### ■ソフト名称
	フォームメール

### ■バージョン
	1.0

### ■ソフトの概要
	　国産フレームワーク ethna で動作する 簡単なフォームメール の ＷＥＢアプリケ
	ーションです。
	　PHPフレームワークの理解と発展方法の学習にちょうどいい規模だと思います。

		　エントリポイント(Index)
		　　　│
		┏━━┷━━┓
		┃   Form   ┃メール・コメント入力
		┗━━━━━┛

		　確認(Confirm)→ エラー → Form
		　　　│
		┏━━┷━━┓
		┃ Confirm  ┃ クリア(Clear) → Form
		┗━━━━━┛

		　送信(Send)→ エラー → Form
		　　　│
		　　　│→ メール送信
		　　　│
		┏━━┷━━┓
		┃ Complete ┃ 戻る(Index)→ Form
		┗━━━━━┛

	　次のステップとして、デザイン、入力項目、画面遷移(アクション・ビュー)、デー
	タベース化が考えられます。

### ■動作条件
	　設置対象のサーバで、Apache などのＷＥＢサーバから php が実行でき、メール転
	送ができている必要があります。フレームワーク Ethna は、安定バージョン 2.5.0。
	その他の詳細なモジュールは、それぞれ下記を参考にダウンロード＆インストールしてください。
	http://ethna.jp/

	動作確認済の環境例１
		CentOS release 5.8 (Final)
		Sendmail 8.13.8-8.1.el5_7
		Apache 2.0
		PHP Version 5.1.6
		php-mbstring 5.1.6-34.el5_8
		PEAR Version: 1.9.4
			（pear list）
			Archive_Tar      1.3.10
			Console_Getopt   1.3.1
			DB               1.7.14
			PEAR             1.9.4
			Structures_Graph 1.0.4
			XML_RPC          1.5.5
			XML_Util         1.2.1
		Smarty-2.6.26
		Ethna 2.5.0

	動作確認済の環境例２
		CentOS release 6.2 (Final)
		Postfix 2:2.6.6-2.2.el6_1
		Apache 2.0
		PHP Version 5.3.3 
		php-mbstring 5.3.3-3.el6_2.8
		PEAR Version: 1.9.4
			（pear list）
			Archive_Tar      1.3.7
			Console_Getopt   1.2.3
			DB               1.7.14
			PEAR             1.9.4
			Structures_Graph 1.0.4
			XML_RPC          1.5.4
			XML_Util         1.2.1
		Smarty-2.6.26
		Ethna 2.5.0

	　ソースは UTF-8 です。

### ■インストールの手順
	１．設置対象のサーバで直接ダウンロード・解凍するか、解凍済みの全てのファイ
	ルをディクトリ構造のままＦＴＰで設置します。

	　主要なファイルとディクトリ構造
		formmail
		├─etc
		│      formmail-ini.php	★設定ファイル
		│
		├─locale
		├─www
		│  │  unittest.php
		│  │  xmlrpc.php
		│  │  info.php
		│  │  index.php	★エントリーポイント
		│  │
		│  ├─css
		│  └─js
		│
		├─template		★テンプレート
		│  └─ja_JP
		│      │  Form.tpl
		│      │  Debug.tpl
		│      │  Complete.tpl
		│      │  Confirm.tpl
		│      │  Index.tpl
		│      │
		│      └─mail
		│              Mail.tpl
		│
		├─bin
		├─app
		├─log		★ログディレクトリ
		│      formmail.log
		│
		├─schema
		├─skel
		├─tmp		★テンポラリディレクトリ
		│
		└─lib

	２．必要最小限のパーミッション設定。
	　エントリーポイントには不特定者の参照権限を付けます。
	　ログディレクトリの権限を rwxrwxrwx とします。
	　テンポラリディレクトリの権限を rwxrwxrwx とします。

	３．ＷＥＢサーバのDocumentRootを変更することが可能ならば、解凍した www フォ
	ルダを DocumentRoot にするのが最も簡単です。
	　既存の DocumentRoot に配置したい場合、シンボリックリンクを張るか、エントリ
	ーポイントを含む、www フォルダ内のファイルを既存の DocumentRoot に配置し エ
	ントリーポイントファイルの２行目
		require_once dirname(__FILE__) . '/../app/Formmail_Controller.php';
	を
		require_once '/var/http/formmail/app/Formmail_Controller.php';
	のような絶対パスに書き換えます。
	　ここまでの設定で、ブラウザ等から動作を確認できるはずです。

	４．メッセージを受け付けるメールアドレスは、設定ファイルの 'EMAIL' の値です。
	サーバで外部へのメール配送ができていれば、携帯などに適宜変更します。

	５．デフォルトで設定ファイルはデバックモードとなっており大量のログが出力され
	問題解決や学習の助けになるはずです。通常の運用では設定ファイルのコメントに従
	ってログを抑制します。

### ■アンインストールの手順
	　インストール時に解凍したformmailフォルダごと削除するだけでアンインストール
	が完了します。ＷＥＢサーバの設定を変更した場合も元へ戻すのをお忘れなく。

### ■使用方法
	　現状のテンプレートは、好みのデザインにカスタマイズしやすいよう必要最小限構
	成です。{}で囲まれた箇所以外の HTML、CSS、JavaScriptを自由に変更できます。

### ■取り扱い種別
	　無料です。
	　作者は本ソフトウエアを使用したことにより生じた損害について一切の責任を負い
	ません。

### ■金額
	無料

### ■送金方法
	　寄付していただける場合、お振込先銀行口座を返信いたしますので

		[http://www.remix.asia/service/formmail/](http://www.remix.asia/service/formmail/)

	より、ご連絡ください。

### ■試用制限
	制限はありません。利用者の責任で設置・運用お願いいたします。

### ■連絡先
	http+formmail@remix.asia
	ＲＥＭＩＸ

### ■変更履歴
	2012-07-21	Version 1.0 初版リリース
