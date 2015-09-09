{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/renliziyuandangan.header.inc.tpl"}
<br /><br /><br />
<form action="renliziyuancx.php" method="GET" style="margin-top:-14px;">入职日期:<input name="ruzhiriqi1" type="text" onClick="WdatePicker()" size=10 {if $ruzhiriqi1==null} value="" {else} value={$ruzhiriqi1} {/if} />－〉入职日期:<input name="ruzhiriqi2" type="text" onClick="WdatePicker()" size=10 {if $ruzhiriqi2==null} value="" {else} value={$ruzhiriqi2} {/if} /> 工号:<input name="number" type="text" size=6 {if $number==null} value="" {else} value={$number} {/if} /> 姓名:<input name="name" type="text" size=6 {if $name==null} value="" {else} value={$name} {/if} /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" {if $factory=="luomai"} selected="selected" {/if} >罗麦</option><option value="bohan" {if $factory=="bohan"} selected="selected" {/if} ">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="all">全部</option><option value="是" {if $zhuchang=="是"} selected="selected" {/if} >是</option><option value="否" {if $zhuchang=="否"} selected="selected" {/if} >否</option></select> 在职:<select name="zaizhi" size=1><option value="all">全部</option><option value="是" {if $zaizhi=="是"} selected="selected" {/if} >是</option><option value="否" {if $zaizhi=="否"} selected="selected" {/if} >否</option></select>&nbsp;<input class="button" type="submit" value="信息查询" /><input type="hidden" name="clearsession" value="true" /></form>

<table class="table">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>ID</th><th>工号</th><th>姓名</th><th>性别</th><th>出生日期</th><th>年龄</th><th>身份证号</th><th>手机</th><th>固话</th><th>Email</th><th>婚否</th><th>籍贯</th><th>现居住地</th><th>职务</th><th>入职日期</th><th>合同期限</th><th>工厂</th><th>是否住厂</th><th>是否在职</th><th>离职日期</th><th>特长</th><th>备注</th><th>编辑</th>
                </tr>
		{section name=record loop=$yuangong}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$yuangong[record].yuangongID}</td>
                        <td>{$yuangong[record].number}</td>	
                        <td>{$yuangong[record].name}</td>
                        <td>{$yuangong[record].sex}</td>
                        <td>{if $yuangong[record].birthday=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$yuangong[record].birthday}
                            {/if}  
                        </td>
                        <td>{round(((strtotime(date("Y-m-d"))-strtotime($yuangong[record].birthday))/(60*60*24)/365),2)}</td>
                        <td>{$yuangong[record].idno}</td>
                        <td>{$yuangong[record].cell}</td>
                        <td>{$yuangong[record].tel}</td>
                        <td>{$yuangong[record].email}</td>
                        <td>{$yuangong[record].marriage}</td>
                        <td>{$yuangong[record].hometown}</td>
                        <td>{$yuangong[record].livesite}</td>
                        <td>{$yuangong[record].zhiwu}</td>
                        <td>{if $yuangong[record].ruzhiriqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$yuangong[record].ruzhiriqi}
                            {/if}  
                        </td>
                        <td>{$yuangong[record].hetongqixian}</td>
                        <td>{$yuangong[record].gongzuodidian}</td>
                        <td>{$yuangong[record].shifouzhuchang}</td>
                        <td>{$yuangong[record].shifouzaizhi}</td>
                        <td>{if $yuangong[record].lizhiriqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$yuangong[record].lizhiriqi}
                            {/if}  
                        </td>
                        <td>{$yuangong[record].feature}</td>
                        <td>{$yuangong[record].memo}</td>
                        <td><a href="renlimodify.php?ygID={$yuangong[record].yuangongID}">修改</a>
		            <a href="renlidelete.php?ygID={$yuangong[record].yuangongID}">删除</a></td>
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">没有任何员工记录</p>  
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
	
<center><a href="index.php?p=renliziyuanshuru">员工信息输入</a></center>

{include file="default/footer.inc.tpl" }