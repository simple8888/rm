﻿{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}
<br /><br /><br />
<form action="kaoqincx.php" method="GET" style="margin-top:-14px;">起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=8 {if $qishiriqi==null} value="" {else} value={$qishiriqi} {/if} />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=8 {if $zhongzhiriqi==null} value="" {else} value={$zhongzhiriqi} {/if} /> 工号:<input name="number" type="text" size=6 {if $number==null} value="" {else} value={$number} {/if} /> 姓名:<input name="name" type="text" size=6 {if $name==null} value="" {else} value={$name} {/if} /> 工厂:<select name="factory" size=1  ><option  value="all" >全部</option><option value="luomai" {if $factory=="luomai"} selected="selected" {/if} >罗麦</option><option value="bohan" {if $factory=="bohan"} selected="selected" {/if} >博涵</option></select> 住厂:<select name="zhuchang" size=1  ><option  value="全部" >全部</option><option value="是" {if $zhuchang=="是"} selected="selected" {/if} >是</option><option value="否" {if $zhuchang=="否"} selected="selected" {/if} >否</option></select>&nbsp;<input class="button" type="submit" value="考勤查询" />&nbsp;<input class="button" type="button" value="考勤汇总" onClick=window.location.href='index.php?p=renliziyuanshuru' /><input type="hidden" name="clearsession" value="true" /></form>

<table class="table" style="margin-top:20px;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>yID</th><th>kID</th><th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>编辑</th>
                </tr>
		{section name=record loop=$kaoqincx}
		    <tr>
                        <td>{$kaoqincx[record].yuangongID}</td>
                        <td>{$kaoqincx[record].yuangongID}</td>
                        <td>{$kaoqincx[record].number}</td>	
                        <td>{$kaoqincx[record].name}</td>
                        <td>{if $kaoqincx[record].riqi=='0000-00-00'}
                                {NULL}
                             {else}   
                                  {$kaoqincx[record].riqi}
                            {/if}  
                        </td>
                        <td>{$kaoqincx[record].fadingcq}</td>
                        <td>{$kaoqincx[record].fadingjb}</td>
                        <td>{$kaoqincx[record].zhoumojb}</td>
                        <td>{$kaoqincx[record].guodingdx}</td>
                        <td>{$kaoqincx[record].hunjia}</td>
                        <td>{$kaoqincx[record].chanjia}</td>
                        <td>{$kaoqincx[record].sangjia}</td>
                        <td>{$kaoqincx[record].bingjia}</td>
                        <td>{$kaoqincx[record].pingshiqj}</td>
                        <td>{$kaoqincx[record].zhoumoqj}</td>
                        <td>{$kaoqincx[record].quanqin}</td>
                        <td>{$kaoqincx[record].dizeng}</td>
                        <td>{$kaoqincx[record].peixun}</td>
                        <td>{$kaoqincx[record].jintie}</td>
                        <td>{$kaoqincx[record].hongbao}</td>
                        <td>{$kaoqincx[record].fazhan}</td>
                        <td>{$kaoqincx[record].gaowen}</td>
                        <td>{$kaoqincx[record].gongshang}</td>
                        <td>{$kaoqincx[record].shuidian}</td>
                      

                        <td><a href="kaoqinshuru.php?ygID={$kaoqincx[record].yuangongID}&kqID={$kaoqincx[record].kaoqinID}">插入</a>
		            <a href="kaoqinmodify.php?ygID={$kaoqincx[record].yuangongID}&kqID={$kaoqincx[record].kaoqinID}">修改</a>
                            <a href="kaoqindelete.php?ygID={$kaoqincx[record].yuangongID}&kqID={$kaoqincx[record].kaoqinID}">删除</a> </td>
                                
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
	
<center><a href="index.php?p=kaoqinshuru">考勤&请假休假&福利&代扣款等数据批量显示</a></center>

{include file="default/footer.inc.tpl" }


