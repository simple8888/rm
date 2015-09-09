{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/zhilianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入质量工资信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form name="formkq" style="align:right;margin-top:25px;margin-left:160px;" method="POST">
    <input name="ygongID" type="hidden" value={$ygongID} />
    <input name="zhiliangID" type="hidden" value={$zhiliangID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 /><span>*</span> <- <input style="width:86px" class="button"  type="submit" name="piliangshurur" value="批量输入日期" onClick="piliangshururiqizl()" /> 　<- <input style="width:86px" class="button"  type="submit" name="piliangshanchuriqi" value="批量删除日期" onClick="piliangshanchuriqizl()" />包括当日的数据,删除前筛选罗麦或博涵 <br />    
    质量奖励:<input name="zhiliangjl" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    质量扣款:<input name="zhiliangkk" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    {*质量工资:<input name="zhilianggongzi" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />*}
       
    <div style="margin-left:100px;"> <input class="button" type="submit" name="submit" value="提交" onClick="tijiaozl()" />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}

