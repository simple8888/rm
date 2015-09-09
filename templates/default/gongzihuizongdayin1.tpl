<html> 
<head>
<title>{$title}</title>
<style>
 @media Print { .Noprn { DISPLAY:none; }}
.table{ border-collapse:collapse; align:center; width:100%;cellspacing:0px; cellpadding:0px; border:solid 0px #9a9ca0;} /* border:solid 1px #d9e4f2; */
.table th{ background: #e5f7e2; font-family:宋体;font-size:6px;font-weight:normal;border:solid 1px #9a9ca0;}
.table td{ font-size:4px;border:solid 1px #9a9ca0;}


</style> 
</head> 

<script type="text/javascript">
function preview(){
bdhtml=window.document.body.innerHTML;
sprnstr="<!--startprint-->";
eprnstr="<!--endprint-->";
prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17);
prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
window.print();
window.document.body.innerHTML=bdhtml;
} 
</script> 

<body style="-webkit-text-size-adjust:none; font-size:8px;"> 
<form id="WebForm1" metdod="post" > 
<!--<center class="Noprn">本部分以上不被打印</center> -->
<!--startprint-->
<div align="center"> 
<table class="table"> 
<caption>{$tableName}</caption>
                <tr> 
		<th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>产能补贴</th><th>小时最低工资补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>产量工资</th><th>质量工资</th><th>应发工资</th><th>社保</th><th>个税</th><th>实发工资</th>
                </tr>
		{section name=record loop=$gongzihuizong}
{*{assign var="xiaosh" value=5}自定义变量并赋值*}
{*小时最低工资补贴*}
{capture name="xiaoshizd"}{if (($gongzihuizong[record].fadingcq==0) and ($gongzihuizong[record].fadingjb==0) and ($gongzihuizong[record].zhoumojb==0))} {null} {elseif ($gongzihuizong[record].fadingcq*$xiaoshizd+$gongzihuizong[record].fadingjb*$xiaoshizd*1.5+$gongzihuizong[record].zhoumojb*$xiaoshizd*2+$gongzihuizong[record].shebao) > ($gongzihuizong[record].quanqin + $gongzihuizong[record].dizeng + $gongzihuizong[record].peixun + $gongzihuizong[record].jintie + $gongzihuizong[record].channengbt + $gongzihuizong[record].zhuanghuo + $gongzihuizong[record].xiehuo + $gongzihuizong[record].zahuo + $gongzihuizong[record].yichang + $gongzihuizong[record].chanlianggongzi + $gongzihuizong[record].zhilianggongzi)} {round(($gongzihuizong[record].fadingcq*$xiaoshizd+$gongzihuizong[record].fadingjb*$xiaoshizd*1.5+$gongzihuizong[record].zhoumojb*$xiaoshizd*2+$gongzihuizong[record].shebao) - ($gongzihuizong[record].quanqin + $gongzihuizong[record].dizeng + $gongzihuizong[record].peixun + $gongzihuizong[record].jintie + $gongzihuizong[record].channengbt + $gongzihuizong[record].zhuanghuo + $gongzihuizong[record].xiehuo + $gongzihuizong[record].zahuo + $gongzihuizong[record].yichang + $gongzihuizong[record].chanlianggongzi + $gongzihuizong[record].zhilianggongzi),2)} {else} {null} {/if}{/capture}
{*应发工资yfgz*}
{capture name="yfgz"}{if (($gongzihuizong[record].fadingcq==0) and ($gongzihuizong[record].fadingjb==0) and ($gongzihuizong[record].zhoumojb==0))} {null} {else} {round(($gongzihuizong[record].guodingdx+$gongzihuizong[record].hunjia*$rizuidi*0.8+$gongzihuizong[record].chanjia*$rizuidi*0.8+$gongzihuizong[record].sangjia*$rizuidi*0.8+$gongzihuizong[record].bingjia*$rizuidi*0.8+$gongzihuizong[record].quanqin + $gongzihuizong[record].dizeng + $gongzihuizong[record].peixun + $gongzihuizong[record].jintie + $gongzihuizong[record].hongbao + $gongzihuizong[record].fazhan + $gongzihuizong[record].gaowen + $gongzihuizong[record].gongshang + $gongzihuizong[record].channengbt + $smarty.capture.xiaoshizd + $gongzihuizong[record].zhuanghuo + $gongzihuizong[record].xiehuo + $gongzihuizong[record].zahuo + $gongzihuizong[record].yichang + $gongzihuizong[record].chanlianggongzi + $gongzihuizong[record].zhilianggongzi),2)} {/if}{/capture}
{*应纳税金额yn*}
{capture name="yn"}{if ($smarty.capture.yfgz-$gongzihuizong[record].shebao-3500)<0} {0} {else} {$smarty.capture.yfgz-$gongzihuizong[record].shebao-3500} {/if}{/capture}
{*个人所得税gs*}{capture name="gs"}{if $smarty.capture.yn<=1500} {$smarty.capture.yn*0.03} {elseif $smarty.capture.yn<=4500} {$smarty.capture.yn*0.1-105} {elseif $smarty.capture.yn<=9000} {$smarty.capture.yn*0.2-555} {elseif $smarty.capture.yn<=35000} {$smarty.capture.yn*0.25-1005} {elseif $smarty.capture.yn<=55000} {$smarty.capture.yn*0.3-2755} {elseif $smarty.capture.yn<=80000} {$smarty.capture.yn*0.35-5505} {else} {$smarty.capture.yn*0.45-13505} {/if}{/capture}
		    <tr bgcolor="{cycle values="#DDFFCC,#cafab1"}">
                        <td>{$gongzihuizong[record].number}</td>	
                        <td>{$gongzihuizong[record].name}</td>
                        <td>{$pdzq}</td>

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
                               {*小时最低工资补贴*} 
                        <td>{$smarty.capture.xiaoshizd}</td>

                        <td>{if $gongzihuizong[record].zhuanghuo==0} {null} {else} {$gongzihuizong[record].zhuanghuo} {/if}</td>
                        <td>{if $gongzihuizong[record].xiehuo==0} {null} {else} {$gongzihuizong[record].xiehuo} {/if}</td>
                        <td>{if $gongzihuizong[record].zahuo==0} {null} {else} {$gongzihuizong[record].zahuo} {/if}</td>
                        <td>{if $gongzihuizong[record].yichang==0} {null} {else} {$gongzihuizong[record].yichang} {/if}</td>
                        <td>{if $gongzihuizong[record].chanlianggongzi==0} {null} {else} {$gongzihuizong[record].chanlianggongzi} {/if}</td>
                        <td>{if $gongzihuizong[record].zhilianggongzi==0} {null} {else} {$gongzihuizong[record].zhilianggongzi} {/if}</td>
                              {*应发工资*}         
                        <td>{$smarty.capture.yfgz}</td>
 
                              {*社保*}
                        <td>{if (($gongzihuizong[record].fadingcq==0) and ($gongzihuizong[record].fadingjb==0) and ($gongzihuizong[record].zhoumojb==0))} {null} {elseif $gongzihuizong[record].shebao==0} {null} {else} {$gongzihuizong[record].shebao} {/if}</td>
                              {*个税*} 
                        <td>{if $smarty.capture.gs==0} {null} {else} {round($smarty.capture.gs,2)} {/if}</td>
                              {*实发工资*} 
                        <td>{if ($smarty.capture.yfgz-$gongzihuizong[record].shebao-$smarty.capture.gs-$gongzihuizong[record].shuidian)<=0} {null} {else} {round($smarty.capture.yfgz-$gongzihuizong[record].shebao-$smarty.capture.gs-$gongzihuizong[record].shuidian,2)} {/if}</td>


               
                                
                    </tr>
                 {sectionelse}                  
                    <p align="center">没有任何记录</p>  
                 {/section} 			
</table> 
</div> 
<!--endprint-->
<!-- <center class="Noprn">本部分以下不被打印</center> -->
<div class="Noprn" style="margin-top:20px;" align="center"> 
<p style="border-top: 1px dotted #CCC;padding-top: 6px;"><input type="button" name="print" onclick="preview()" value="预览并打印"> <input type="button" name="back" onClick=window.location.href="index.php?p=gongzihuizong" value="返回系统"></p>
</div> 

<!--<p class="Noprn">不打印</p> 
<input class="Noprn" type="button" onclick="window.print()" value="print"> -->

</form> 
</body> 
</html> 