{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入产量工资信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form name="formkq" style="align:right;margin-top:25px;margin-left:160px;" method="POST">
    <input name="ygongID" type="hidden" value={$ygongID} />
    <input name="chanliangID" type="hidden" value={$chanliangID} />
   
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />      
    工序:<select style="width:273px;" name="gongxu" size=1> {section name=record loop=$gx max=$r start=0 } <option value={$gx[record].gongxu} {if $gx[record].gongxu==$gongxu} selected="selected" {/if}>{$gx[record].gongxu}</option> {/section} </select>(智能自动输入上次输入的值) <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 /><span>*</span> <- <input style="width:86px" class="button"  type="submit" name="piliangshurur" value="批量输入日期" onClick="piliangshururiqicl()" /> 　<- <input style="width:86px" class="button"  type="submit" name="piliangshanchuriqi" value="批量删除日期" onClick="piliangshanchuriqicl()" />包括当日的数据,删除前筛选罗麦或博涵 <br />    
    产量:<input name="chanliang" type="text" size=40 /> <br />
    产能补贴:<input name="channengbt" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    装货:<input name="zhuanghuo" type="text" size=40 /> <br />
    卸货:<input name="xiehuo" type="text" size=40 /> <br />
    杂活:<input name="zahuo" type="text" size=40 /> <br />
    异常:<input name="yichang" type="text" size=40 /> <br />
    
    
       
    <div style="margin-left:100px;"> <input class="button" type="submit" name="submit" value="提交" onClick="tijiaocl()" />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}