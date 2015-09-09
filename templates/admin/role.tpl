{include file="../admin/header.admin.inc.tpl" }

<br />

<table class="table" style="margin-top:20px;width:96%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="roleshuru.php">角色输入</a></caption> 
                <tr> 
		<th>roleid</th><th>角色名</th><th>角色代码</th><th>权限代码</th><th>编辑</th>
                </tr>
		{section name=record loop=$role}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$role[record].roleid}</td>
                        <td>{$role[record].rolename}</td>
                        <td>{$role[record].rolecode}</td>
                        <td style="width:600px;word-wrap:break-word;word-break:break-all;">{$role[record].permissioncode}</td>
                       
		        <td><a href="rolemodify.php?rlid={$role[record].roleid}">修改</a>
                            <a href="roledelete.php?rlid={$role[record].roleid}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=role">角色表批量显示</a></center>


{include file="../admin/footer.inc.tpl" }


