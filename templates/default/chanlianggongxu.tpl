{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}
<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="index.php?p=chanlianggongxushuru">工序输入</a></caption> 
                <tr> 
		<th>gongxuID</th><th>工厂</th><th>车间</th><th>工序</th><th>工价</th><th>备注</th><th>编辑</th>
                </tr>
		{section name=record loop=$chanlianggongxu}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$chanlianggongxu[record].gongxuID}</td>
                        <td>{$chanlianggongxu[record].gongchang}</td>
                        <td>{$chanlianggongxu[record].chejian}</td>	
                        <td>{$chanlianggongxu[record].gongxu}</td>
                        <td>{$chanlianggongxu[record].gongjia}</td>
                        <td>{$chanlianggongxu[record].beizhu}</td>
                        
                      
                        
		        <td><a href="index.php?p=chanlianggongxumodify&gxID={$chanlianggongxu[record].gongxuID}">修改</a>
                            <a href="index.php?p=chanlianggongxudelete&gxID={$chanlianggongxu[record].gongxuID}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=chanlianggongxu">工序信息表批量显示</a></center>


{include file="default/footer.inc.tpl" }


