{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>员工社保信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form name="formkq" style="align:right;margin-top:25px;margin-left:160px;" method="POST">
    <input name="ygongID" type="hidden" value={$ygongID} />
    <input name="shebaoID" type="hidden" value={$shebaoID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />
    年度缴费基数:<input name="jishu" type="text" size=30 {if $jishu==null} value="" {else} value={$jishu}{/if} /><span>*</span> <br /> 
    缴纳比例:<input name="bili" type="text" size=35 {if $bili==null} value="" {else} value={$bili}{/if} />(<span>*</span> <- <input style="width:86px" class="button"  type="submit" name="piliangshurur" value="批量输入比例" onClick="piliangshurubilisb()" /> 输入前请先筛选工厂和险种,否则对所有人操作 <br />    
    险种:<select style="width:272px;" name="xianzhong" size=1  ><option  value="" >请选择险种</option><option value="三险" {if $xianzhong=="三险"} selected="selected" {/if} >三险</option><option value="五险" {if $xianzhong=="五险"} selected="selected" {/if} >五险</option></select><span>*</span><br /> 
    备注:<input name="beizhu" type="text" size=40 {if $beizhu==null} value="" {else} value={$beizhu}{/if} /> <br />
 
    <div style="margin-left:100px;"> <input class="button" type="submit" name="submit" value="提交" onClick="tijiaosb()" />
    <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}
