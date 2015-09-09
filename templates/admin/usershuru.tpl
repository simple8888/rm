{include file="../admin/header.admin.inc.tpl"}


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入用户信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="usercharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    用户名:<input name="username" type="text" size=38 /><span>*</span><br />
    密码:<input name="password" type="password" size=40 /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="" ></option><option value="罗麦" >罗麦</option><option value="博涵">博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 /> <br />
    真实姓名:<input name="name" type="text" size=35 /><span>*</span><br />    
    {*下面角色里的复选框名字，以数组role[]的形式来采集数据*}
    角色代码:{section name=record loop=$rolecd max=$r start=0 } <input name="rolecode[]" type="checkbox" value={$rolecd[record].rolecode} />{$rolecd[record].rolecode} {/section} <br />

    {*角色代码:<select style="width:273px;" name="role" size=1> {section name=record loop=$rolecode max=$r start=0 } <option value={$rolecode[record].rolecode} >{$rolecode[record].rolecode}</option> {/section} </select> <br />*}      
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="../admin/footer.inc.tpl"}

