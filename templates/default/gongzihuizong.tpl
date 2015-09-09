{include file="default/header.inc.tpl" }
{include file="default/salary.header.inc.tpl" }
{include file="default/gongzihuizong.header.inc.tpl"}
<br /><br /><br />                                              {*用隐藏域传递renliziyuancx这个参数,如果直接放在action后面传递,因为单击后表单还没提交,所以传递不了这个参数*}                                                                                                                                                                                                                                                                                                                                                                                                                                                                {* 倒序输出盘点月份 *}
<form name="formhz" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" id="huizong" value="" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="罗麦">罗麦</option><option value="博涵">博涵</option></select> 盘点周期:<select name="pandianzhouqi" size=1 ><option value="">请选择月份</option> {section name=record loop=$yf max=$r start=$r-1 step=-1 } <option value={$yf[record].gongpan}>{$yf[record].gongpan}</option> {/section} </select>&nbsp;<input class="button" type="submit" value="工资查询" onclick="gongzichaxun()" />&nbsp;<input class="button" type="submit" value="导出Excel" onClick="toexcel()" /></form>

<table class="table" style="margin-top:20px;width:100%;text-align:center;">
		<caption><h2>{$tableName}</h2></caption>
                <tr> 
		<th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>产能补贴</th><th>小时最低工资补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>产量工资</th><th>质量工资</th><th>应发工资</th><th>社保</th><th>个税</th><th>实发工资</th>
                </tr>
		{section name=record loop=$gongzihuizong}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$gongzihuizong[record].number}</td>	
                        <td>{$gongzihuizong[record].name}</td>
                        <td></td>

                        <td>{if $gongzihuizong[record].fadingcq==0} {null} {else} {$gongzihuizong[record].fadingcq} {/if}</td>
                        <td>{if $gongzihuizong[record].fadingjb==0} {null} {else} {$gongzihuizong[record].fadingjb} {/if}</td>
                        <td>{if $gongzihuizong[record].zhoumojb==0} {null} {else} {$gongzihuizong[record].zhoumojb} {/if}</td>
                        <td>{if $gongzihuizong[record].guodingdx==0} {null} {else} {$gongzihuizong[record].guodingdx} {/if}</td>
                        <td>{if $gongzihuizong[record].hunjia==0} {null} {else} {$gongzihuizong[record].hunjia} {/if}</td>
                        <td>{if $gongzihuizong[record].chanjia==0} {null} {else} {$gongzihuizong[record].chanjia} {/if}</td>
                        <td>{if $gongzihuizong[record].sangjia==0} {null} {else} {$gongzihuizong[record].sangjia} {/if} </td>
                        <td>{if $gongzihuizong[record].bingjia==0} {null} {else} {$gongzihuizong[record].bingjia} {/if}</td>
                        <td>{if $gongzihuizong[record].pingshiqj==0} {null} {else} {$gongzihuizong[record].pingshiqj} {/if}</td>
                        <td>{if $gongzihuizong[record].zhoumoqj==0} {null} {else} {$gongzihuizong[record].zhoumoqj} {/if}</td>
                        <td>{if $gongzihuizong[record].quanqin==0} {null} {else} {$gongzihuizong[record].quanqin} {/if}</td>
                        <td>{if $gongzihuizong[record].dizeng==0} {null} {else} {$gongzihuizong[record].dizeng} {/if}</td>
                        <td>{if $gongzihuizong[record].peixun==0} {null} {else} {$gongzihuizong[record].peixun} {/if}</td>
                        <td>{if $gongzihuizong[record].jintie==0} {null} {else} {$gongzihuizong[record].jintie} {/if}</td>
                        <td>{if $gongzihuizong[record].hongbao==0} {null} {else} {$gongzihuizong[record].hongbao} {/if}</td>
                        <td>{if $gongzihuizong[record].fazhan==0} {null} {else} {$gongzihuizong[record].fazhan} {/if}</td>
                        <td>{if $gongzihuizong[record].gaowen==0} {null} {else} {$gongzihuizong[record].gaowen} {/if}</td>
                        <td>{if $gongzihuizong[record].gongshang==0} {null} {else} {$gongzihuizong[record].gongshang} {/if}</td>
                        <td>{if $gongzihuizong[record].shuidian==0} {null} {else} {$gongzihuizong[record].shuidian} {/if}</td>
                        <td>{if $gongzihuizong[record].channengbt==0} {null} {else} {$gongzihuizong[record].channengbt} {/if}</td>

                        <td>{if $gongzihuizong[record].zuidibt==0} {null} {else} {$gongzihuizong[record].zuidibt} {/if}</td>
                        <td>{if $gongzihuizong[record].zhuanghuo==0} {null} {else} {$gongzihuizong[record].zhuanghuo} {/if}</td>
                        <td>{if $gongzihuizong[record].xiehuo==0} {null} {else} {$gongzihuizong[record].xiehuo} {/if}</td>
                        <td>{if $gongzihuizong[record].zahuo==0} {null} {else} {$gongzihuizong[record].zahuo} {/if}</td>
                        <td>{if $gongzihuizong[record].yichang==0} {null} {else} {$gongzihuizong[record].yichang} {/if}</td>
                        <td>{if $gongzihuizong[record].chanlianggongzi==0} {null} {else} {$gongzihuizong[record].chanlianggongzi} {/if}</td>
                        <td>{if $gongzihuizong[record].zhilianggongzi==0} {null} {else} {$gongzihuizong[record].zhilianggongzi} {/if}</td>
                        <td>{$gongzihuizong[record].quanqin + $gongzihuizong[record].dizeng + $gongzihuizong[record].peixun + $gongzihuizong[record].jintie + $gongzihuizong[record].hongbao + $gongzihuizong[record].fazhan + $gongzihuizong[record].gaowen + $gongzihuizong[record].gongshang - $gongzihuizong[record].shuidian + $gongzihuizong[record].channengbt + $gongzihuizong[record].zuidibt + $gongzihuizong[record].zhuanghuo + $gongzihuizong[record].xiehuo + $gongzihuizong[record].zahuo + $gongzihuizong[record].yichang + $gongzihuizong[record].chanlianggongzi + $gongzihuizong[record].zhilianggongzi}</td>
                        <td>{if $gongzihuizong[record].shebao==0} {null} {else} {$gongzihuizong[record].shebao} {/if}</td>
                        <td></td>
                        <td></td> 
                                
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
	
<center><a href="index.php?p=gongzihuizong">工资汇总表批量显示</a></center>

{include file="default/footer.inc.tpl" }

