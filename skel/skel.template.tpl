<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$client_enc}">
	<link rel="stylesheet" href="./css/Common.css" type="text/css" />
	<link rel="stylesheet" href="./css/Default.css" type="text/css" />
	<title>{$config.APPNAME} ver{$config.VERSION} {$smarty.template}</title>
	<meta name='description' content='{$config.DESCRIPTION}'>
	<meta name='keywords' content='{$config.KEYWORDS}'>
</head>
<body>



{if $app.info}<div class="info">{$app.info}</div>{/if}
{if $app.warn}<div class="warn">{$app.warn}</div>{/if}



<form method="post" action="{$script}" />
<input type="submit" name="action_ClearSession" value="クリア" />
</form>



{$app_ne.banner}{include file="Debug.tpl"}
</body>
</html>
