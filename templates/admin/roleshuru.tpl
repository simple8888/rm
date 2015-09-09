{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入角色信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="rolecharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    角色名:<input name="rolename" type="text" size=38 /><span>*</span><br />
    角色代码:<input name="rolecode" type="text" size=36 /><span>*</span><br />
    权限代码:{section name=record loop=$permissioncd max=$r start=0 } <input name="permissioncode[]" type="checkbox" value={$permissioncd[record].permissioncode} />{$permissioncd[record].permissioncode} {/section} <span>*</span><br />

       
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="../admin/footer.inc.tpl"}

