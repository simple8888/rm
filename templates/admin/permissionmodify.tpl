{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>权限表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="permissioncharumodify.php" method="POST">
    
    <input name="permissionid" type="hidden" value={$permissionid} />
    权限名:<input name="permissionname" type="text" size=38 {if $permissionname==null} value="" {else} value={$permissionname} {/if} /><span>*</span><br />
    权限代码:<input name="permissioncode" type="text" size=36 {if $permissioncode==null} value="" {else} value={$permissioncode} {/if} /><span>*</span><br />
    权限:<input name="permission" type="text" size=40 {if $permission==null} value="" {else} value={$permission} {/if} /><span>*</span><br />    
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="../admin/footer.inc.tpl"}