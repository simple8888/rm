﻿{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}
<br /><br /><br />                                                          {*用隐藏域传递renliziyuancx这个参数,如果直接放在action后面传递,因为单击后表单还没提交,所以传递不了这个参数*} 
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="chanlianggongzicx" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="全部">全部</option><option value="是" >是</option><option value="否">否</option></select>&nbsp;<input class="button" type="submit" value="产量查询" />&nbsp;<input class="button" type="button" value="产量汇总" onClick=window.location.href='#' /></form>

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>yID</th><th>cID</th><th>工号</th><th>姓名</th><th>工序</th><th>日期</th><th>产量</th><th>产能补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>当日产量工资</th><th>编辑</th>
                </tr>
		{section name=record loop=$chanlianggongzi}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$chanlianggongzi[record].yuangongID}</td>
                        <td>{$chanlianggongzi[record].ygongID}</td>
                        <td>{$chanlianggongzi[record].number}</td>	
                        <td>{$chanlianggongzi[record].name}</td>
                        <td>{$chanlianggongzi[record].gongxu}</td>
                        <td>{if $chanlianggongzi[record].riqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$chanlianggongzi[record].riqi}
                            {/if}  
                        </td>
                        <td>{$chanlianggongzi[record].chanliang}</td>
                        <td>{$chanlianggongzi[record].channengbt}</td>
                        
                        <td>{$chanlianggongzi[record].zhuanghuo}</td>
                        <td>{$chanlianggongzi[record].xiehuo}</td>
                        <td>{$chanlianggongzi[record].zahuo}</td>
                        <td>{$chanlianggongzi[record].yichang}</td>
                        <td>{$chanlianggongzi[record].chanlianggongzi}</td>
                      
                        <td><a href="index.php?p=chanlianggongzishuru&ygID={$chanlianggongzi[record].yuangongID}&clID={$chanlianggongzi[record].chanliangID}&gzdd={$chanlianggongzi[record].gongzuodidian}">插入</a>
		            <a href="index.php?p=chanlianggongzimodify&ygID={$chanlianggongzi[record].yuangongID}&clID={$chanlianggongzi[record].chanliangID}&gzdd={$chanlianggongzi[record].gongzuodidian}">修改</a>
                            <a href="index.php?p=chanlianggongzidelete&ygID={$chanlianggongzi[record].yuangongID}&clID={$chanlianggongzi[record].chanliangID}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=chanlianggongzi">产量工资数据批量显示</a></center>


{include file="default/footer.inc.tpl" }


