{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl"}
{include file="default/renliziyuandangan.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;">请<span>修改</span>员工基本信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="margin-top:25px;" action="renliziyuancharumodify.php" method="POST">
       
     <input name="yuangongID" type="hidden" value={$yuangongID} />
    工号:<input name="gonghao" type="text" size=40 {if $number==null} value="" {else} value={$number} {/if} /><span>*</span>最多只能输入6位数 <br />    
    姓名:<input name="xingming" type="text" size=40 {if $name==null} value="" {else} value={$name} {/if} /><span>*</span> <br />
    性别:<input  type="radio" name="xingbie" value="男" {if $sex=="男"} checked="checked" {/if} />男 <input name="xingbie" type="radio"  value="女" {if $sex=="女"} checked="checked" {/if} />女 <span>*</span><br />  
    出生日期:<input name="chushengriqi" type="text" onClick="WdatePicker()" size=35 {if $birthday=="0000-00-00"} value="" {else} value={$birthday}{/if} /><span>*</span>例如:1998-01-28 <br />  
    <!--age -->
    身份证号:<input name="shenfenzhenghao" type="text" size=35 {if $idno==null} value="" {else} value={$idno} {/if} /><span>*</span>最多只能输入18位数 <br />
    手机:<input name="shouji" type="text" size=40 {if $cell==null} value="" {else} value={$cell} {/if} /><span>*</span>最多只能输入11位数 <br />
    固话:<input name="guhua" type="text" size=40 {if $tel==null} value="" {else} value={$tel} {/if} /> <br />    
    Email:<input name="email" type="text" size=39 {if $email==null} value="" {else} value={$email} {/if} /> <br />
    婚否:<input name="hunfou" type="radio" value="是" {if $marriage=="是"} checked="checked" {/if} />是 <input name="hunfou" type="radio" value="否" {if $marriage=="否"} checked="checked" {/if} />否 <input name="hunfou" type="radio" value="未提供" {if $marriage=="未提供"} checked="checked" {/if} />未提供<br /> 
    籍贯:<input name="jiguan" type="text" size=120 {if $hometown==null} value="" {else} value={$hometown} {/if} /> <br />
    现居住地:<input name="xianjuzhudi" type="text" size=115 {if $livesite==null} value="" {else} value={$livesite} {/if} /> <br />
    职务:<input name="zhiwu" type="radio" value="一线员工" {if $zhiwu=="一线员工"} checked="checked" {/if} >一线员工 <input name="zhiwu" type="radio" value="管理人员" {if $zhiwu=="管理人员"} checked="checked" {/if} />管理人员 <span>*</span><br />
    入职日期:<input name="ruzhiriqi" type="text" onClick="WdatePicker()" size=35 {if $ruzhiriqi=="0000-00-00"} value="" {else} value={$ruzhiriqi} {/if} /><span>*</span>例如:2015-01-25 <br /> 
    <!--工作年限-->
    合同期限:<input name="hetongqixian" type="text" size=35 {if $hetongqixian==null} value="" {else} value={$hetongqixian} {/if} /> <br />
    工作地点:<input name="gongzuodidian" type="radio" value="罗麦" {if $gongzuodidian=="罗麦"} checked="checked" {/if} />罗麦 <input name="gongzuodidian" type="radio" value="博涵" {if $gongzuodidian=="博涵"} checked="checked" {/if} />博涵 <span>*</span><br />
    是否住厂:<input name="shifouzhuchang" type="radio" value="是" {if $shifouzhuchang=="是"} checked="checked" {/if} />是 <input name="shifouzhuchang" type="radio" value="否" {if $shifouzhuchang=="否"} checked="checked" {/if} />否 <span>*</span><br />
    是否在职:<input name="shifouzaizhi" type="radio" value="是" {if $shifouzaizhi=="是"} checked="checked" {/if} />是 <input name="shifouzaizhi" type="radio" value="否" {if $shifouzaizhi=="否"} checked="checked" {/if} />否 <span>*</span><br />
    离职日期:<input name="lizhiriqi" type="text" onClick="WdatePicker()" size=35 {if $lizhiriqi=="0000-00-00"} value="" {else} value={$lizhiriqi}{/if} /> <br />
    特长:<input name="techang" type="text" size=120 {if $feature==null} value="" {else} value={$feature} {/if} /> <br />
    备注:<textarea style="vertical-align:middle;" name="beizhu" cols="88" rows=2 value={$memo} /></textarea><br />
    <center style="margin-top:4px;"> <input class="button" type="submit" name="submit" value="提交修改" /> </center>
                                

    </form> 

{include file="default/footer.inc.tpl"}