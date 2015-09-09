{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>角色表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="rolecharumodify.php" method="POST">
    
    <input name="roleid" type="hidden" value={$roleid} />
    角色名:<input name="rolename" type="text" size=38 {if $rolename==null} value="" {else} value={$rolename} {/if} /><span>*</span><br />
    角色代码:<input name="rolecode" type="text" size=36 {if $rolecode==null} value="" {else} value={$rolecode} {/if} /><span>*</span><br />
    {*被选中的项组成一个新的数组，循环列出所有项目时，出现在新数组里的项目被选中*}
    权限代码:{section name=record loop=$permissioncd max=$r start=0 } <input name="permissioncode[]" type="checkbox" value={$permissioncd[record].permissioncode} {if (in_array($permissioncd[record].permissioncode,$permissioncode))}  checked="checked" {/if} />{$permissioncd[record].permissioncode} {/section} <span>*</span><br />
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

{include file="../admin/footer.inc.tpl"}