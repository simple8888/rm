{include file="default/salary.header.inc.tpl" }
{include file="default/renliziyuandangan.header.inc.tpl"}


		<table align="center" width="98%" border="1">
		<caption><h2>员工基本信息表</h2></caption>
                <tr> 
		<th>ID</th><th>工号</th><th>姓名</th><th>性别</th><th>出生日期</th><th>身份证号</th><th>手机</th><th>固话</th><th>Email</th><th>婚否</th><th>籍贯</th><th>现居住地</th><th>职务</th><th>入职日期</th><th>合同期限</th><th>工作地点</th><th>是否住厂</th><th>是否在职</th><th>离职日期</th><th>特长</th><th>备注</th><th>编辑</th>
                </tr>
		{foreach from=$allYuangong item=row}
		        <tr>
                         {foreach from=$row item=col}	
                                 <td>{$col}</td>
                         {/foreach} 
                        </tr>
                 {foreachelse}                  
                    <p align="center">没有任何员工记录</p>  
                 {/foreach} 
         
		<a href="editview.php?action=modify&productID='.$product->getId().'">修改</a>&nbsp;//
		<a href="control.php?action=delete&productID='.$product->getId().'">删除</a>
			
	       </table>
	
<center><a href="editview.php?action=add">添加员工信息</a></center>


