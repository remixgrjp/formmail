X-Priority: {$form.priority}
Subject:メッセージを受け付けました

{* 必ず↑空行必要 CR+LF改行で記述すること *}
{$config.APPNAME} で {$form.email} 様からのメッセージを受け付けました。

--------------------ここから
{$form.comment}
--------------------ここまで

重要度：{$priority}

受付日時：{$smarty.now|date_format:"%Y/%m/%d %H:%M:%S"}

送信端末情報
{foreach from=$headers key=k item=v name=l}
{$k}：{$v}
{/foreach}
