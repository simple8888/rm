{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>考勤&请假休假&福利&代扣款等数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="kaoqincharumodify.php" method="POST">
    <input name="kaoqinID" type="hidden" value={$kaoqinID} />      
    <input name="ygongID" type="hidden" value={$ygongID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 {if $riqi==null} value="" {else} value={$riqi}{/if} /><span>*</span> <br />    
    法定出勤:<input name="fadingcq" type="text" size=35 {if $fadingcq==null} value="" {else} value={$fadingcq} {/if} /> <br />
    法定加班:<input name="fadingjb" type="text" size=35 {if $fadingjb==null} value="" {else} value={$fadingjb} {/if} /> <br />
    周末加班:<input name="zhoumojb" type="text" size=35 {if $zhoumojb==null} value="" {else} value={$zhoumojb} {/if} /> <br />  
    国定待薪:<input name="guodingdx" type="text" size=35 {if $guodingdx==null} value="" {else} value={$guodingdx} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    婚假:<input name="hunjia" type="text" size=40 {if $hunjia==null} value="" {else} value={$hunjia} {/if} /> <br />
    产假:<input name="chanjia" type="text" size=40 {if $chanjia==null} value="" {else} value={$chanjia} {/if} /> <br />    
    丧假:<input name="sangjia" type="text" size=40 {if $sangjia==null} value="" {else} value={$sangjia} {/if} /> <br />
    病假:<input name="bingjia" type="text" size=40 {if $bingjia==null} value="" {else} value={$bingjia} {/if} /> <br />
    平时请假:<input name="pingshiqj" type="text" size=35 {if $pingshiqj==null} value="" {else} value={$pingshiqj} {/if} /> <br />
    周末请假:<input name="zhoumoqj" type="text" size=35 {if $zhoumoqj==null} value="" {else} value={$zhoumoqj} {/if} /> <br />
    全勤:<input name="quanqin" type="text" size=40 {if $quanqin==null} value="" {else} value={$quanqin} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    递增:<input name="dizeng" type="text" size=40 {if $dizeng==null} value="" {else} value={$dizeng} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    培训补贴:<input name="peixun" type="text" size=35 {if $peixun==null} value="" {else} value={$peixun} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    岗位津贴:<input name="jintie" type="text" size=35 {if $jintie==null} value="" {else} value={$jintie} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    生日红包:<input name="hongbao" type="text" size=35 {if $hongbao==null} value="" {else} value={$hongbao} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    发展奖:<input name="fazhan" type="text" size=37 {if $fazhan==null} value="" {else} value={$fazhan} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    高温费:<input name="gaowen" type="text" size=37 {if $gaowen==null} value="" {else} value={$gaowen} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    工伤:<input name="gongshang" type="text" size=40 {if $gongshang==null} value="" {else} value={$gongshang} {/if} /> <br /> 
    水电费:<input name="shuidian" type="text" size=38 {if $shuidian==null} value="" {else} value={$shuidian} {/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br /> 
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="default/footer.inc.tpl"}
