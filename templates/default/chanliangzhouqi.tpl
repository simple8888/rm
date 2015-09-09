{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}
<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="index.php?p=chanliangzhouqishuru">盘点周期输入</a></caption> 
                <tr> 
		<th>zhouqiID</th><th>工厂</th><th>盘点月份</th><th>起始日期</th><th>终止日期</th><th>备注</th><th>编辑</th>
                </tr>
		{section name=record loop=$chanliangzhouqi}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$chanliangzhouqi[record].zhouqiID}</td>
                        <td>{$chanliangzhouqi[record].gongchang}</td>
                        <td>{$chanliangzhouqi[record].pandianyuefen}</td>	
                        <td>{$chanliangzhouqi[record].qishiriqi}</td>
                        <td>{$chanliangzhouqi[record].zhongzhiriqi}</td>
                        <td>{$chanliangzhouqi[record].beizhu}</td>
                        
                      
                        
		        <td><a href="index.php?p=chanliangzhouqimodify&zqID={$chanliangzhouqi[record].zhouqiID}">修改</a>
                            <a href="index.php?p=chanliangzhouqidelete&zqID={$chanliangzhouqi[record].zhouqiID}">删除</a> </td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">表里没有任何记录</p>  
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
	
<center><a href="index.php?p=chanliangzhouqi">盘点周期信息表批量显示</a></center>


{include file="default/footer.inc.tpl" }


