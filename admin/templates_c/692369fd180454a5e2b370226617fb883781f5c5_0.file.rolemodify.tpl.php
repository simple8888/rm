<?php /* Smarty version 3.1.24, created on 2015-07-24 15:58:31
         compiled from "D:/Apache24/htdocs/rm/templates/admin/rolemodify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2736355b1f0275d20b6_46862804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692369fd180454a5e2b370226617fb883781f5c5' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/rolemodify.tpl',
      1 => 1437655987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736355b1f0275d20b6_46862804',
  'variables' => 
  array (
    'roleid' => 0,
    'rolename' => 0,
    'rolecode' => 0,
    'permissioncd' => 0,
    'r' => 0,
    'permissioncode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b1f027652f50_68556174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b1f027652f50_68556174')) {
function content_55b1f027652f50_68556174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2736355b1f0275d20b6_46862804';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>角色表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="rolecharumodify.php" method="POST">
    
    <input name="roleid" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['roleid']->value;?>
 />
    角色名:<input name="rolename" type="text" size=38 <?php if ($_smarty_tpl->tpl_vars['rolename']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['rolename']->value;?>
 <?php }?> /><span>*</span><br />
    角色代码:<input name="rolecode" type="text" size=36 <?php if ($_smarty_tpl->tpl_vars['rolecode']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['rolecode']->value;?>
 <?php }?> /><span>*</span><br />
    
    权限代码:<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['permissioncd']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = (int) $_smarty_tpl->tpl_vars['r']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total']);
?> <input name="permissioncode[]" type="checkbox" value=<?php echo $_smarty_tpl->tpl_vars['permissioncd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['permissioncode'];?>
 <?php if ((in_array($_smarty_tpl->tpl_vars['permissioncd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['permissioncode'],$_smarty_tpl->tpl_vars['permissioncode']->value))) {?>  checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['permissioncd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['permissioncode'];?>
 <?php endfor; endif; ?> <span>*</span><br />
    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>