{include file="../admin/header.admin.inc.tpl" }

<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2>{$tableName}</h2><a href="usershuru.php">用户输入</a></caption> 
                <tr> 
		<th>userid</th><th>用户名</th><th>密码</th><th>工厂</th><th>部门</th><th>真实姓名</th><th>角色代码</th><th>编辑</th>
                </tr>
		{section name=record loop=$user}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$user[record].userid}</td>
                        <td>{$user[record].username}</td>
                        <td>{$user[record].password}</td>	
                        <td>{$user[record].gongchang}</td>
                        <td>{$user[record].bumen}</td>
                        <td>{$user[record].name}</td>
                        <td>{$user[record].rolecode}</td>
                        
                       
		        <td><a href="usermodify.php?usid={$user[record].userid}">修改</a>
                            <a href="userdelete.php?usid={$user[record].userid}">删除</a> </td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">表里没有任何记录</p>  
                 {/section} 			
	       </table>
说明:如果某用户的工厂为空,则该用户可以同时查看两个工厂的数据!
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
<center><a href="index.php?p=user">用户表批量显示</a></center>


{include file="../admin/footer.inc.tpl" }


