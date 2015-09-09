{include file="default/header.inc.tpl"}

{if $tplname!=''}
{include file=$tplname}
{elseif $phpname!=''}
{include file=$phpname}
{/if}
 
{include file="default/footer.inc.tpl"}