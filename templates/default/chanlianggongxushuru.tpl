{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/chanlianggongzi.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入工序信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="chanlianggongxucharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="罗麦" >罗麦</option><option value="博涵">博涵</option></select><span>*</span> <br />
    车间:<input name="chejian" type="text" size=40 /><span>*</span> <br />
    工序:<input name="gongxu" type="text" size=40 /><span>*</span> <br />
    工价:<input name="gongjia" type="text" size=40 /><span>*</span> <br />
    备注:<input name="beizhu" type="text" size=40 /> <br />

       
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}

