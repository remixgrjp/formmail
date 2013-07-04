<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="./css/Common.css" type="text/css" />
	<link rel="stylesheet" href="./css/Default.css" type="text/css" />
	<title>{$config.APPNAME} ver{$config.VERSION} {$smarty.template}</title>
	<meta name='description' content='{$config.DESCRIPTION}'>
	<meta name='keywords' content='{$config.KEYWORDS}'>
</head>
<body>
<div id="header">入力フォーム > 確認 > 完了</div>



<form method="post" action="{$script}" />{*CSRF対策*}{csrfid}{*CSRF対策*}
<div id="main">
	<h1>受付フォーム</h1>
	{if $app.info}<div class="info">{$app.info}</div>{/if}
	{if $app.warn}<div class="warn">{$app.warn}</div>{/if}
	<h2>ありがとうございました。</h2>
</div>
<div id="main">
	<input type="submit" name="action_Index" value="戻る" />
</div>
</form>



<div id="footer">(C)2012 REMIX. All rights reserved.</div>
<div id="main">{$app_ne.banner}{include file="Debug.tpl"}</div>
</body>
</html>
