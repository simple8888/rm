{include file="default/header.inc.tpl"}
<div>
<h2>待定2在模板里输出</h2>
<p>that that在模板里输出</p>
</div>

<table border="1" width="80%" align="center">
<caption><h1>联系人信息</h1></caption>
<tr>
<th>姓名</th><th>传真</th><th>电邮</th><th>电话</th>
</tr>
{foreach from=$contact item=row}
       <tr>
        {foreach from=$row item=col}
               <td>{$col}</td>
        {/foreach}
        </tr>
{/foreach}
</table>    
{include file="default/footer.inc.tpl"} 


