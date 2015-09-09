<?php /* Smarty version 3.1.24, created on 2015-07-27 13:29:43
         compiled from "D:/Apache24/htdocs/rm/templates/admin/permissionmodify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1927555b5c1c778f066_62633648%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e118de60423c277430c2d3db46f0dccc03138d39' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/permissionmodify.tpl',
      1 => 1437974971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927555b5c1c778f066_62633648',
  'variables' => 
  array (
    'permissionid' => 0,
    'permissionname' => 0,
    'permissioncode' => 0,
    'permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b5c1c77f87f8_26553334',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b5c1c77f87f8_26553334')) {
function content_55b5c1c77f87f8_26553334 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1927555b5c1c778f066_62633648';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>权限表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="permissioncharumodify.php" method="POST">
    
    <input name="permissionid" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['permissionid']->value;?>
 />
    权限名:<input name="permissionname" type="text" size=38 <?php if ($_smarty_tpl->tpl_vars['permissionname']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['permissionname']->value;?>
 <?php }?> /><span>*</span><br />
    权限代码:<input name="permissioncode" type="text" size=36 <?php if ($_smarty_tpl->tpl_vars['permissioncode']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['permissioncode']->value;?>
 <?php }?> /><span>*</span><br />
    权限:<input name="permission" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['permission']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['permission']->value;?>
 <?php }?> /><span>*</span><br />    
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>