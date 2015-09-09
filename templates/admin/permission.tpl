{include file="../admin/header.admin.inc.tpl" }

<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="permissionshuru.php">权限输入</a></caption> 
                <tr> 
		<th>permissionid</th><th>权限名</th><th>权限代码</th><th>权限</th><th>编辑</th>
                </tr>
		{section name=record loop=$permission}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$permission[record].permissionid}</td>
                        <td>{$permission[record].permissionname}</td>
                        <td>{$permission[record].permissioncode}</td>
                        <td>{$permission[record].permission}</td>
                        
                       
		        <td><a href="permissionmodify.php?pmid={$permission[record].permissionid}">修改</a>
                            <a href="permissiondelete.php?pmid={$permission[record].permissionid}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=permission">权限表批量显示</a></center>


{include file="../admin/footer.inc.tpl" }


