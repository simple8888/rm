﻿{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/zhilianggongzi.header.inc.tpl"}
<br /><br /><br />
<form action="zhilianggongzicx.php" method="GET" style="margin-top:-14px;">起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=8 {if $qishiriqi==null} value="" {else} value={$qishiriqi} {/if} />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=8 {if $zhongzhiriqi==null} value="" {else} value={$zhongzhiriqi} {/if} /> 工号:<input name="number" type="text" size=6 {if $number==null} value="" {else} value={$number} {/if} /> 姓名:<input name="name" type="text" size=6 {if $name==null} value="" {else} value={$name} {/if} /> 工厂:<select name="factory" size=1  ><option  value="all" >全部</option><option value="luomai" {if $factory=="luomai"} selected="selected" {/if} >罗麦</option><option value="bohan" {if $factory=="bohan"} selected="selected" {/if} >博涵</option></select> 住厂:<select name="zhuchang" size=1  ><option  value="全部" >全部</option><option value="是" {if $zhuchang=="是"} selected="selected" {/if} >是</option><option value="否" {if $zhuchang=="否"} selected="selected" {/if} >否</option></select>&nbsp;<input class="button" type="submit" value="质量查询" />&nbsp;<input class="button" type="button" value="质量汇总" onClick=window.location.href='#' /><input type="hidden" name="clearsession" value="true" /></form>

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>yID</th><th>zID</th><th>工号</th><th>姓名</th><th>日期</th><th>质量奖励合计</th><th>质量扣款合计</th><th>质量工资合计</th><th>编辑</th>
                </tr>
		{section name=record loop=$zhilianggongzi}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$zhilianggongzi[record].yuangongID}</td>
                        <td>{$zhilianggongzi[record].ygongID}</td>
                        <td>{$zhilianggongzi[record].number}</td>	
                        <td>{$zhilianggongzi[record].name}</td>
                        <td>
                                {NULL}
                             
                        </td> 
                        <td>{$zhilianggongzi[record].zhiliangjl}</td>
                        <td>{$zhilianggongzi[record].zhiliangkk}</td>
                        <td>{$zhilianggongzi[record].zhilianggongzi}</td>

                        <td><a href="zhilianggongzishuru.php?ygID={$zhilianggongzi[record].yuangongID}&zlID={$zhilianggongzi[record].zhiliangID}">插入</a>
		            <a href="zhilianggongzimodify.php?ygID={$zhilianggongzi[record].yuangongID}&zlID={$zhilianggongzi[record].zhiliangID}">修改</a>
                            <a href="zhilianggongzidelete.php?ygID={$zhilianggongzi[record].yuangongID}&zlID={$zhilianggongzi[record].zhiliangID}">删除</a> </td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">没有任何记录</p>  
                 {/section} 			
	       </table>
               {* 在下面段落中输出和分页有关的信息，并输出用户可以页面切换操作的链接 *}
	<p align="center">
		共<b> {$pageInfo.row_total} </b>条记录，
		显示第 <b> {$pageInfo.page_start} </b>-<b> {$pageInfo.page_end} </b> 条记录
		<a href='{$url}?page=1'>|&lt;</a>
		{if $pageInfo.prev_page}
			<a href='{$url}?page={$pageInfo.prev_page}'>&lt;&lt;</a>
		{else}	
			&lt;&lt;
		{/if}
		{if $pageInfo.next_page}
			<a href='{$url}?page={$pageInfo.next_page}'>>></a>
		{else}	
			>>
		{/if}
		<a href='{$url}?page={$pageInfo.page_num}'>>|</a>
		当前第<b>{$pageInfo.current_page}/{$pageInfo.page_num} </b>页
	</p>	
	
<center><a href="index.php?p=zhilianggongzishuru">质量工资数据批量显示</a></center>

{include file="default/footer.inc.tpl" }


