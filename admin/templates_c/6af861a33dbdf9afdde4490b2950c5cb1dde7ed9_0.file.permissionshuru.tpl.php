<?php /* Smarty version 3.1.24, created on 2015-07-27 13:27:21
         compiled from "D:/Apache24/htdocs/rm/templates/admin/permissionshuru.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1333855b5c1394d4fd8_95150388%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af861a33dbdf9afdde4490b2950c5cb1dde7ed9' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/permissionshuru.tpl',
      1 => 1437974834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333855b5c1394d4fd8_95150388',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b5c139555e71_38908372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b5c139555e71_38908372')) {
function content_55b5c139555e71_38908372 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1333855b5c1394d4fd8_95150388';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入权限信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="permissioncharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    权限名:<input name="permissionname" type="text" size=38 /><span>*</span><br />
    权限代码:<input name="permissioncode" type="text" size=36 /><span>*</span><br />
    权限:<input name="permission" type="text" size=40 /><span>*</span><br />

       
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>