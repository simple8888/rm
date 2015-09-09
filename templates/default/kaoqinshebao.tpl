{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}
<br /><br /><br />
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="kaoqinshebaocx" />工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 险种:<select name="xianzhong" size=1><option value="全部">全部</option><option value="三险" >三险</option><option value="五险">五险</option></select>&nbsp;<input class="button" type="submit" value="社保查询" />&nbsp;<input class="button" type="button" value="社保汇总" onClick=window.location.href='#' /></form>

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>yID</th><th>sID</th><th>工号</th><th>姓名</th><th>年度缴费基数</th><th>缴纳比例</th><th>险种</th><th>社保</th><th>备注</th><th>编辑</th>
                </tr>
		{section name=record loop=$kaoqinshebao}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$kaoqinshebao[record].yuangongID}</td>
                        <td>{$kaoqinshebao[record].ygongID}</td>
                        <td>{$kaoqinshebao[record].number}</td>	
                        <td>{$kaoqinshebao[record].name}</td>
                        <td>{$kaoqinshebao[record].jishu}</td>
                        <td>{$kaoqinshebao[record].bili}</td>
                        <td>{$kaoqinshebao[record].xianzhong}</td>
                        <td>{$kaoqinshebao[record].shebao}</td>
                        <td>{$kaoqinshebao[record].beizhu}</td>

                        <td><a href="index.php?p=kaoqinshebaomodify&ygID={$kaoqinshebao[record].yuangongID}&sbID={$kaoqinshebao[record].shebaoID}">修改</a></td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">没有任何记录</p>  
                 {/section} 			
	       </table>
注意:年度缴费基数和缴纳比例，每年应根据当地政府的相关规定在相应月份及时做出调整！
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
	
<center><a href="index.php?p=kaoqinshebao">员工社保信息批量显示</a></center>

{include file="default/footer.inc.tpl" }


