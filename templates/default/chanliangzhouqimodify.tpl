{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl"}
{include file="default/chanlianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>盘点周期信息表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="chanliangzhouqicharumodify.php" method="POST">
    
    <input name="zhouqiID" type="hidden" value={$zhouqiID} /> 
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="罗麦" {if $gongchang=="罗麦"} selected="selected" {/if} >罗麦</option><option value="博涵" {if $gongchang=="博涵"} selected="selected" {/if} >博涵</option></select><span>*</span> <br />
    盘点月份:<input name="pandianyuefen" type="text" size=35 {if $pandianyuefen==null} value="" {else} value={$pandianyuefen} {/if} /><span>*</span>例如:2015年8月 <br />
    起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=35 {if $qishiriqi==null} value="" {else} value={$qishiriqi} {/if} /><span>*</span> <br />
    终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=35 {if $zhongzhiriqi==null} value="" {else} value={$zhongzhiriqi} {/if} /><span>*</span> <br />
    备注:<input name="beizhu" type="text" size=40 {if $beizhu==null} value="" {else} value={$beizhu} {/if} /> <br />
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="default/footer.inc.tpl"}