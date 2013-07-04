{if $config.debug}{*ＵＴＦ８*}
	<hr>{$smarty.now|date_format:"%Y/%m/%d %H:%M:%S"}
	/ action[{$actionName}] / view[{$viewName}]
	{if count($errors)}
		<ul>
		{foreach from=$errors item=error}
			<li>{$error}</li>
		{/foreach}
		</ul>
	{/if}
	<textarea wrap=off cols=80 rows=32>{$session|var_dump}</textarea>
	<hr>Formmail{$config.VERSION} Ethna-{$smarty.const.ETHNA_VERSION} Smarty-{$smarty.version}
{/if}
