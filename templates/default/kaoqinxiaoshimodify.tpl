{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl"}
{include file="default/kaoqin.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>最低工资表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="kaoqinxiaoshicharumodify.php" method="POST">
    
    <input name="xiaoshiID" type="hidden" value={$xiaoshiID} />
    年度:<input name="niandu" type="text" size=40 {if $niandu==null} value="" {else} value={$niandu} {/if} /><span>*</span>例如:2015 <br /> 
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="罗麦" {if $gongchang=="罗麦"} selected="selected" {/if} >罗麦</option><option value="博涵" {if $gongchang=="博涵"} selected="selected" {/if} >博涵</option></select><span>*</span> <br />
    小时最低工资:<input name="xiaoshizd" type="text" size=31 {if $xiaoshizd==null} value="" {else} value={$xiaoshizd} {/if} /><span>*</span> <br />
    日最低工资:<input name="rizuidi" type="text" size=33 {if $rizuidi==null} value="" {else} value={$rizuidi} {/if} /><span>*</span> <br />
    月最低工资:<input name="yuezuidi" type="text" size=33 {if $yuezuidi==null} value="" {else} value={$yuezuidi} {/if} /><span>*</span> <br />
    备注:<input name="beizhu" type="text" size=40 {if $beizhu==null} value="" {else} value={$beizhu} {/if} /> <br />
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="default/footer.inc.tpl"}