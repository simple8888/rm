{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}
<br /><br /><br />
起始日期:<input name="chushengriqi" type="text" onClick="WdatePicker()" size=12 />－〉终止日期:<input name="chushengriqi" type="text" onClick="WdatePicker()" size=12 />&nbsp;<input class="button" type="button" value="查询" onClick=window.location.href='index.php?p=renliziyuanshuru' />
<table class="table">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>ID</th><th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>编辑</th>
                </tr>
		{section name=record loop=$yuangong}
		    <tr>
                        <td>{$yuangong[record].yuangongID}</td>
                        <td>{$yuangong[record].number}</td>	
                        <td>{$yuangong[record].name}</td>
                        <td>{if $yuangong[record].riqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$yuangong[record].riqi}
                            {/if}  
                        </td>
                        <td>{$yuangong[record].fadingcq}</td>
                        <td>{$yuangong[record].fadingjb}</td>
                        <td>{$yuangong[record].zhoumojb}</td>
                        <td>{$yuangong[record].guodingdx}</td>
                        <td>{$yuangong[record].hunjia}</td>
                        <td>{$yuangong[record].chanjia}</td>
                        <td>{$yuangong[record].sangjia}</td>
                        <td>{$yuangong[record].bingjia}</td>
                        <td>{$yuangong[record].pingshiqj}</td>
                        <td>{$yuangong[record].zhoumoqj}</td>
                        <td>{$yuangong[record].quanqin}</td>
                        <td>{$yuangong[record].dizeng}</td>
                        <td>{$yuangong[record].peixun}</td>
                        <td>{$yuangong[record].jintie}</td>
                        <td>{$yuangong[record].hongbao}</td>
                        <td>{$yuangong[record].fazhan}</td>
                        <td>{$yuangong[record].gaowen}</td>
                        <td>{$yuangong[record].gongshang}</td>
                        <td>{$yuangong[record].shuidian}</td>
                      


                        <td><a href="kaoqincharu.php?ygID={$yuangong[record].yuangongID}">输入</a>
		            <a href="kaoqinmodify.php?ygID={$yuangong[record].yuangongID}">修改</a></td>   
                                
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
	
<center><a href="index.php?p=kaoqinshuru">考勤&请假休假&福利&代扣款等数据输入</a></center>


{include file="default/footer.inc.tpl" }


