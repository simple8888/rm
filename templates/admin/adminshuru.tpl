{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入后台管理员信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="admincharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    管理员用户名:<input name="adminname" type="text" size=31 /><span>*</span><br />
    密码:<input name="password" type="password" size=40 /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="" ></option><option value="罗麦" >罗麦</option><option value="博涵">博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 /> <br />
    备注:<input name="beizhu" type="text" size=40 /> <br />
    真实姓名:<input name="name" type="text" size=35 /><span>*</span><br />    
    

    {*角色代码:<select style="width:273px;" name="role" size=1> {section name=record loop=$rolecode max=$r start=0 } <option value={$rolecode[record].rolecode} >{$rolecode[record].rolecode}</option> {/section} </select> <br />*}      
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="../admin/footer.inc.tpl"}

