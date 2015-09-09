<?php /* Smarty version 3.1.24, created on 2015-08-01 13:56:05
         compiled from "D:/Apache24/htdocs/rm/templates/admin/adminshuru.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1114155bc5f75e87160_71399836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb09479645787a01e50002f8710792fa1a3f9e0' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/adminshuru.tpl',
      1 => 1438408364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114155bc5f75e87160_71399836',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bc5f75ee0ef6_10892745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bc5f75ee0ef6_10892745')) {
function content_55bc5f75ee0ef6_10892745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1114155bc5f75e87160_71399836';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入后台管理员信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="admincharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    管理员用户名:<input name="adminname" type="text" size=31 /><span>*</span><br />
    密码:<input name="password" type="password" size=40 /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="" ></option><option value="罗麦" >罗麦</option><option value="博涵">博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 /> <br />
    备注:<input name="beizhu" type="text" size=40 /> <br />
    真实姓名:<input name="name" type="text" size=35 /><span>*</span><br />    
    

          
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>