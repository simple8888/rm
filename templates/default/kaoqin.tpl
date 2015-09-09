{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}
<br /><br /><br />                                                 {*用隐藏域传递renliziyuancx这个参数,如果直接放在action后面传递,因为单击后表单还没提交,所以传递不了这个参数*}  
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="kaoqincx" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="全部">全部</option><option value="是" >是</option><option value="否">否</option></select>&nbsp;<input class="button" type="submit" value="考勤查询" />&nbsp;<input class="button" type="button" value="考勤汇总" onClick=window.location.href='#' /></form>

<table class="table" style="margin-top:20px;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>yID</th><th>kID</th><th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>编辑</th>
                </tr>
		{section name=record loop=$kaoqin}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$kaoqin[record].yuangongID}</td>
                        <td>{$kaoqin[record].ygongID}</td>
                        <td>{$kaoqin[record].number}</td>	
                        <td>{$kaoqin[record].name}</td>
                        <td>{if $kaoqin[record].riqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$kaoqin[record].riqi}
                            {/if}  
                        </td>
                        <td>{$kaoqin[record].fadingcq}</td>
                        <td>{$kaoqin[record].fadingjb}</td>
                        <td>{$kaoqin[record].zhoumojb}</td>
                        <td>{$kaoqin[record].guodingdx}</td>
                        <td>{$kaoqin[record].hunjia}</td>
                        <td>{$kaoqin[record].chanjia}</td>
                        <td>{$kaoqin[record].sangjia}</td>
                        <td>{$kaoqin[record].bingjia}</td>
                        <td>{$kaoqin[record].pingshiqj}</td>
                        <td>{$kaoqin[record].zhoumoqj}</td>
                        <td>{$kaoqin[record].quanqin}</td>
                        <td>{$kaoqin[record].dizeng}</td>
                        <td>{$kaoqin[record].peixun}</td>
                        <td>{$kaoqin[record].jintie}</td>
                        <td>{$kaoqin[record].hongbao}</td>
                        <td>{$kaoqin[record].fazhan}</td>
                        <td>{$kaoqin[record].gaowen}</td>
                        <td>{$kaoqin[record].gongshang}</td>
                        <td>{$kaoqin[record].shuidian}</td>
         

                        <td><a href="index.php?p=kaoqinshuru&ygID={$kaoqin[record].yuangongID}&kqID={$kaoqin[record].kaoqinID}">插入</a>
		            <a href="index.php?p=kaoqinmodify&ygID={$kaoqin[record].yuangongID}&kqID={$kaoqin[record].kaoqinID}">修改</a>
                            <a href="index.php?p=kaoqindelete&ygID={$kaoqin[record].yuangongID}&kqID={$kaoqin[record].kaoqinID}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=kaoqin">考勤&请假休假&福利&代扣款等数据批量显示</a></center>


{include file="default/footer.inc.tpl" }


