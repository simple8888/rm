{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入权限信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="permissioncharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    权限名:<input name="permissionname" type="text" size=38 /><span>*</span><br />
    权限代码:<input name="permissioncode" type="text" size=36 /><span>*</span><br />
    权限:<input name="permission" type="text" size=40 /><span>*</span><br />

       
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="../admin/footer.inc.tpl"}

