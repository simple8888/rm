{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>后台管理员表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="admincharumodify.php" method="POST">
    
    <input name="adminid" type="hidden" value={$adminid} />
    管理员用户名:<input name="adminname" type="text" size=31 {if $adminname==null} value="" {else} value={$adminname} {/if} /><span>*</span><br />
    密码:<input name="password" type="password" size=40 {if $password==null} value="" {else} value={$password} {/if} /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="gc">请选择工厂</option><option value="" {if $gongchang==""} selected="selected" {/if} ></option><option value="罗麦" {if $gongchang=="罗麦"} selected="selected" {/if} >罗麦</option><option value="博涵" {if $gongchang=="博涵"} selected="selected" {/if} >博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 {if $bumen==null} value="" {else} value={$bumen} {/if} /> <br />
    真实姓名:<input name="name" type="text" size=35 {if $name==null} value="" {else} value={$name} {/if} /><span>*</span> <br />
    备注:<input name="beizhu" type="text" size=40 {if $beizhu==null} value="" {else} value={$beizhu} {/if} /> <br />

    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="../admin/footer.inc.tpl"}