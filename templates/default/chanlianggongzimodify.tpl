{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>产量工资信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="chanlianggongzicharumodify.php" method="POST">
    <input name="chanliangID" type="hidden" value={$chanliangID} />      
    <input name="ygongID" type="hidden" value={$ygongID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />

    工序:<select style="width:273px;" name="gongxu" size=1> {section name=record loop=$gx max=$r} <option value={$gx[record].gongxu} {if $gx[record].gongxu==$gongxu} selected="selected" {/if} >{$gx[record].gongxu}</option> {/section} </select> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 {if $riqi==null} value="" {else} value={$riqi}{/if} /><span>*</span> <br />    
    产量:<input name="chanliang" type="text" size=40 {if $chanliang==null} value="" {else} value={$chanliang}{/if} /> <br />
    产能补贴:<input name="channengbt" type="text" size=35 {if $channengbt==null} value="" {else} value={$channengbt}{/if} /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    
    装货:<input name="zhuanghuo" type="text" size=40 {if $zhuanghuo==null} value="" {else} value={$zhuanghuo}{/if} /> <br />
    卸货:<input name="xiehuo" type="text" size=40 {if $xiehuo==null} value="" {else} value={$xiehuo}{/if} /> <br />
    杂活:<input name="zahuo" type="text" size=40 {if $zahuo==null} value="" {else} value={$zahuo}{/if} /> <br />
    异常:<input name="yichang" type="text" size=40 {if $yichang==null} value="" {else} value={$yichang}{/if} /> <br />
    

   
    <div style="margin-left:100px;"><input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}
