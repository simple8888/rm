{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}
<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="index.php?p=kaoqinxiaoshishuru">最低工资标准输入</a></caption> 
                <tr> 
		<th>xiaoshiID</th><th>年度</th><th>工厂</th><th>小时最低工资</th><th>日最低工资</th><th>月最低工资</th><th>备注</th><th>编辑</th>
                </tr>
		{section name=record loop=$kaoqinxiaoshi}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$kaoqinxiaoshi[record].xiaoshiID}</td>
                        <td>{$kaoqinxiaoshi[record].niandu}</td>
                        <td>{$kaoqinxiaoshi[record].gongchang}</td>	
                        <td>{$kaoqinxiaoshi[record].xiaoshizd}</td>
                        <td>{$kaoqinxiaoshi[record].rizuidi}</td>
                        <td>{$kaoqinxiaoshi[record].yuezuidi}</td>
                        <td>{$kaoqinxiaoshi[record].beizhu}</td>
                        
                      
                        
		        <td><a href="index.php?p=kaoqinxiaoshimodify&xsID={$kaoqinxiaoshi[record].xiaoshiID}">修改</a>
                            <a href="index.php?p=kaoqinxiaoshidelete&xsID={$kaoqinxiaoshi[record].xiaoshiID}">删除</a> </td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">表里没有任何记录</p>  
                 {/section} 			
	       </table>
注意:最低工资标准，每年应根据当地政府的相关规定在相应月份及时做出调整,否则将得不到正确的工资汇总！
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
	
<center><a href="index.php?p=kaoqinxiaoshi">最低工资表批量显示</a></center>


{include file="default/footer.inc.tpl" }


