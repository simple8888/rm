{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/zhilianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>质量工资信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="zhilianggongzicharumodify.php" method="POST">
    <input name="zhiliangID" type="hidden" value={$zhiliangID} />      
    <input name="ygongID" type="hidden" value={$ygongID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 {if $riqi==null} value="" {else} value={$riqi}{/if} /><span>*</span> <br />    
    质量奖励:<input name="zhiliangjl" type="text" size=35 {if $zhiliangjl==null} value="" {else} value={$zhiliangjl} {/if} /> <br />
    质量扣款:<input name="zhiliangkk" type="text" size=35 {if $zhiliangkk==null} value="" {else} value={$zhiliangkk} {/if} /> <br />
   
    <div style="margin-left:100px;"><input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}
